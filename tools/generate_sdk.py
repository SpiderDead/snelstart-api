#!/usr/bin/env python3
from __future__ import annotations

import argparse
import re
import shutil
from collections import defaultdict
from pathlib import Path

import yaml

ROOT = Path(__file__).resolve().parent.parent
SOURCE_SPEC = ROOT / "snelstart-b2b-api-v2.yaml"
OPENAPI_DIR = ROOT / "openapi"
SPEC_PATH = OPENAPI_DIR / "snelstart-b2b-api-v2.yaml"

NAMESPACE = "SpiderDead\\SnelStartApi"
MODEL_NAMESPACE = f"{NAMESPACE}\\Model"
SERVICE_NAMESPACE = f"{NAMESPACE}\\Service"

PHP_KEYWORDS = {
    "abstract", "and", "array", "as", "break", "callable", "case", "catch", "class", "clone",
    "const", "continue", "declare", "default", "die", "do", "echo", "else", "elseif", "empty",
    "enddeclare", "endfor", "endforeach", "endif", "endswitch", "endwhile", "eval", "exit", "extends",
    "final", "fn", "for", "foreach", "function", "global", "goto", "if", "implements", "include",
    "include_once", "instanceof", "insteadof", "interface", "isset", "list", "match", "namespace", "new",
    "or", "print", "private", "protected", "public", "readonly", "require", "require_once", "return",
    "static", "switch", "throw", "trait", "try", "unset", "use", "var", "while", "xor", "yield",
}

HTTP_METHOD_ORDER = ["get", "post", "put", "patch", "delete", "options", "head", "trace"]


def php_str(value: str) -> str:
    return "'" + value.replace("\\", "\\\\").replace("'", "\\'") + "'"


def normalize_newline(text: str) -> str:
    return text.rstrip("\n") + "\n"


def split_words(value: str) -> list[str]:
    return [part for part in re.split(r"[^A-Za-z0-9]+", value) if part]


def studly(value: str) -> str:
    parts = split_words(value)
    if not parts:
        return "Value"
    out = "".join(part[:1].upper() + part[1:] for part in parts)
    if out[0].isdigit():
        out = "N" + out
    return out


def camel(value: str) -> str:
    s = studly(value)
    return s[:1].lower() + s[1:] if s else "value"


def sanitize_var(name: str) -> str:
    raw = name.lstrip("$")
    raw = re.sub(r"[^A-Za-z0-9_]", "_", raw)
    if not raw:
        raw = "value"
    if not re.match(r"[A-Za-z_]", raw):
        raw = "_" + raw
    if raw.lower() in PHP_KEYWORDS:
        raw += "Field"
    return raw


def ensure_unique(base: str, used: set[str]) -> str:
    candidate = base
    i = 2
    while candidate in used:
        candidate = f"{base}{i}"
        i += 1
    used.add(candidate)
    return candidate


def schema_key_from_ref(ref: str) -> str:
    return ref.split("/")[-1]


def build_schema_class_map(schemas: dict[str, dict]) -> dict[str, str]:
    used: set[str] = set()
    mapping: dict[str, str] = {}
    for key in sorted(schemas.keys()):
        mapping[key] = ensure_unique(studly(key), used)
    return mapping


def resolve_native_type(schema: dict | None, schema_map: dict[str, str]) -> tuple[str, str | None]:
    if not schema:
        return "mixed", None
    if "$ref" in schema:
        key = schema_key_from_ref(schema["$ref"])
        cls = schema_map.get(key)
        return (f"\\{MODEL_NAMESPACE}\\{cls}", None) if cls else ("mixed", None)

    t = schema.get("type")
    fmt = schema.get("format")
    if t == "integer":
        return "int", None
    if t == "number":
        return "float", None
    if t == "boolean":
        return "bool", None
    if t == "string":
        if fmt in {"date-time", "date"}:
            return "\\DateTimeImmutable", None
        return "string", None
    if t == "array":
        item_native, _ = resolve_native_type(schema.get("items") or {}, schema_map)
        return "array", item_native
    if t == "object":
        return "array", None
    return "mixed", None


def optional_type(native: str, required: bool) -> tuple[str, str]:
    if required:
        return native, ""
    if native == "mixed":
        return "mixed", " = null"
    return f"?{native}", " = null"


def response_descriptor(schema: dict | None, schema_map: dict[str, str]) -> dict[str, str]:
    if not schema:
        return {"kind": "none", "type": "", "return": "void", "doc": "void"}

    if "$ref" in schema:
        key = schema_key_from_ref(schema["$ref"])
        cls = schema_map.get(key)
        if cls:
            fqcn = f"\\{MODEL_NAMESPACE}\\{cls}"
            return {"kind": "class", "type": fqcn, "return": fqcn, "doc": fqcn}

    t = schema.get("type")
    if t == "array":
        items = schema.get("items") or {}
        if "$ref" in items:
            key = schema_key_from_ref(items["$ref"])
            cls = schema_map.get(key)
            if cls:
                fqcn = f"\\{MODEL_NAMESPACE}\\{cls}"
                return {"kind": "array", "type": f"array<{fqcn}>", "return": "array", "doc": f"array<int, {fqcn}>"}
        item_native, _ = resolve_native_type(items, schema_map)
        doc_type = item_native if item_native != "mixed" else "mixed"
        return {"kind": "array", "type": "array", "return": "array", "doc": f"array<int, {doc_type}>"}

    native, _ = resolve_native_type(schema, schema_map)
    if native in {"int", "float", "bool", "string"}:
        return {"kind": "primitive", "type": native, "return": native, "doc": native}
    if native.startswith("\\"):
        return {"kind": "class", "type": native, "return": native, "doc": native}
    return {"kind": "mixed", "type": "mixed", "return": "mixed", "doc": "mixed"}


def method_name_from_operation(operation_id: str, used: set[str]) -> str:
    base = camel(operation_id)
    if not base or base[0].isdigit():
        base = "op" + studly(operation_id)
        base = base[:1].lower() + base[1:]
    if base.lower() in PHP_KEYWORDS:
        base += "Operation"
    return ensure_unique(base, used)


def generate_model_class(schema: dict, class_name: str, schema_map: dict[str, str]) -> str:
    enum_values = schema.get("enum")
    schema_type = schema.get("type")
    if enum_values is not None and schema_type in {"string", "integer"}:
        backing = "string" if schema_type == "string" else "int"
        used_cases: set[str] = set()
        case_lines: list[str] = []
        for value in enum_values:
            raw = re.sub(r"[^A-Za-z0-9]+", "_", str(value)).strip("_").upper() or "VALUE"
            if raw[0].isdigit():
                raw = "VALUE_" + raw
            case_name = ensure_unique(raw, used_cases)
            literal = php_str(str(value)) if backing == "string" else str(int(value))
            case_lines.append(f"    case {case_name} = {literal};")
        return normalize_newline(
            f"""<?php

declare(strict_types=1);

namespace {MODEL_NAMESPACE};

enum {class_name}: {backing}
{{
{chr(10).join(case_lines)}
}}
"""
        )

    properties = schema.get("properties") or {}
    needs_serialized_name = False
    prop_blocks: list[str] = []
    for prop_name in sorted(properties.keys()):
        prop_schema = properties[prop_name] or {}
        prop_var = sanitize_var(prop_name)
        if prop_var != prop_name:
            needs_serialized_name = True
        native, item_native = resolve_native_type(prop_schema, schema_map)
        hint = "mixed" if native == "mixed" else f"?{native}"
        lines: list[str] = []
        if native == "array":
            item_doc = "mixed" if item_native in {None, "array"} else item_native
            lines.append(f"    /** @var array<int, {item_doc}>|null */")
        if prop_var != prop_name:
            lines.append(f"    #[SerializedName({php_str(prop_name)})]")
        lines.append(f"    public {hint} ${prop_var} = null;")
        prop_blocks.append("\n".join(lines))

    if not properties:
        native, item_native = resolve_native_type(schema, schema_map)
        if native == "array":
            item_doc = "mixed" if item_native in {None, "array"} else item_native
            prop_blocks.append(f"    /** @var array<int, {item_doc}>|null */\n    public ?array $value = null;")
        elif native in {"int", "float", "bool", "string", "\\DateTimeImmutable"} or native.startswith("\\"):
            prop_blocks.append(f"    public ?{native} $value = null;")
        else:
            prop_blocks.append("    public mixed $value = null;")

    use_block = "\nuse Symfony\\Component\\Serializer\\Attribute\\SerializedName;\n" if needs_serialized_name else ""
    props_text = "\n\n".join(prop_blocks)

    return normalize_newline(
        f"""<?php

declare(strict_types=1);

namespace {MODEL_NAMESPACE};{use_block}
final class {class_name}
{{
{props_text}
}}
"""
    )


def generate_operation_data(spec: dict, schema_map: dict[str, str]) -> tuple[list[dict], dict[str, list[dict]]]:
    operations: list[dict] = []
    paths = spec.get("paths") or {}
    for path in sorted(paths.keys()):
        path_item = paths[path] or {}
        path_params = path_item.get("parameters") or []
        for method in HTTP_METHOD_ORDER:
            if method not in path_item:
                continue
            op = path_item[method] or {}
            operation_id = op.get("operationId") or f"{method}-{path}"
            tag = (op.get("tags") or ["default"])[0]

            combined: dict[tuple[str, str], dict] = {}
            for param in path_params + (op.get("parameters") or []):
                if "$ref" in param:
                    continue
                name = param.get("name")
                loc = param.get("in")
                if name and loc:
                    combined[(name, loc)] = param

            params = []
            for (_, loc), param in combined.items():
                name = param["name"]
                required = bool(param.get("required", False) or loc == "path")
                native, _ = resolve_native_type(param.get("schema") or {}, schema_map)
                hint, default = optional_type(native, required)
                params.append({"name": name, "in": loc, "required": required, "var": sanitize_var(name), "hint": hint, "default": default})

            body = None
            request_body = op.get("requestBody") or {}
            if isinstance(request_body, dict):
                content = request_body.get("content") or {}
                body_schema = None
                for ct in ("application/json", "text/json"):
                    if ct in content and isinstance(content[ct], dict):
                        body_schema = content[ct].get("schema")
                        if body_schema:
                            break
                if body_schema is None and content:
                    first = next(iter(content.values()))
                    if isinstance(first, dict):
                        body_schema = first.get("schema")
                if body_schema is not None:
                    native, _ = resolve_native_type(body_schema, schema_map)
                    hint, default = optional_type(native, bool(request_body.get("required", False)))
                    body = {"var": "body", "hint": hint, "default": default}

            response_schema = None
            responses = op.get("responses") or {}
            codes = sorted([str(code) for code in responses.keys() if str(code).startswith("2")])
            for code in codes:
                response = responses[code] or {}
                content = response.get("content") or {}
                selected = None
                for ct in ("application/json", "text/json"):
                    if ct in content and isinstance(content[ct], dict):
                        selected = content[ct].get("schema")
                        if selected is not None:
                            break
                if selected is None and content:
                    first = next(iter(content.values()))
                    if isinstance(first, dict):
                        selected = first.get("schema")
                if selected is not None:
                    response_schema = selected
                    break

            operations.append(
                {
                    "operation_id": operation_id,
                    "method": method.upper(),
                    "path": path,
                    "tag": tag,
                    "params": params,
                    "body": body,
                    "response": response_descriptor(response_schema, schema_map),
                }
            )

    tags: dict[str, list[dict]] = defaultdict(list)
    for op in operations:
        tags[op["tag"]].append(op)
    for tag_ops in tags.values():
        used: set[str] = set()
        for op in tag_ops:
            op["method_name"] = method_name_from_operation(op["operation_id"], used)
    return operations, tags


def generate_service_class(service_class: str, operations: list[dict]) -> str:
    blocks: list[str] = []
    for op in sorted(operations, key=lambda o: (o["path"], o["method"], o["operation_id"])):
        path_params = sorted([p for p in op["params"] if p["in"] == "path"], key=lambda p: (not p["required"], p["name"]))
        query_params = sorted([p for p in op["params"] if p["in"] == "query"], key=lambda p: (not p["required"], p["name"]))
        sig_parts = [f"{p['hint']} ${p['var']}{p['default']}" for p in path_params + query_params]
        if op["body"] is not None:
            sig_parts.append(f"{op['body']['hint']} $body{op['body']['default']}")
        signature = ", ".join(sig_parts)

        doc = ["    /**", f"     * Operation ID: {op['operation_id']}", "     * @throws \\SpiderDead\\SnelStartApi\\Exception\\ApiException"]
        if op["response"]["return"] == "array" and op["response"]["doc"] != "array":
            doc.insert(2, f"     * @return {op['response']['doc']}")
        doc.append("     */")

        return_decl = "" if op["response"]["return"] == "mixed" else f": {op['response']['return']}"
        lines = [*doc, f"    public function {op['method_name']}({signature}){return_decl}", "    {", "        $pathParams = [];"]
        for p in path_params:
            if p["required"]:
                lines.append(f"        $pathParams[{php_str(p['name'])}] = ${p['var']};")
            else:
                lines.append(f"        if (${p['var']} !== null) {{")
                lines.append(f"            $pathParams[{php_str(p['name'])}] = ${p['var']};")
                lines.append("        }")
        lines.append("        $queryParams = [];")
        for p in query_params:
            if p["required"]:
                lines.append(f"        $queryParams[{php_str(p['name'])}] = ${p['var']};")
            else:
                lines.append(f"        if (${p['var']} !== null) {{")
                lines.append(f"            $queryParams[{php_str(p['name'])}] = ${p['var']};")
                lines.append("        }")
        body_expr = "$body" if op["body"] is not None else "null"
        lines.append(f"        $result = $this->call({php_str(op['operation_id'])}, $pathParams, $queryParams, {body_expr});")
        if op["response"]["return"] == "void":
            lines.append("        return;")
        else:
            lines.append("        return $result;")
        lines.append("    }")
        blocks.append("\n".join(lines))

    return normalize_newline(
        f"""<?php

declare(strict_types=1);

namespace {SERVICE_NAMESPACE};

final class {service_class} extends AbstractService
{{
{"\n\n".join(blocks)}
}}
"""
    )


def generate_operation_map(operations: list[dict]) -> str:
    lines = [
        "<?php",
        "",
        "declare(strict_types=1);",
        "",
        f"namespace {NAMESPACE}\\Generated;",
        "",
        "use InvalidArgumentException;",
        "",
        "final class OperationMap",
        "{",
        "    /** @var array<string, array{method: string, path: string, response_kind: string, response_type: string}> */",
        "    private const OPERATIONS = [",
    ]
    for op in sorted(operations, key=lambda o: o["operation_id"]):
        response = op["response"]
        lines.append(f"        {php_str(op['operation_id'])} => [")
        lines.append(f"            'method' => {php_str(op['method'])},")
        lines.append(f"            'path' => {php_str(op['path'])},")
        lines.append(f"            'response_kind' => {php_str(response['kind'])},")
        lines.append(f"            'response_type' => {php_str(response['type'])},")
        lines.append("        ],")
    lines += [
        "    ];",
        "",
        "    /** @return array{method: string, path: string, response_kind: string, response_type: string} */",
        "    public static function get(string $operationId): array",
        "    {",
        "        if (!isset(self::OPERATIONS[$operationId])) {",
        "            throw new InvalidArgumentException(sprintf('Unknown operation id: %s', $operationId));",
        "        }",
        "",
        "        return self::OPERATIONS[$operationId];",
        "    }",
        "",
        "    /** @return array<string, array{method: string, path: string, response_kind: string, response_type: string}> */",
        "    public static function all(): array",
        "    {",
        "        return self::OPERATIONS;",
        "    }",
        "}",
        "",
    ]
    return "\n".join(lines)


def generate_schema_map(schema_map: dict[str, str]) -> str:
    lines = [
        "<?php",
        "",
        "declare(strict_types=1);",
        "",
        f"namespace {NAMESPACE}\\Generated;",
        "",
        "final class SchemaMap",
        "{",
        "    /** @var array<string, class-string> */",
        "    private const SCHEMAS = [",
    ]
    for schema_key in sorted(schema_map.keys()):
        lines.append(f"        {php_str(schema_key)} => \\{MODEL_NAMESPACE}\\{schema_map[schema_key]}::class,")
    lines += [
        "    ];",
        "",
        "    /** @return array<string, class-string> */",
        "    public static function all(): array",
        "    {",
        "        return self::SCHEMAS;",
        "    }",
        "}",
        "",
    ]
    return "\n".join(lines)


def generate_client_class(accessors: list[tuple[str, str, str]]) -> str:
    use_lines = [
        "use Psr\\Http\\Client\\ClientInterface;",
        "use Psr\\Http\\Message\\RequestFactoryInterface;",
        "use Psr\\Http\\Message\\StreamFactoryInterface;",
        "use SpiderDead\\SnelStartApi\\Config\\ClientConfig;",
        "use SpiderDead\\SnelStartApi\\Http\\ApiTransport;",
        "use SpiderDead\\SnelStartApi\\Http\\JsonCodec;",
        "use Symfony\\Component\\Serializer\\SerializerInterface;",
    ]
    for _, service_class, _ in accessors:
        use_lines.append(f"use {SERVICE_NAMESPACE}\\{service_class};")
    methods: list[str] = []
    for accessor, service_class, tag in accessors:
        methods.append(
            "\n".join(
                [
                    f"    public function {accessor}(): {service_class}",
                    "    {",
                    f"        if (!isset($this->services[{php_str(tag)}])) {{",
                    f"            $this->services[{php_str(tag)}] = new {service_class}($this->transport);",
                    "        }",
                    "",
                    f"        return $this->services[{php_str(tag)}];",
                    "    }",
                ]
            )
        )
    return normalize_newline(
        f"""<?php

declare(strict_types=1);

namespace {NAMESPACE};

{"\n".join(sorted(use_lines))}

final class SnelStartClient
{{
    private ApiTransport $transport;

    /** @var array<string, object> */
    private array $services = [];

    public function __construct(
        ClientInterface $httpClient,
        RequestFactoryInterface $requestFactory,
        StreamFactoryInterface $streamFactory,
        ClientConfig $config,
        ?SerializerInterface $serializer = null
    ) {{
        $codec = new JsonCodec($serializer);
        $this->transport = new ApiTransport($httpClient, $requestFactory, $streamFactory, $config, $codec);
    }}

    public function transport(): ApiTransport
    {{
        return $this->transport;
    }}

{"\n\n".join(methods)}
}}
"""
    )


def write_file(path: Path, content: str, check: bool, changed: list[Path]) -> None:
    normalized = normalize_newline(content)
    if path.exists() and path.read_text(encoding="utf-8") == normalized:
        return
    changed.append(path)
    if check:
        return
    path.parent.mkdir(parents=True, exist_ok=True)
    path.write_text(normalized, encoding="utf-8")


def main() -> int:
    parser = argparse.ArgumentParser(description="Generate SDK files from OpenAPI")
    parser.add_argument("--check", action="store_true", help="Fail if generated output is not up-to-date")
    args = parser.parse_args()

    OPENAPI_DIR.mkdir(parents=True, exist_ok=True)
    if SOURCE_SPEC.exists() and not SPEC_PATH.exists() and not args.check:
        shutil.copyfile(SOURCE_SPEC, SPEC_PATH)
    if not SPEC_PATH.exists():
        raise SystemExit(f"OpenAPI spec not found at {SPEC_PATH}")

    spec = yaml.safe_load(SPEC_PATH.read_text(encoding="utf-8"))
    schemas = (spec.get("components") or {}).get("schemas") or {}
    schema_map = build_schema_class_map(schemas)
    operations, tags = generate_operation_data(spec, schema_map)

    tag_to_service: dict[str, str] = {}
    used_services: set[str] = set()
    for tag in sorted(tags.keys()):
        tag_to_service[tag] = ensure_unique(studly(tag) + "Service", used_services)

    accessors: list[tuple[str, str, str]] = []
    used_accessors: set[str] = set()
    for tag in sorted(tags.keys()):
        accessor = camel(tag)
        if not accessor or accessor[0].isdigit():
            accessor = "tag" + studly(tag)
            accessor = accessor[:1].lower() + accessor[1:]
        if accessor.lower() in PHP_KEYWORDS:
            accessor += "Service"
        accessors.append((ensure_unique(accessor, used_accessors), tag_to_service[tag], tag))

    files: dict[str, str] = {}
    files["src/Generated/OperationMap.php"] = generate_operation_map(operations)
    files["src/Generated/SchemaMap.php"] = generate_schema_map(schema_map)
    files["src/SnelStartClient.php"] = generate_client_class(accessors)
    for tag in sorted(tags.keys()):
        files[f"src/Service/{tag_to_service[tag]}.php"] = generate_service_class(tag_to_service[tag], tags[tag])
    for key in sorted(schemas.keys()):
        files[f"src/Model/{schema_map[key]}.php"] = generate_model_class(schemas[key] or {}, schema_map[key], schema_map)

    changed: list[Path] = []
    for rel, content in files.items():
        write_file(ROOT / rel, content, args.check, changed)

    if args.check and changed:
        print("Generated files are out of date:")
        for path in changed:
            print(f"- {path.relative_to(ROOT)}")
        return 1

    print("Generated files are up to date." if args.check else f"Generated {len(files)} files.")
    return 0


if __name__ == "__main__":
    raise SystemExit(main())

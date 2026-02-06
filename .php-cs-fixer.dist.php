<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()
    ->in([
        __DIR__ . '/src/Auth',
        __DIR__ . '/src/Config',
        __DIR__ . '/src/Exception',
        __DIR__ . '/src/Http',
        __DIR__ . '/tests',
    ])
    ->append([__DIR__ . '/src/Service/AbstractService.php'])
    ->name('*.php');

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(false)
    ->setRules([
        '@PSR12' => true,
        'array_syntax' => ['syntax' => 'short'],
        'no_unused_imports' => true,
        'ordered_imports' => true,
    ])
    ->setFinder($finder);

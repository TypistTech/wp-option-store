<?php

declare(strict_types=1);
include __DIR__ . '/../../vendor/autoload.php';

$kernel = \AspectMock\Kernel::getInstance();
$kernel->init(
    [
        'debug' => true,
        'cacheDir' => getenv('TMPDIR') . 'AspectMock/wp-option-store',
        'includePaths' => [codecept_root_dir('src')],
        'excludePaths' => [codecept_root_dir('tests')],
    ]
);

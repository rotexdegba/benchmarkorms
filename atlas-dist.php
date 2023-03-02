<?php // config file for Atlas
$pdo_opts = include __DIR__ . DIRECTORY_SEPARATOR . 'pdo.php';

return [
    'pdo' => $pdo_opts,
    'namespace' => 'Rotexsoft\\PhpOrmBenchmarks\\AtlasOrm\\Blog',
    'directory' => './benchmark-code/atlas-orm-files',
    'transform' => new \Atlas\Cli\Transform([
        'phinxlog' => null,
        // use a value of null to skip the table entirely
    ]),
];

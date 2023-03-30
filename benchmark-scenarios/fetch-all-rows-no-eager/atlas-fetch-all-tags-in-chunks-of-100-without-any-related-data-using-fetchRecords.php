<?php
include __DIR__ .DIRECTORY_SEPARATOR. '../load-atlas.php';

$scenario = ucfirst(str_replace( ['-','.php'], [' ', ''], basename(__FILE__) ));

echo \Rotexsoft\PhpOrmBenchmarks\Ubench\MessageResources::RUNNING_SCENARIO 
    . $scenario . PHP_EOL . PHP_EOL;

$runner = new \Rotexsoft\PhpOrmBenchmarks\Ubench\AtlasNoEagerLoadingRunner();

$runner(
    new Ubench(), $atlas, 'tags', 'name', 0, 100,
    \Rotexsoft\PhpOrmBenchmarks\AtlasOrm\AtlasFetchStrategies::FETCH_RECORDS,
    $_SERVER['argv'][1]
);

echo \Rotexsoft\PhpOrmBenchmarks\Ubench\MessageResources::SCENARIO_ENDED
    . $scenario . PHP_EOL 
    . str_repeat('=========================================================', 2)
    . PHP_EOL . PHP_EOL;

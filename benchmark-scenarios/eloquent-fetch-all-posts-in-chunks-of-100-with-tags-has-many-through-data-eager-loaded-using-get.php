<?php
include __DIR__ .DIRECTORY_SEPARATOR. '../load-eloquent.php';

$scenario = str_replace( ['-','.php'], [' ', ''], basename(__FILE__) );

echo \Rotexsoft\PhpOrmBenchmarks\Ubench\MessageResources::RUNNING_SCENARIO 
    . $scenario . PHP_EOL . PHP_EOL;

$runner = new \Rotexsoft\PhpOrmBenchmarks\Ubench\EloquentHasManyOrHasManyThroughRunner();

$runner(
    new Ubench(), 'posts', ['tags'], 'title', 'name', 0, 100, 
    \Rotexsoft\PhpOrmBenchmarks\Eloquent\EloquentFetchStrategies::GET
);

echo \Rotexsoft\PhpOrmBenchmarks\Ubench\MessageResources::SCENARIO_ENDED
    . $scenario . PHP_EOL 
    . str_repeat('=========================================================', 2)
    . PHP_EOL . PHP_EOL;

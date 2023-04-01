<?php
include __DIR__ .DIRECTORY_SEPARATOR. '../../../load-eloquent.php';

$scenario = ucfirst(str_replace( ['-','.php'], [' ', ''], basename(__FILE__) ));

echo \Rotexsoft\PhpOrmBenchmarks\Ubench\MessageResources::RUNNING_SCENARIO 
    . $scenario . PHP_EOL . PHP_EOL;

$runner = new \Rotexsoft\PhpOrmBenchmarks\Ubench\EloquentBelongsToOrHasOneRunner();

$runner(
    new Ubench(), 'posts_tags', [ 'post' => 'title', 'tag' => 'name' ], 'post_id', 0, 1000,
    \Rotexsoft\PhpOrmBenchmarks\Eloquent\EloquentFetchStrategies::LAZY,
    $_SERVER['argv'][1], true
);

echo \Rotexsoft\PhpOrmBenchmarks\Ubench\MessageResources::SCENARIO_ENDED
    . $scenario . PHP_EOL 
    . str_repeat('=========================================================', 2)
    . PHP_EOL . PHP_EOL;

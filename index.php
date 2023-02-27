<?php
include './vendor/autoload.php';
ini_set('memory_limit', -1); // no memory limit

use Atlas\Orm\Atlas;

var_dump('atlas/orm', \Composer\InstalledVersions::getVersion('atlas/orm'));
var_dump('doctrine/orm', \Composer\InstalledVersions::getVersion('doctrine/orm'));
var_dump('illuminate/database', \Composer\InstalledVersions::getVersion('illuminate/database'));
var_dump('rotexsoft/leanorm', \Composer\InstalledVersions::getVersion('rotexsoft/leanorm'));
var_dump('gabordemooij/redbean', \Composer\InstalledVersions::getVersion('gabordemooij/redbean'));


$ubench = new Ubench();

\Rotexsoft\PhpOrmBenchmarks\BootstrapEloquent::setup(); 

$atlasSettings  = require_once './atlas.php';
echo 'PDO Config'. PHP_EOL;
var_dump($atlasSettings['pdo']);

$leanArgs = $atlasSettings['pdo'];
$leanArgs[1] ??= '';
$leanArgs[2] ??= '';

$leanOrmAuthors = new \Rotexsoft\PhpOrmBenchmarks\LeanOrm\Blog\Authors\AuthorsModel(...$leanArgs);
$leanOrmComments = new \Rotexsoft\PhpOrmBenchmarks\LeanOrm\Blog\Comments\CommentsModel(...$leanArgs);
$leanOrmPosts = new \Rotexsoft\PhpOrmBenchmarks\LeanOrm\Blog\Posts\PostsModel(...$leanArgs);
$leanOrmPostsTags = new \Rotexsoft\PhpOrmBenchmarks\LeanOrm\Blog\PostsTags\PostsTagsModel(...$leanArgs);
$leanOrmSummaries = new \Rotexsoft\PhpOrmBenchmarks\LeanOrm\Blog\Summaries\SummariesModel(...$leanArgs);
$leanOrmTags = new \Rotexsoft\PhpOrmBenchmarks\LeanOrm\Blog\Tags\TagsModel(...$leanArgs);

$atlas = Atlas::new(
    $atlasSettings['pdo'][0],
    $atlasSettings['pdo'][1],
    $atlasSettings['pdo'][2]
);

$benchAtlasHasManyOrHasManyThrough = 
    new Rotexsoft\PhpOrmBenchmarks\Ubench\AtlasHasManyOrHasManyThroughRunner();

$benchEloquentHasManyOrHasManyThrough = 
    new Rotexsoft\PhpOrmBenchmarks\Ubench\EloquentHasManyOrHasManyThroughRunner();
    
$benchLeanHasManyOrHasManyThrough = 
    new \Rotexsoft\PhpOrmBenchmarks\Ubench\LeanOrmHasManyOrHasManyThroughRunner();


$benchEloquentHasManyOrHasManyThrough(
    $ubench,
    \Rotexsoft\PhpOrmBenchmarks\Eloquent\Blog\Post::class,
    'tags',
    'post_id',
    0,
    1_000
);
echo 'Eloquent Posts with Tags (HasManyThrough) ' . $ubench->getTime() . ' ' . $ubench->getMemoryUsage() . ' ' . $ubench->getMemoryPeak() . PHP_EOL. PHP_EOL;

$benchLeanHasManyOrHasManyThrough(
    $ubench,
    $leanOrmPosts,
    'tags',
    'post_id',
    0,
    1_000
);
echo 'LeanORM Post with Tags (HasManyThrough) ' . $ubench->getTime() . ' ' . $ubench->getMemoryUsage() . ' ' . $ubench->getMemoryPeak() . PHP_EOL. PHP_EOL;

exit;


if(true) {
    
    $benchAtlasHasManyOrHasManyThrough(
        $ubench,  $atlas, Rotexsoft\PhpOrmBenchmarks\AtlasOrm\Blog\Author\Author::class, 
        'posts',  // relation name (has many or has many through)
        'author_id',   // parent record property to access
        0, // offset
        999 // limit
    );
    echo 'Atlas Authors with Posts (HasMany) ' . $ubench->getTime() . ' ' . $ubench->getMemoryUsage() . ' ' . $ubench->getMemoryPeak() . PHP_EOL. PHP_EOL;
    
    
    $benchLeanHasManyOrHasManyThrough(
        $ubench,
        $leanOrmAuthors,
        'posts',
        'author_id',
        0,
        999
    );
    echo 'LeanORM Authors with Posts (HasMany) ' . $ubench->getTime() . ' ' . $ubench->getMemoryUsage() . ' ' . $ubench->getMemoryPeak() . PHP_EOL. PHP_EOL;
    
    
    $benchEloquentHasManyOrHasManyThrough(
        $ubench,
        \Rotexsoft\PhpOrmBenchmarks\Eloquent\Blog\Author::class,
        'posts',
        'author_id',
        0,
        999
    );
    echo 'Eloquent Authors with Posts (HasMany) ' . $ubench->getTime() . ' ' . $ubench->getMemoryUsage() . ' ' . $ubench->getMemoryPeak() . PHP_EOL. PHP_EOL;

    
    $benchLeanHasManyOrHasManyThrough(
        $ubench,
        $leanOrmPosts,
        'tags',
        'post_id',
        0,
        50_000
    );
    echo 'LeanORM Post with Tags (HasManyThrough) ' . $ubench->getTime() . ' ' . $ubench->getMemoryUsage() . ' ' . $ubench->getMemoryPeak() . PHP_EOL. PHP_EOL;
    
//    $benchAtlasHasManyOrHasManyThrough(
//        $ubench,  $atlas, Rotexsoft\PhpOrmBenchmarks\AtlasOrm\Blog\Post\Post::class, 
//        'tags', // relation name (has many or has many through)
//        'title', // parent record property to access
//        0, // offset
//        100 // limit
//    );
//    echo 'Atlas Post with Tags (HasManyThrough) ' . $ubench->getTime() . ' ' . $ubench->getMemoryUsage() . ' ' . $ubench->getMemoryPeak() . PHP_EOL. PHP_EOL;
    
} // if(true|false)

//$atlasToLeanOrmDataComparator = new \Rotexsoft\PhpOrmBenchmarks\AtlasToLeanOrmDataComparator();
//
//// test that author->posts fetched by leanOrm & Atlas match for each author
//$atlasToLeanOrmDataComparator->ensureHasManyOrHasManyThroughDataAreEqual(
//    $atlas,
//    \Rotexsoft\PhpOrmBenchmarks\AtlasOrm\Blog\Author\Author::class,
//    $leanOrmAuthors, 
//    'author_id', 
//    'posts', 
//    'Author',
//    'title',    // for each author, get all the titles for each of author's posts 
//                // retrieved by atlas & lean, sort the titles & make sure they match
//    0,          // offset
//    50_000      // limit
//);


<?php
/** @noinspection SpellCheckingInspection */
include './vendor/autoload.php';

ini_set('memory_limit', -1); // no memory limit

use Atlas\Orm\Atlas;

$ubench = new Ubench();

$atlasSettings  = require_once './atlas.php';
var_dump($atlasSettings['pdo']);

$leanArgs = $atlasSettings['pdo'];
$leanArgs[1] ??= '';
$leanArgs[2] ??= '';
$leanOrm = new \Benchmark\LeanOrm\Blog\Authors\AuthorsModel(...$leanArgs);
$leanOrm2 = new \Benchmark\LeanOrm\Blog\Posts\PostsModel(...$leanArgs);

$atlas = Atlas::new(
    $atlasSettings['pdo'][0],
    $atlasSettings['pdo'][1],
    $atlasSettings['pdo'][2]
);

if(false) {
    
    $ubench->run(
        function(Atlas $atlas) {

            $i = 1;
            $offset = 0;
            $limit = 999;

            do {
                $authorRecordSet = $atlas
                    ->select(\Benchmark\AtlasOrm\Blog\Author\Author::CLASS)
                    ->with(['posts'])
                    ->limit($limit)
                    ->offset($offset)
                    ->fetchRecordSet();

                /** @var \Benchmark\AtlasOrm\Blog\Author\AuthorRecord $authorRecord */
                foreach ($authorRecordSet as $authorRecord) {

                    $name = $authorRecord->name;
                    //var_dump("{$name} {$i}");
                    //var_dump("{$name} {$i} with {$authorRecord->posts->count()} posts");
                    $i++;
                }

                $offset += $limit;
            }while($authorRecordSet->count() > 0);
        },
        $atlas
    );
    echo 'Atlas Authors with Posts (HasMany) ' . $ubench->getTime(). PHP_EOL. PHP_EOL;

    $ubench->run(
        function(\LeanOrm\Model $lean) {

            $i = 1;
            $offset = 0;
            $limit = 999;

            do {
                $authorRecordSet = $lean->fetchRecordsIntoArray(
                    $lean->getSelect()
                         ->limit($limit)
                         ->offset($offset)
                    ,
                    ['posts']
                );

                /** @var \Benchmark\AtlasOrm\Blog\Author\AuthorRecord $authorRecord */
                foreach ($authorRecordSet as $authorRecord) {

                    $name = $authorRecord['name'];
                    //var_dump("{$name} {$i}");
                    //var_dump("{$name} {$i} with {$authorRecord->posts->count()} posts");
                    $i++;
                }

                $offset += $limit;
            }while(count($authorRecordSet) > 0);
        },
        $leanOrm
    );
    echo 'LeanORM Authors with Posts (HasMany) ' . $ubench->getTime() . PHP_EOL. PHP_EOL;

    $ubench->run(
        function(\LeanOrm\Model $lean) {

            $i = 1;
            $offset = 0;
            $limit = 100;

            do {
                $postsRecordSet = $lean->fetchRecordsIntoCollection(
                    $lean->getSelect()
                         ->limit($limit)
                         ->offset($offset)
                    ,
                    ['tags']
                );

                /** @var \Benchmark\LeanOrm\Blog\Posts\PostRecord $postRecord */
                foreach ($postsRecordSet as $postRecord) {

                    $name = $postRecord['title'];
                    //var_dump("{$name} {$i}");
                    //var_dump("{$name} {$i} with {$postRecord->tags->count()} tags");
                    $i++;
                }

                $offset += $limit;
            }while(count($postsRecordSet) > 0);
        },
        $leanOrm2
    );
    echo 'LeanORM Post with Tags (HasManyThrough) ' . $ubench->getTime() . PHP_EOL. PHP_EOL;

    $ubench->run(
        function(Atlas $atlas) {

            $i = 1;
            $offset = 0;
            $limit = 100;

            do {
                $postsRecordSet = $atlas
                    ->select(Benchmark\AtlasOrm\Blog\Post\Post::class)
                    ->with(['tags'])
                    ->limit($limit)
                    ->offset($offset)
                    ->fetchRecordSet();

                /** @var \Benchmark\AtlasOrm\Blog\Post\PostRecord $postRecord */
                foreach ($postsRecordSet as $postRecord) {

                    $name = $postRecord->title;
                    //var_dump("{$name} {$i}");
                    //var_dump("{$name} {$i} with {$postRecord->tags->count()} tags");
                    $i++;
                }

                $offset += $limit;
            }while($postsRecordSet->count() > 0);
        },
        $atlas
    );
    echo 'Atlas Post with Tags (HasManyThrough) ' . $ubench->getTime() . PHP_EOL. PHP_EOL;
    
} // if(false)

$offset = 0;
$limit = 50_000;
do {
    $postRecordSet = $atlas
        ->select(\Benchmark\AtlasOrm\Blog\Post\Post::class)
        ->with(['tags'])
        ->limit($limit)
        ->offset($offset)
        ->fetchRecordSet();
    
    $postRecordSet2 = $leanOrm2->fetchRecordsIntoCollectionKeyedOnPkVal(
        $leanOrm2->getSelect()
             ->limit($limit)
             ->offset($offset)
        ,
        ['tags']
    );

    /** @var \Benchmark\AtlasOrm\Blog\Post\PostRecord $postRecord */
    foreach ($postRecordSet as $postRecord) {

        $postRecord2 = $postRecordSet2[$postRecord->post_id];
        
        if(count($postRecord->tags) !== count($postRecord2->tags)) {
            
            echo "Atlas Post {$postRecord->post_id} has differing tags from LeanOrm Post with the same id !!!!".PHP_EOL;
        }
        
        if(count($postRecord->tags) > 0 && count($postRecord2->tags) > 0) {
            
            $atlasPostTitles = VersatileCollections\GenericCollection::makeNew($postRecord->tags)->column('name')->sort()->makeAllKeysNumeric()->toArray();
            $leanPostTitles = VersatileCollections\GenericCollection::makeNew($postRecord2->tags)->column('name')->sort()->makeAllKeysNumeric()->toArray();
            
            //var_dump($atlasPostTitles);
            //var_dump($leanPostTitles);
            
            if($atlasPostTitles !== $leanPostTitles) {

                echo "Atlas Post {$postRecord->post_id} has differing tags from LeanOrm Post with the same id".PHP_EOL;
            }
        } else {
            
            echo "Atlas Post {$postRecord->author_id} has zero tags".PHP_EOL;
            var_dump(get_debug_type($postRecord->tags));
            var_dump(get_debug_type($postRecord2->tags));
        }
    }

    $offset += $limit;
}while($postRecordSet->count() > 0);

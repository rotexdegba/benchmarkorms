<?php
/** @noinspection SpellCheckingInspection */
include './vendor/autoload.php';

use Atlas\Orm\Atlas;

$ubench = new Ubench();

$atlasSettings  = require_once './atlas.php';

$leanArgs = $atlasSettings['pdo'];
$leanArgs[1] ??= '';
$leanArgs[2] ??= '';
$leanOrm = new \Benchmark\LeanOrm\Blog\Authors\AuthorsModel(...$leanArgs);

$atlas = Atlas::new(
    $atlasSettings['pdo'][0],
    $atlasSettings['pdo'][1],
    $atlasSettings['pdo'][2]
);

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
echo $ubench->getTime(). PHP_EOL. PHP_EOL;

$ubench->run(
    function(\LeanOrm\Model $lean) {

        $i = 1;
        $offset = 0;
        $limit = 999;

        do {
            $authorRecordSet = $lean->fetchRecordsIntoCollection(
                $lean->getSelect()
                     ->limit($limit)
                     ->offset($offset)
                ,
                ['posts']
            );

            /** @var \Benchmark\AtlasOrm\Blog\Author\AuthorRecord $authorRecord */
            foreach ($authorRecordSet as $authorRecord) {

                $name = $authorRecord->name;
                //var_dump("{$name} {$i}");
                //var_dump("{$name} {$i} with {$authorRecord->posts->count()} posts");
                $i++;
            }

            $offset += $limit;
        }while(count($authorRecordSet) > 0);
    },
    $leanOrm
);
echo $ubench->getTime() . PHP_EOL;

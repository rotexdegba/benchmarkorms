<?php
include './vendor/autoload.php';

use Atlas\Orm\Atlas;

$atlasSettings  = require_once './atlas.php';

$atlas = Atlas::new(...$atlasSettings['pdo']);

$userRecordSet = $atlas
    ->select(\TestAtlasOrm\Db\User\User::CLASS)
    ->with(['posts_created', 'posts_updated', 'comments'])
    //->orderBy('thread_id DESC')
    //->limit(100)
    ->fetchRecordSet();

foreach ($userRecordSet as $userRecord) {
    
    echo $userRecord->username . PHP_EOL;
    
    var_dump($userRecord->posts_created->getArrayCopy());
    var_dump($userRecord->posts_updated->getArrayCopy());
    var_dump($userRecord->comments->getArrayCopy());
}

<?php
include './vendor/autoload.php';

//use Atlas\Orm\Atlas;
//
//$atlasSettings  = require_once './atlas.php';
//
//$atlas = Atlas::new(...$atlasSettings['pdo']);
//
//$userRecordSet = $atlas
//    ->select(\TestAtlasOrm\Db\User\User::CLASS)
//    ->with(['posts_created', 'posts_updated', 'comments'])
//    //->orderBy('thread_id DESC')
//    //->limit(100)
//    ->fetchRecordSet();
//
//foreach ($userRecordSet as $userRecord) {
//    
//    echo $userRecord->username . PHP_EOL;
//    
//    var_dump($userRecord->posts_created->getArrayCopy());
//    var_dump($userRecord->posts_updated->getArrayCopy());
//    var_dump($userRecord->comments->getArrayCopy());
//}
use \TestLeanOrm\Db\Posts\PostsModel;

use \TestLeanOrm\Db\Authors\AuthorsModel;
use \TestLeanOrm\Db\Authors\AuthorRecord;
use \TestLeanOrm\Db\Authors\AuthorsCollection;

use \TestLeanOrm\Db\Summaries\SummariesModel;
use \TestLeanOrm\Db\Summaries\SummaryRecord;
use \TestLeanOrm\Db\Summaries\SummariesCollection;

use \TestLeanOrm\Db\Comments\CommentsModel;
use \TestLeanOrm\Db\Comments\CommentRecord;
use \TestLeanOrm\Db\Comments\CommentsCollection;

use \TestLeanOrm\Db\Tags\TagsModel;
use \TestLeanOrm\Db\Tags\TagRecord;
use \TestLeanOrm\Db\Tags\TagsCollection;


// This function creates a single instance of a model class 
// for each specified model class and returns that instance 
// everytime this function is called.
$createOrGetModel = function(
    string $modelName, 
    string $tableName='', 
    string $primaryColName=''
): \LeanOrm\Model {
    
    static $models;
    
    if(!$models) {
        
        $models = [];
    }
    
    if(array_key_exists($modelName, $models)) {
        
        return $models[$modelName];
    }

    if(!is_a($modelName, \LeanOrm\Model::class, true)) {
        
        throw new \Exception(
            "ERROR: The class name `{$modelName}` supplied for creating a new model is not "
           . "`" . \LeanOrm\Model::class . "` or any of its sub-classes!"
        );
    }
    
    $models[$modelName] = new $modelName(
        'mysql:host=10.0.0.243;dbname=blog', 'rotimi', 'rotimi',
        [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'],
        $primaryColName, $tableName
    );
    
    return $models[$modelName];
};

//$authorsModel = $createOrGetModel(AuthorsModel::class);
//$authorsModel2 = $createOrGetModel(AuthorsModel::class);
//$authorsModel3 = $createOrGetModel(AuthorsModel::class);
//var_dump($authorsModel === $authorsModel2);
//var_dump($authorsModel2 === $authorsModel3);

$authorsModel = new AuthorsModel('mysql:host=192.168.1.73;dbname=blog', 'rotimi', 'rotimi');



$postsModel = new PostsModel('mysql:host=192.168.1.73;dbname=blog', 'rotimi', 'rotimi');

$allPostRecordsInAnArray = 
    $postsModel->fetchRecordsIntoArray(
        null, // we are not injecting a query obj, default
              //    select * from posts 
              // query will be issued
        ['author', 'summary', 'comments', 'tags'] // related data to eager-load
                                                  // 4 additional queries
    );

foreach ($allPostRecordsInAnArray as $postRecord) {
    
    echo 'Post: ' . $postRecord->title . PHP_EOL;
    
    // BelongsTo Data: post belongs to author, there can never be a post without an author
    echo 'Author: ' . $postRecord->author->name  . PHP_EOL;
    
    // HasOne Data: post can have zero or one summary, there can be a post without a summary
    // check if a related summary record was found for the current post record
    if($postRecord->summary instanceof SummaryRecord) {
        
        echo 'Summary ID: ' . $postRecord->summary->summary_id  . PHP_EOL;
        
    } else {
        
        echo 'No Summary'  . PHP_EOL;
    }
    
    echo PHP_EOL;
}


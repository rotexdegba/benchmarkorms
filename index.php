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

////////////////////////////////////////////////////////////////////////////////
// Fetching records & eager-loading related data via fetchRecordsIntoArray
////////////////////////////////////////////////////////////////////////////////
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
    
    ////////////////////////////////////////////////////////////////////////////
    // BelongsTo: a post belongs to an author, there can never be a post without an author
    echo 'Author: ' . $postRecord->author->name  . PHP_EOL;
    
    ////////////////////////////////////////////////////////////////////////////
    // HasOne: a post can have zero or one summary, there can be a post without a summary
    // check if a related summary record was found for the current post record. 
    // If the post doesn't have a summary, $postRecord->summary will be NULL
    if($postRecord->summary instanceof SummaryRecord) {
        
        echo 'Summary ID: ' . $postRecord->summary->summary_id  . PHP_EOL;
        
    } else {
        
        echo 'No Summary'  . PHP_EOL;
    }
    
    ////////////////////////////////////////////////////////////////////////////
    // HasMany: a post can have zero, one or more comments. Because we called 
    // fetchRecordsIntoArray to fetch the post records, the hasMany related 
    // data for each post record will also be records stored in an array and if
    // in this case, a record does not have any comments, $postRecord->comments 
    // will have a value of []
    echo 'Comments: '  . PHP_EOL;
    
    /** @var CommentRecord $comment */
    foreach($postRecord->comments as $comment) {
        
        echo "\tComment # {$comment->comment_id}: {$comment->name} "  . PHP_EOL;
    }
    
    ////////////////////////////////////////////////////////////////////////////
    // hasManyThrough: a post can have zero, one or more tags through the 
    // associations defined in the posts_tags table. Because we called 
    // fetchRecordsIntoArray to fetch the post records, the hasManyThrough 
    // related data for each post record will also be records stored in an 
    // array and if inthis case, a record does not have any tags,
    // $postRecord->tags will have a value of []
    
    echo 'Tags: '  . PHP_EOL;
    
    /** @var TagRecord $tag */
    foreach($postRecord->tags as $tag) {
        
        echo "\tTag # {$tag->tag_id}: {$tag->name} "  . PHP_EOL;
    }
    
    echo PHP_EOL;
}

////////////////////////////////////////////////////////////////////////////////
// Fetching records & eager-loading related data via fetchRecordsIntoCollection
////////////////////////////////////////////////////////////////////////////////

echo '//////////////////////////////////////////////////////////////' . PHP_EOL;

$allPostRecordsInACollection = 
    $postsModel->fetchRecordsIntoCollection(
        null, // we are not injecting a query obj, default
              //    select * from posts 
              // query will be issued
        ['author', 'summary', 'comments', 'tags'] // related data to eager-load
                                                  // 4 additional queries
    );

foreach ($allPostRecordsInACollection as $postRecord) {
    
    echo 'Post: ' . $postRecord->title . PHP_EOL;
    
    ////////////////////////////////////////////////////////////////////////////
    // BelongsTo: a post belongs to an author, there can never be a post without an author
    echo 'Author: ' . $postRecord->author->name  . PHP_EOL;
    
    ////////////////////////////////////////////////////////////////////////////
    // HasOne: a post can have zero or one summary, there can be a post without a summary
    // check if a related summary record was found for the current post record. 
    // If the post doesn't have a summary, $postRecord->summary will be NULL
    if($postRecord->summary instanceof SummaryRecord) {
        
        echo 'Summary ID: ' . $postRecord->summary->summary_id  . PHP_EOL;
        
    } else {
        
        echo 'No Summary'  . PHP_EOL;
    }
    
    ////////////////////////////////////////////////////////////////////////////
    // HasMany: a post can have zero, one or more comments. Because we called 
    // fetchRecordsIntoCollection to fetch the post records, the hasMany related 
    // data for each post record will also be records stored in a collection 
    // (an instance of CommentsCollection in this case) and if in this case, a 
    // record does not have any comments, $postRecord->comments will still be a 
    // collection (still an instance of CommentsCollection in this case) that 
    // has no records.  You can call collection methods on $postRecord->comments
    echo 'Comments: '  . PHP_EOL;
    
    /** @var CommentRecord $comment */
    foreach($postRecord->comments as $comment) {
        
        echo "\tComment # {$comment->comment_id}: {$comment->name} "  . PHP_EOL;
    }
    
    ////////////////////////////////////////////////////////////////////////////
    // hasManyThrough: a post can have zero, one or more tags through the 
    // associations defined in the posts_tags table. Because we called 
    // fetchRecordsIntoCollection to fetch the post records, the hasManyThrough 
    // related data for each post record will also be records stored in a 
    // collection (an instance of TagsCollection in this case) and if in this 
    // case, a record does not have any tags, $postRecord->tags will still be a
    // collection (still an instance of TagsCollection in this case) that
    // has no records. You can call collection methods on $postRecord->tags
    
    echo 'Tags: '  . PHP_EOL;
    
    /** @var TagRecord $tag */
    foreach($postRecord->tags as $tag) {
        
        echo "\tTag # {$tag->tag_id}: {$tag->name} "  . PHP_EOL;
    }
    
    echo PHP_EOL;
}

//////////////////////////////////////////////////////////////////////////////////
// Fetching rows of post data & eager-loading related data via fetchRowsIntoArray
//////////////////////////////////////////////////////////////////////////////////

echo '//////////////////////////////////////////////////////////////' . PHP_EOL;

$allPostRowsInAnArray = 
    $postsModel->fetchRowsIntoArray(
        null, // we are not injecting a query obj, default
              //    select * from posts 
              // query will be issued
        ['author', 'summary', 'comments', 'tags'] // related data to eager-load
                                                  // 4 additional queries
    );

foreach ($allPostRowsInAnArray as $postRow) {
    
    echo 'Post: ' . $postRow['title'] . PHP_EOL;
    
    ////////////////////////////////////////////////////////////////////////////
    // BelongsTo: a post belongs to an author, there can never be a post without an author
    echo 'Author: ' . $postRow['author']['name']  . PHP_EOL;
    
    ////////////////////////////////////////////////////////////////////////////
    // HasOne: a post can have zero or one summary, there can be a post without a summary.
    // Check if a related summary row of data was found for the current post row of data. 
    // If the post doesn't have a summary, array_key_exists('summary', $postRow) will be false
    ////////////////////////////////////////////////////////////////////////////
    if(array_key_exists('summary', $postRow)) {
        
        echo 'Summary ID: ' . $postRow['summary']['summary_id']  . PHP_EOL;
        
    } else {
        
        echo 'No Summary'  . PHP_EOL;
    }
    
    ////////////////////////////////////////////////////////////////////////////
    // HasMany: a post can have zero, one or more comments. Because we called 
    // fetchRecordsIntoCollection to fetch the post records, the hasMany related 
    // data for each post record will also be records stored in a collection 
    // (an instance of CommentsCollection in this case) and if in this case, a 
    // record does not have any comments, $postRow->comments will still be a 
    // collection (still an instance of CommentsCollection in this case) that 
    // has no records.  You can call collection methods on $postRow->comments
//    echo 'Comments: '  . PHP_EOL;
//    
//    /** @var CommentRecord $comment */
//    foreach($postRow->comments as $comment) {
//        
//        echo "\tComment # {$comment->comment_id}: {$comment->name} "  . PHP_EOL;
//    }
//    
//    ////////////////////////////////////////////////////////////////////////////
//    // hasManyThrough: a post can have zero, one or more tags through the 
//    // associations defined in the posts_tags table. Because we called 
//    // fetchRecordsIntoCollection to fetch the post records, the hasManyThrough 
//    // related data for each post record will also be records stored in a 
//    // collection (an instance of TagsCollection in this case) and if in this 
//    // case, a record does not have any tags, $postRow->tags will still be a
//    // collection (still an instance of TagsCollection in this case) that
//    // has no records. You can call collection methods on $postRow->tags
//    
//    echo 'Tags: '  . PHP_EOL;
//    
//    /** @var TagRecord $tag */
//    foreach($postRow->tags as $tag) {
//        
//        echo "\tTag # {$tag->tag_id}: {$tag->name} "  . PHP_EOL;
//    }
    
    echo PHP_EOL;
}

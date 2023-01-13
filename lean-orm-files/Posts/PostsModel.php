<?php
declare(strict_types=1);

namespace TestLeanOrm\Db\Posts;

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

/**
 * @method PostsCollection createNewCollection(\GDAO\Model\RecordInterface ...$list_of_records)
 * @method PostRecord createNewRecord(array $col_names_n_vals = [])
 * @method ?PostRecord fetchOneRecord(?object $select_obj=null, array $relations_to_include=[])
 * @method PostRecord[] fetchRecordsIntoArray(?object $select_obj=null, array $relations_to_include=[])
 * @method PostRecord[] fetchRecordsIntoArrayKeyedOnPkVal(?\Aura\SqlQuery\Common\Select $select_obj=null, array $relations_to_include=[])
 * @method PostsCollection fetchRecordsIntoCollection(?object $select_obj=null, array $relations_to_include=[])
 * @method PostsCollection fetchRecordsIntoCollectionKeyedOnPkVal(?\Aura\SqlQuery\Common\Select $select_obj=null, array $relations_to_include=[])
 */
class PostsModel extends \LeanOrm\Model {
    
    protected ?string $collection_class_name = PostsCollection::class;
    
    protected ?string $record_class_name = PostRecord::class;
    
    protected ?string $created_timestamp_column_name = 'date_created';
    
    protected ?string $updated_timestamp_column_name = 'm_timestamp';
    
    protected string $primary_col = 'post_id';
    
    protected string $table_name = 'posts';
    
    public function __construct(
        string $dsn = '', 
        string $username = '', 
        string $passwd = '', 
        array $pdo_driver_opts = [], 
        string $primary_col_name = '', 
        string $table_name = ''
    ) {
        parent::__construct($dsn, $username, $passwd, $pdo_driver_opts, $primary_col_name, $table_name);
        
        // Define relationships below here
        
        $this->belongsTo(
                'author',    // The property or field name via which related data will be 
                             // accessed on each post record or on each array of posts table data

                'author_id', // Foreign key column in this Model's db table (i.e. posts table)

                'authors',   // Foreign db table from which related data will be fetched

                'author_id', // Foreign key column in foreign Model's db table (i.e. authors table)

                'author_id', // Primary key column in foreign Model's db table (i.e. authors table)

                AuthorsModel::class, // Foreign Model Class, defaults to \LeanOrm\Model

                AuthorRecord::class, // Foreign Record Class, if blank, defaults to the Record class 
                                     // set in the foreign Model Class when related data is fetched

                AuthorsCollection::class, // Foreign Collection Class, if blank, defaults to the Collection class 
                                          // set in the foreign Model Class when related data is fetched

                function(\Aura\SqlQuery\Common\Select $selectObj): \Aura\SqlQuery\Common\Select {
                    
                    $selectObj->orderBy(['author_id']);

                    return $selectObj;
                } // Optional callback to manipulate query object used to fetch related data
            )
            ->hasOne(
                'summary',    // The property or field name via which related data will be 
                              // accessed on each post record or on each array of posts table data

                'post_id',    // Foreign key column in this Model's db table (i.e. posts table)

                'summaries',  // Foreign db table from which related data will be fetched

                'post_id',    // Foreign key column in foreign Model's db table (i.e. summaries table)

                'summary_id', // Primary key column in foreign Model's db table (i.e. summaries table)

                SummariesModel::class, // Foreign Model Class, defaults to \LeanOrm\Model

                SummaryRecord::class,  // Foreign Record Class, if blank, defaults to the Record class 
                                       // set in the foreign Model Class when related data is fetched

                SummariesCollection::class, // Foreign Collection Class, if blank, defaults to the Collection class 
                                            // set in the foreign Model Class when related data is fetched

                function(\Aura\SqlQuery\Common\Select $selectObj): \Aura\SqlQuery\Common\Select {
                    
                    $selectObj->orderBy(['summary_id']);

                    return $selectObj;
                } // Optional callback to manipulate query object used to fetch related data
            )
            ->hasMany(
                'comments', // The property or field name via which related data will be 
                            // accessed on each post record or on each array of posts table data

                'post_id',  // Foreign key column in this Model's db table (i.e. posts table)

                'comments', // Foreign db table from which related data will be fetched

                'post_id',  // Foreign key column in foreign Model's db table (i.e. comments table)

                'comment_id', // Primary key column in foreign Model's db table (i.e. comments table)

                CommentsModel::class, // Foreign Model Class, defaults to \LeanOrm\Model

                CommentRecord::class, // Foreign Record Class, if blank, defaults to the Record class 
                                      // set in the foreign Model Class when related data is fetched

                CommentsCollection::class, // Foreign Collection Class, if blank, defaults to the Collection class 
                                           // set in the foreign Model Class when related data is fetched

                function(\Aura\SqlQuery\Common\Select $selectObj): \Aura\SqlQuery\Common\Select {
                    
                    $selectObj->orderBy(['comment_id']);

                    return $selectObj;
                } // Optional callback to manipulate query object used to fetch related data
            )
            ->hasManyThrough(
                'tags',         // The property or field name via which related data will be 
                                // accessed on each post record or on each array of posts table data
                
                'post_id',      // Foreign key column in this Model's db table (i.e. posts table)
                
                'posts_tags',   // Foreign JOIN db table from which contains the associations between records in this
                                // model's db table (i.e. the posts table) and the records in the foreign db table
                                // (i.e. the tags table)
                
                'post_id',      // Join column in this Model's db table (i.e. posts table) linked to the 
                                // foreign JOIN db table (i.e. posts_tags)
                
                'tag_id',       // Join column in foreign Model's db table (i.e. tags table) linked to the 
                                // foreign JOIN db table (i.e. posts_tags)
                
                'tags',         // Foreign db table from which related data will be fetched
                
                'tag_id',       // Foreign key column in foreign Model's db table (i.e. tags table)
                
                'tag_id',       // Primary key column in foreign Model's db table (i.e. tags table)

                TagsModel::class, // Foreign Model Class, defaults to \LeanOrm\Model

                TagRecord::class, // Foreign Record Class, if blank, defaults to the Record class 
                                  // set in the foreign Model Class when related data is fetched

                TagsCollection::class, // Foreign Collection Class, if blank, defaults to the Collection class 
                                       // set in the foreign Model Class when related data is fetched

                function(\Aura\SqlQuery\Common\Select $selectObj): \Aura\SqlQuery\Common\Select {

                    $selectObj->orderBy(['tags.tag_id']);

                    return $selectObj;
                } // Optional callback to manipulate query object used to fetch related data
            );
    }
}

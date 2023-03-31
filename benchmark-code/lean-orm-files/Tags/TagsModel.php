<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks\LeanOrm\Blog\Tags;

/**
 * @method TagsCollection createNewCollection(\GDAO\Model\RecordInterface ...$list_of_records)
 * @method TagRecord createNewRecord(array $col_names_n_vals = [])
 * @method ?TagRecord fetchOneRecord(?object $select_obj=null, array $relations_to_include=[])
 * @method TagRecord[] fetchRecordsIntoArray(?object $select_obj=null, array $relations_to_include=[])
 * @method TagRecord[] fetchRecordsIntoArrayKeyedOnPkVal(?\Aura\SqlQuery\Common\Select $select_obj=null, array $relations_to_include=[])
 * @method TagsCollection fetchRecordsIntoCollection(?object $select_obj=null, array $relations_to_include=[])
 * @method TagsCollection fetchRecordsIntoCollectionKeyedOnPkVal(?\Aura\SqlQuery\Common\Select $select_obj=null, array $relations_to_include=[])
 */
class TagsModel extends \LeanOrm\CachingModel {
    
    protected ?string $collection_class_name = TagsCollection::class;
    
    protected ?string $record_class_name = TagRecord::class;
    
    protected ?string $created_timestamp_column_name = 'date_created';
    
    protected ?string $updated_timestamp_column_name = 'm_timestamp';
    
    protected string $primary_col = 'tag_id';
    
    protected string $table_name = 'tags';
    
    public function __construct(
        string $dsn = '', 
        string $username = '', 
        string $passwd = '', 
        array $pdo_driver_opts = [], 
        string $primary_col_name = '', 
        string $table_name = ''
    ) {
        $this->table_cols = include(__DIR__ . DIRECTORY_SEPARATOR . 'TagsFieldsMetadata.php');
        
        parent::__construct($dsn, $username, $passwd, $pdo_driver_opts, $primary_col_name, $table_name);
        
        // Define relationships below here
        $this->hasMany(
                'posts_tags',   // The property or field name via which related data will be 
                                // accessed on each post record or on each array of posts table data

                'tag_id',  // Foreign key column in this Model's db table (i.e. tags table)

                'posts_tags', // Foreign db table from which related data will be fetched

                'tag_id',  // Foreign key column in foreign Model's db table (i.e. posts_tags table)

                'posts_tags_id', // Primary key column in foreign Model's db table (i.e. posts_tags table)

                \Rotexsoft\PhpOrmBenchmarks\LeanOrm\Blog\PostsTags\PostsTagsModel::class // Foreign Model Class, defaults to \LeanOrm\Model
            )
            ->hasManyThrough(
                'posts',         // The property or field name via which related data will be 
                                // accessed on each post record or on each array of posts table data
                
                'tag_id',      // Foreign key column in this Model's db table (i.e. tags table)
                
                'posts_tags',   // Foreign JOIN db table from which contains the associations between records in this
                                // model's db table (i.e. the tags table) and the records in the foreign db table
                                // (i.e. the posts table)
                
                'tag_id',      // Join column in this Model's db table (i.e. tags table) linked to the 
                                // foreign JOIN db table (i.e. posts_tags)
                
                'post_id',       // Join column in foreign Model's db table (i.e. posts table) linked to the 
                                // foreign JOIN db table (i.e. posts_tags)
                
                'posts',         // Foreign db table from which related data will be fetched
                
                'post_id',       // Foreign key column in foreign Model's db table (i.e. posts table)
                
                'post_id',       // Primary key column in foreign Model's db table (i.e. posts table)

                \Rotexsoft\PhpOrmBenchmarks\LeanOrm\Blog\Posts\PostsModel::class // Foreign Model Class, defaults to \LeanOrm\Model
            );
        
        //$this->belongsTo(...)
        //$this->hasMany(...);
        //$this->hasManyThrough(...);
        //$this->hasOne(...)
    }
}

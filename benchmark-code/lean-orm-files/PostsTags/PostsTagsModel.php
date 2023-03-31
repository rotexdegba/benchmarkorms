<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks\LeanOrm\Blog\PostsTags;

/**
 * @method PostsTagsCollection createNewCollection(\GDAO\Model\RecordInterface ...$list_of_records)
 * @method PostTagRecord createNewRecord(array $col_names_n_vals = [])
 * @method ?PostTagRecord fetchOneRecord(?object $select_obj=null, array $relations_to_include=[])
 * @method PostTagRecord[] fetchRecordsIntoArray(?object $select_obj=null, array $relations_to_include=[])
 * @method PostTagRecord[] fetchRecordsIntoArrayKeyedOnPkVal(?\Aura\SqlQuery\Common\Select $select_obj=null, array $relations_to_include=[])
 * @method PostsTagsCollection fetchRecordsIntoCollection(?object $select_obj=null, array $relations_to_include=[])
 * @method PostsTagsCollection fetchRecordsIntoCollectionKeyedOnPkVal(?\Aura\SqlQuery\Common\Select $select_obj=null, array $relations_to_include=[])
 */
class PostsTagsModel extends \LeanOrm\CachingModel {
    
    protected ?string $collection_class_name = PostsTagsCollection::class;
    
    protected ?string $record_class_name = PostTagRecord::class;
    
    protected ?string $created_timestamp_column_name = 'date_created';
    
    protected ?string $updated_timestamp_column_name = 'm_timestamp';
    
    protected string $primary_col = 'posts_tags_id';
    
    protected string $table_name = 'posts_tags';
    
    public function __construct(
        string $dsn = '', 
        string $username = '', 
        string $passwd = '', 
        array $pdo_driver_opts = [], 
        string $primary_col_name = '', 
        string $table_name = ''
    ) {
        $this->table_cols = include(__DIR__ . DIRECTORY_SEPARATOR . 'PostsTagsFieldsMetadata.php');
        
        parent::__construct($dsn, $username, $passwd, $pdo_driver_opts, $primary_col_name, $table_name);
        
        // Define relationships below here
        
        $this->belongsTo(
            'post',      // The property or field name via which related data will be 
                         // accessed on each post record or on each array of posts table data

            'post_id', // Foreign key column in this Model's db table (i.e. posts_tags table)

            'posts',   // Foreign db table from which related data will be fetched

            'post_id', // Foreign key column in foreign Model's db table (i.e. posts table)

            'post_id', // Primary key column in foreign Model's db table (i.e. posts table)

            \Rotexsoft\PhpOrmBenchmarks\LeanOrm\Blog\Posts\PostsModel::class // Foreign Model Class, defaults to \LeanOrm\Model
        );
        
        $this->belongsTo(
            'tag',      // The property or field name via which related data will be 
                         // accessed on each post record or on each array of posts table data

            'tag_id', // Foreign key column in this Model's db table (i.e. posts_tags table)

            'tags',   // Foreign db table from which related data will be fetched

            'tag_id', // Foreign key column in foreign Model's db table (i.e. tags table)

            'tag_id', // Primary key column in foreign Model's db table (i.e. tags table)

            \Rotexsoft\PhpOrmBenchmarks\LeanOrm\Blog\Tags\TagsModel::class // Foreign Model Class, defaults to \LeanOrm\Model
        );
        
        //$this->belongsTo(...)
        //$this->hasMany(...);
        //$this->hasManyThrough(...);
        //$this->hasOne(...)
    }
}

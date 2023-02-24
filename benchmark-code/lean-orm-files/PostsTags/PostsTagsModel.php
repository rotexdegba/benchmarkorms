<?php
declare(strict_types=1);

namespace Benchmark\LeanOrm\Blog\PostsTags;

/**
 * @method PostsTagsCollection createNewCollection(\GDAO\Model\RecordInterface ...$list_of_records)
 * @method PostTagRecord createNewRecord(array $col_names_n_vals = [])
 * @method ?PostTagRecord fetchOneRecord(?object $select_obj=null, array $relations_to_include=[])
 * @method PostTagRecord[] fetchRecordsIntoArray(?object $select_obj=null, array $relations_to_include=[])
 * @method PostTagRecord[] fetchRecordsIntoArrayKeyedOnPkVal(?\Aura\SqlQuery\Common\Select $select_obj=null, array $relations_to_include=[])
 * @method PostsTagsCollection fetchRecordsIntoCollection(?object $select_obj=null, array $relations_to_include=[])
 * @method PostsTagsCollection fetchRecordsIntoCollectionKeyedOnPkVal(?\Aura\SqlQuery\Common\Select $select_obj=null, array $relations_to_include=[])
 */
class PostsTagsModel extends \LeanOrm\Model {
    
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
        
        //$this->belongsTo(...)
        //$this->hasMany(...);
        //$this->hasManyThrough(...);
        //$this->hasOne(...)
    }
}

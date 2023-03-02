<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks\LeanOrm\Blog\BenchmarksResults;

/**
 * @method BenchmarksResultsCollection createNewCollection(\GDAO\Model\RecordInterface ...$list_of_records)
 * @method BenchmarkResultRecord createNewRecord(array $col_names_n_vals = [])
 * @method ?BenchmarkResultRecord fetchOneRecord(?object $select_obj=null, array $relations_to_include=[])
 * @method BenchmarkResultRecord[] fetchRecordsIntoArray(?object $select_obj=null, array $relations_to_include=[])
 * @method BenchmarkResultRecord[] fetchRecordsIntoArrayKeyedOnPkVal(?\Aura\SqlQuery\Common\Select $select_obj=null, array $relations_to_include=[])
 * @method BenchmarksResultsCollection fetchRecordsIntoCollection(?object $select_obj=null, array $relations_to_include=[])
 * @method BenchmarksResultsCollection fetchRecordsIntoCollectionKeyedOnPkVal(?\Aura\SqlQuery\Common\Select $select_obj=null, array $relations_to_include=[])
 */
class BenchmarksResultsModel extends \LeanOrm\Model {
    
    protected ?string $collection_class_name = BenchmarksResultsCollection::class;
    
    protected ?string $record_class_name = BenchmarkResultRecord::class;
    
    protected ?string $created_timestamp_column_name = 'date_created';
    
    protected ?string $updated_timestamp_column_name = 'm_timestamp';
    
    protected string $primary_col = 'id';
    
    protected string $table_name = 'benchmark_results';
    
    public function __construct(
        string $dsn = '', 
        string $username = '', 
        string $passwd = '', 
        array $pdo_driver_opts = [], 
        string $primary_col_name = '', 
        string $table_name = ''
    ) {
        $this->table_cols = include(__DIR__ . DIRECTORY_SEPARATOR . 'BenchmarksResultsFieldsMetadata.php');
        
        parent::__construct($dsn, $username, $passwd, $pdo_driver_opts, $primary_col_name, $table_name);
        
        // Define relationships below here
        
        //$this->belongsTo(...)
        //$this->hasMany(...);
        //$this->hasManyThrough(...);
        //$this->hasOne(...)
    }
}

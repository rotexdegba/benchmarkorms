<?php
declare(strict_types=1);

namespace TestLeanOrm\Db\KeysValues;

/**
 * @method KeysValuesCollection createNewCollection(\GDAO\Model\RecordInterface ...$list_of_records)
 * @method KeyValueRecord createNewRecord(array $col_names_n_vals = [])
 * @method ?KeyValueRecord fetchOneRecord(?object $select_obj=null, array $relations_to_include=[])
 * @method KeyValueRecord[] fetchRecordsIntoArray(?object $select_obj=null, array $relations_to_include=[])
 * @method KeyValueRecord[] fetchRecordsIntoArrayKeyedOnPkVal(?\Aura\SqlQuery\Common\Select $select_obj=null, array $relations_to_include=[])
 * @method KeysValuesCollection fetchRecordsIntoCollection(?object $select_obj=null, array $relations_to_include=[])
 * @method KeysValuesCollection fetchRecordsIntoCollectionKeyedOnPkVal(?\Aura\SqlQuery\Common\Select $select_obj=null, array $relations_to_include=[])
 */
class KeysValuesModel extends \LeanOrm\Model {
    
    protected ?string $collection_class_name = KeysValuesCollection::class;
    
    protected ?string $record_class_name = KeyValueRecord::class;
    
    protected ?string $created_timestamp_column_name = 'date_created';
    
    protected ?string $updated_timestamp_column_name = 'm_timestamp';
    
    protected string $primary_col = 'id';
    
    protected string $table_name = 'key_value';
    
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
        
        //$this->belongsTo(...)
        //$this->hasMany(...);
        //$this->hasManyThrough(...);
        //$this->hasOne(...)
    }
}

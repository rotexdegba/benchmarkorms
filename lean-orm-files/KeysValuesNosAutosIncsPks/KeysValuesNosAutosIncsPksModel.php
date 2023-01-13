<?php
declare(strict_types=1);

namespace TestLeanOrm\Db\KeysValuesNosAutosIncsPks;

/**
 * @method KeysValuesNosAutosIncsPksCollection createNewCollection(\GDAO\Model\RecordInterface ...$list_of_records)
 * @method KeyValueNoAutoIncPkRecord createNewRecord(array $col_names_n_vals = [])
 * @method ?KeyValueNoAutoIncPkRecord fetchOneRecord(?object $select_obj=null, array $relations_to_include=[])
 * @method KeyValueNoAutoIncPkRecord[] fetchRecordsIntoArray(?object $select_obj=null, array $relations_to_include=[])
 * @method KeyValueNoAutoIncPkRecord[] fetchRecordsIntoArrayKeyedOnPkVal(?\Aura\SqlQuery\Common\Select $select_obj=null, array $relations_to_include=[])
 * @method KeysValuesNosAutosIncsPksCollection fetchRecordsIntoCollection(?object $select_obj=null, array $relations_to_include=[])
 * @method KeysValuesNosAutosIncsPksCollection fetchRecordsIntoCollectionKeyedOnPkVal(?\Aura\SqlQuery\Common\Select $select_obj=null, array $relations_to_include=[])
 */
class KeysValuesNosAutosIncsPksModel extends \LeanOrm\Model {
    
    protected ?string $collection_class_name = KeysValuesNosAutosIncsPksCollection::class;
    
    protected ?string $record_class_name = KeyValueNoAutoIncPkRecord::class;
    
    protected ?string $created_timestamp_column_name = 'date_created';
    
    protected ?string $updated_timestamp_column_name = 'm_timestamp';
    
    protected string $primary_col = 'id';
    
    protected string $table_name = 'key_value_no_auto_inc_pk';
    
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

<?php
namespace Rotexsoft\PhpOrmBenchmarks;

/**
 * This class is used to compare record sets fetched using LeanORM 
 * to record sets fetched using other ORMs like Atlas and Eloquent.
 * 
 * Since I, the author of the this benchmarking repo, wrote LeanORM,
 * I am using leanOROM record sets to verify the correctness of
 * record sets fetched via other ORMs to make sure that I set 
 * their relationship definitions up correctly.
 * 
 * @author rotimi
 */
class OrmDataComparator {

    public function __construct() { }
    
    public function ensureHasManyOrHasManyThroughDataAreEqual(
        $recordSetToVerify,
        $leanOrmRecordSet, 
        $record_pkey,
        $record_entity_name_singular,
        $relation_name,
        $related_column_name_to_compare,
        $dump_info = false
    ) {
        foreach ($recordSetToVerify as $recordToVerify) {

            $leanOrmRecord = $leanOrmRecordSet[$recordToVerify->$record_pkey];

            if(count($recordToVerify->$relation_name) !== count($leanOrmRecord->$relation_name)) {
                
                echo "Other ORM's {$relation_name} for {$record_entity_name_singular} with the id {$recordToVerify->$record_pkey}"
                   . " has differing {$relation_name} from LeanOrm"
                   . " record with the same id !!!!".PHP_EOL;
                return;
                
            } // if(count($recordToVerify->$relation_name) !== count($leanOrmRecord->$relation_name))

            if(count($recordToVerify->$relation_name) > 0 && count($leanOrmRecord->$relation_name) > 0) {

                $ColumnDataFromOtherCollection = \VersatileCollections\GenericCollection::makeNew($recordToVerify->$relation_name)
                                            ->column($related_column_name_to_compare)
                                            ->sort()
                                            ->transform(function($key, $item){ return ''.$item; /*stringfy each item*/ })
                                            ->makeAllKeysNumeric()
                                            ->toArray();

                $leanOrmColumnData = \VersatileCollections\GenericCollection::makeNew($leanOrmRecord->$relation_name)
                                            ->column($related_column_name_to_compare)
                                            ->sort()
                                            ->transform(function($key, $item){ return ''.$item; /*stringfy each item*/ })
                                            ->makeAllKeysNumeric()
                                            ->toArray();

                //var_dump($ColumnDataFromOtherCollection);
                //var_dump($leanOrmColumnData);

                if($ColumnDataFromOtherCollection !== $leanOrmColumnData) {

                    echo "Other ORM's {$relation_name} belonging to"
                       . " {$record_entity_name_singular} with id {$recordToVerify->$record_pkey}"
                       . " has differing {$relation_name} from LeanOrm"
                       . " record with the same id" .PHP_EOL;
                    return;
                    
                } // if($ColumnDataFromOtherCollection !== $leanOrmColumnData)

            } else {
                
                if($dump_info) {
                    
                    echo "Other ORM's {$record_entity_name_singular} with the id  {$recordToVerify->$record_pkey} has zero {$relation_name}".PHP_EOL;
                    var_dump(get_debug_type($recordToVerify->$relation_name));
                    var_dump(get_debug_type($leanOrmRecord->$relation_name));
                    echo PHP_EOL;
                }
                
            } // if(count($recordToVerify->$relation_name) > 0 && count($leanOrmRecord->$relation_name) > 0)
        } // foreach ($recordSetToVerify as $recordToVerify)
        
        // if we got this far, that means all hasMany or hasManyThrough data match
        echo "All hasMany or hasManyThrough data match!!!".PHP_EOL;
    }
    
    public function ensureBelongsToOrHasOneDataAreEqual(
        $recordSetToVerify,
        $leanOrmRecordSet, 
        $record_pkey,
        $record_entity_name_singular,
        $relation_name,
        $related_column_name_to_compare
    ) {
        foreach ($recordSetToVerify as $recordToVerify) {

            $leanOrmRecord = $leanOrmRecordSet[$recordToVerify->$record_pkey];
            //var_dump(
            //    $recordToVerify->$relation_name->$related_column_name_to_compare,
            //    $leanOrmRecord->$relation_name->$related_column_name_to_compare  
            //);
            
            if(
                ''.$recordToVerify->$relation_name->$related_column_name_to_compare 
                !== ''.$leanOrmRecord->$relation_name->$related_column_name_to_compare
            ) {
                echo "Other ORM's {$relation_name} belonging to"
                   . " {$record_entity_name_singular} with id {$recordToVerify->$record_pkey}"
                   . " has differing {$relation_name} from LeanOrm"
                   . " record with the same id" .PHP_EOL;

                return;
            }

        } // foreach ($atlsRecordSet as $atlasRecord)
        
        // if we got this far, that means all hasOne or BelongsTo data match
        echo "All hasOne or BelongsTo data match!!!".PHP_EOL;
    }
}

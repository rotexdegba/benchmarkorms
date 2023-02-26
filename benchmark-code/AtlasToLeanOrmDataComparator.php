<?php
namespace Rotexsoft\PhpOrmBenchmarks;

/**
 * Description of AtlasToLeanOrmDataComparator
 *
 * @author rotimi
 */
class AtlasToLeanOrmDataComparator {

    public function __construct() {
        
    }
    
    public function ensureHasManyOrHasManyThroughDataAreEqual(
        \Atlas\Orm\Atlas $atlas,
        $atlas_model_class,
        \LeanOrm\Model $leanOrm, 
        $record_pkey, 
        $relation_name, 
        $relation_name_singular,
        $column_name_to_compare,
        $offset = 0, 
        $limit = 50_000
    ) {
        do {
            $atlsRecordSet = $atlas
                ->select($atlas_model_class)
                ->with([$relation_name])
                ->limit($limit)
                ->offset($offset)
                ->fetchRecordSet();

            $leanOrmRecordSet = $leanOrm->fetchRecordsIntoCollectionKeyedOnPkVal(
                $leanOrm->getSelect()
                        ->limit($limit)
                        ->offset($offset)
                ,
                [$relation_name]
            );

            foreach ($atlsRecordSet as $atlasRecord) {

                $leanOrmRecord = $leanOrmRecordSet[$atlasRecord->$record_pkey];

                if(count($atlasRecord->$relation_name) !== count($leanOrmRecord->$relation_name)) {

                    echo "Atlas {$relation_name_singular} {$atlasRecord->$record_pkey}"
                       . " has differing {$relation_name} from LeanOrm"
                       . " {$relation_name_singular} with the same id !!!!".PHP_EOL;
                }

                if(count($atlasRecord->$relation_name) > 0 && count($leanOrmRecord->$relation_name) > 0) {

                    $atlasColumnData = \VersatileCollections\GenericCollection::makeNew($atlasRecord->$relation_name)
                                                ->column($column_name_to_compare)->sort()->makeAllKeysNumeric()->toArray();

                    $leanOrmColumnData = \VersatileCollections\GenericCollection::makeNew($leanOrmRecord->$relation_name)
                                                ->column($column_name_to_compare)->sort()->makeAllKeysNumeric()->toArray();

                    //var_dump($atlasColumnData);
                    //var_dump($leanOrmColumnData);

                    if($atlasColumnData !== $leanOrmColumnData) {

                        echo "Atlas {$relation_name_singular} {$atlasRecord->$record_pkey}"
                           . " has differing {$relation_name} from LeanOrm"
                           . " {$relation_name_singular} with the same id".PHP_EOL;
                           
                        break;
                    }

                } else {

                    echo "Atlas {$relation_name_singular} {$atlasRecord->$record_pkey} has zero {$relation_name}".PHP_EOL;
                    var_dump(get_debug_type($atlasRecord->$relation_name));
                    var_dump(get_debug_type($leanOrmRecord->$relation_name));
                    echo PHP_EOL;
                }

            } // foreach ($atlsRecordSet as $atlasRecord)

            $offset += $limit;
            echo PHP_EOL;

        }while($atlsRecordSet->count() > 0);
    }
}

<?php
namespace Rotexsoft\PhpOrmBenchmarks\Ubench;

/**
 * Description of LeanOrmHasManyOrHasManyThroughRunner
 *
 * @author rotimi
 */
class LeanOrmHasManyOrHasManyThroughRunner {
    
    public function __construct() { }
    
    /**
     * @param \Ubench $ubench       Ubench instance
     * 
     * @param \LeanOrm\Model $lean  Model for fetching records
     * 
     * @param string $relation_name Relation name (has many or has many through)
     * 
     * @param string $property_name A property on the records to be fetched. 
     *                              For example if we are fetching authors 
     *                              we can specify name for this argument
     * 
     * @param int $offset           Offset position
     * 
     * @param int $limit            Number of records to fetch per iteration.
     */
    public function __invoke(
        \Ubench $ubench,
        \LeanOrm\Model $lean,
        string $relation_name,
        string $property_name,
        int $offset = 0,
        int $limit = 999
    ) {
        $ubench->run(
            function(
                \LeanOrm\Model $lean, 
                $offset, 
                $limit, 
                $relation_name, 
                $property_name
            ) {
                $i = 1;

                do {
                    $recordSet = $lean->fetchRecordsIntoCollection(
                        $lean->getSelect()
                             ->limit($limit)
                             ->offset($offset)
                        ,
                        [$relation_name]
                    );

                    foreach ($recordSet as $record) {

                        $val = $record[$property_name];
                        $count = $record->$relation_name->count();
                        //var_dump("{$val} {$i}");
                        //var_dump("{$val} {$i} with {$record->$relation_name->count()} {$relation_name}");
                        $i++;
                    }

                    $offset += $limit;
                    
                }while(count($recordSet) > 0);
            },
            $lean,
            $offset, 
            $limit,
            $relation_name,
            $property_name
        );
    }
}

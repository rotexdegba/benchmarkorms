<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks\Ubench;

/**
 * Description of AtlasHasManyOrHasManyThroughRunner
 *
 * @author rotimi
 */
class AtlasHasManyOrHasManyThroughRunner {
    
    public function __construct() { }

    /**
     * @param \Ubench $ubench            Ubench instance
     * 
     * @param \Atlas\Orm\Atlas $atlas    Atlas instance
     * 
     * @param string $atlas_mapper_class The Mapper Class whose underlying 
     *                                   table's data will be fetched
     * 
     * @param string $relation_name      Relation name (has many or has many through)
     * 
     * @param string $property_name      A property on the records to be fetched. 
     *                                   For example if we are fetching authors 
     *                                   we can specify name for this argument
     * 
     * @param int $offset                Offset position
     * 
     * @param int $limit                 Number of records to fetch per iteration.
     */
    public function __invoke (
        \Ubench $ubench, 
        \Atlas\Orm\Atlas $atlas, 
        string $atlas_mapper_class, 
        string $relation_name, 
        string $property_name, 
        int $offset = 0, 
        int $limit = 999
    ) {
        $ubench->run(
            function(
                \Atlas\Orm\Atlas $atlas, 
                $offset, 
                $limit, 
                $mapper_class, 
                $relation_name, 
                $property_name
            ) {
                $i = 1;

                do {
                    $recordSet = $atlas
                        ->select($mapper_class)
                        ->with([$relation_name])
                        ->limit($limit)
                        ->offset($offset)
                        ->fetchRecordSet();

                    foreach ($recordSet as $record) {

                        $val = $record->$property_name;
                        $count = $record->$relation_name->count();
                        //var_dump("{$val} {$i}");
                        //var_dump("{$val} {$i} with {$record->$relation_name->count()} {$relation_name}");
                        $i++;
                    }

                    $offset += $limit;
                    
                }while(count($recordSet) > 0);
            },
            $atlas,
            $offset,
            $limit,
            $atlas_mapper_class,
            $relation_name,
            $property_name
        );
    }
}

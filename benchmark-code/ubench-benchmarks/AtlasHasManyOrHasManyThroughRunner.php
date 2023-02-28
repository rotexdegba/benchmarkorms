<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks\Ubench;

use \Rotexsoft\PhpOrmBenchmarks\AtlasOrm\{AtlasDataFetcher, AtlasFetchStrategies};

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
     * @param string $table_name         DB table name
     * 
     * @param array $relation_names      Relation names (has many to or has many through)
     * 
     * @param string $table_column_name     A property on the records to be fetched. 
     *                                      For example if we are fetching authors 
     *                                      we can specify name for this argument
     * 
     * @param string $relation_column_name  A property on each related record.
     * 
     * @param int $offset                Offset position
     * 
     * @param int $limit                 Number of records to fetch per iteration
     * 
     * @param string $strategy           It must be one of fetchRecords or fetchRecordSet
     *                                   This is the method that Atlas will use to fetch
     *                                   the desired data
     */
    public function __invoke (
        \Ubench $ubench, 
        \Atlas\Orm\Atlas $atlas, 
        string $table_name, 
        array $relation_names, 
        string $table_column_name, 
        string $relation_column_name, 
        int $offset = 0, 
        int $limit = 999,
        string $strategy = AtlasFetchStrategies::FETCH_RECORDS    
    ) {
        $num_records = 0;
        
        \Rotexsoft\PhpOrmBenchmarks\Utils::showOrmVersion(MessageResources::PACKAGIST_NAME_ATLAS);
        
        \Rotexsoft\PhpOrmBenchmarks\Utils::printDbInfo(
            AtlasDataFetcher::getPdo($atlas, $table_name)
        );
        
        echo sprintf(
            MessageResources::START_MSG, MessageResources::ORM_VENDOR_ATLAS, $table_name, implode(', ', $relation_names), 
            MessageResources::HAS_MANY_OR_HMT, $limit, $strategy, $table_column_name, $table_name
        );
        
        $ubench->run(
            function(
                \Atlas\Orm\Atlas $atlas, 
                $offset, 
                $limit, 
                $table_name, 
                $relation_names, 
                $table_column_name,
                $relation_column_name,
                $strategy
            ) use (&$num_records){
                do {
                    $recordSet = AtlasDataFetcher::fetchAll($table_name, $relation_names, $atlas, $offset, $limit, $strategy);

                    foreach ($recordSet as $record) {

                        $val = $record->$table_column_name;
                        
                        foreach($relation_names as $relation_name) {
                            
                            foreach($record->$relation_name as $related_record) {
                                
                                $related_record->$relation_column_name;
                            }
                        }
                        $num_records++; //var_dump("{num_records} {$val}");
                    }
                    $offset += $limit;
                    
                } while(count($recordSet) > 0);
            },
            $atlas,
            $offset,
            $limit,
            $table_name,
            $relation_names,
            $table_column_name,
            $relation_column_name,
            $strategy
        );
        
        echo sprintf(
            MessageResources::END_MSG, $table_name, $num_records, 
            $ubench->getTime(), $ubench->getMemoryUsage(), $ubench->getMemoryPeak()
        );
    }
}

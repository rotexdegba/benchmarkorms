<?php
namespace Rotexsoft\PhpOrmBenchmarks\Ubench;

use \Rotexsoft\PhpOrmBenchmarks\LeanOrm\{LeanOrmDataFetcher, LeanOrmFetchStrategies};

/**
 * Description of LeanOrmHasManyOrHasManyThroughRunner
 *
 * @author rotimi
 */
class LeanOrmHasManyOrHasManyThroughRunner {
    
    public function __construct() { }
    
    /**
     * @param \Ubench $ubench           Ubench instance
     * 
     * @param string $relation_names    Relation name (has many or has many through)
     * 
     * @param string $table_column_name A property on the records to be fetched. 
     *                                  For example if we are fetching authors 
     *                                  we can specify name for this argument
     * 
     * @param int $offset               Offset position
     * 
     * @param null|int $limit           Number of records to fetch per iteration, null means no limit
     * 
     * @param string $shell_script_start_time Full date-time stamp when run-benchmarks.sh which invokes this object was executed
     */
    public function __invoke(
        \Ubench $ubench,
        string $table_name, 
        array $relation_names,
        string $table_column_name,
        string $relation_column_name,
        int $offset = 0,
        ?int $limit = 999,
        string $strategy= LeanOrmFetchStrategies::FETCH_ROWS_INTO_ARRAY,
        array $pdo_args =[],
        string $shell_script_start_time =''
    ) {
        $num_records = 0;
        
        \Rotexsoft\PhpOrmBenchmarks\Utils::showOrmVersion(MessageResources::PACKAGIST_NAME_LEAN);
        
        \Rotexsoft\PhpOrmBenchmarks\Utils::printDbInfo(
            LeanOrmDataFetcher::getModel($table_name, $pdo_args)->getPDO()
        );
        
        echo ($limit === null)
            ? sprintf(
                MessageResources::START_MSG_NO_LIMIT, MessageResources::ORM_VENDOR_LEAN, $table_name, implode(', ', $relation_names), 
                MessageResources::HAS_MANY_OR_HMT, $strategy, $table_column_name, $table_name
            )
            : sprintf(
                MessageResources::START_MSG, MessageResources::ORM_VENDOR_LEAN, $table_name, implode(', ', $relation_names), 
                MessageResources::HAS_MANY_OR_HMT, ($limit), $strategy, $table_column_name, $table_name
            );
        
        $ubench->run(
            function(
                $offset, 
                $limit,
                $table_name,
                $relation_names, 
                $table_column_name,
                $relation_column_name,
                $strategy,
                $pdo_args
            ) use (&$num_records) {
                do {
                    $recordSet = LeanOrmDataFetcher::fetchAll($table_name, $relation_names, $offset, $limit, $strategy, $pdo_args);

                    foreach ($recordSet as $record) {

                        $val = $record[$table_column_name];
                        
                        foreach($relation_names as $relation_name) {
                            
                            foreach ($record[$relation_name] as $related_record) {
                                
                                $related_record[$relation_column_name];
                            }
                        }
                        
                        $num_records++; //var_dump("{$num_records} {$val}");
                    }

                    $offset += ($limit ?? 0);
                    
                }while(count($recordSet) > 0 && $limit !== null);
            },
            $offset, 
            $limit,
            $table_name,
            $relation_names,
            $table_column_name,
            $relation_column_name,
            $strategy,
            $pdo_args
        );
        
        echo sprintf(
            MessageResources::END_MSG, $table_name, ($num_records), 
            $ubench->getTime(), $ubench->getMemoryUsage(), $ubench->getMemoryPeak()
        );
        
        $test_result = [
            'orm_vendor' => MessageResources::ORM_VENDOR_LEAN,
            'short_desc' => sprintf(MessageResources::SHORT_DESC_HM_HMT, $table_name, implode(', ', $relation_names)),
            'strategy' => $strategy,
            'chunk_size' => $limit,
            'execution_duration' => $ubench->getTime(),
            'memory_used' => $ubench->getMemoryUsage(),
            'shell_script_start_time' => $shell_script_start_time,
        ];
        LeanOrmDataFetcher::storeBenchmarkResult($test_result, $pdo_args);
    }
}

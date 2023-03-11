<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks\Ubench;

use \Rotexsoft\PhpOrmBenchmarks\Eloquent\{EloquentDataFetcher, EloquentFetchStrategies};

/**
 * Description of EloquentHasManyOrHasManyThroughRunner
 *
 * @author rotimi
 */
class EloquentHasManyOrHasManyThroughRunner {

    public function __construct() { }
    
    /**
     * @param \Ubench $ubench               Ubench instance
     * 
     * @param string $table_name            DB table name
     * 
     * @param array $relation_names         Relation names (belongs to or has one) either
     *                                      [relation_name => relation_column_name .....]
     * 
     * @param string $table_column_name     A property on the records to be fetched.
     *                                      For example if we are fetching authors
     *                                      we can specify name for this argument
     * 
     * @param int $offset                   Offset position
     * 
     * @param null|int $limit               Number of records to fetch per iteration, null means no limit
     * 
     * @param string $strategy              It must be one of chunk, get or lazy.
     *                                      This is the method that Eloquent will use to 
     *                                      fetch the desired data
     * 
     * @param string $shell_script_start_time Full date-time stamp when run-benchmarks.sh which invokes this object was executed
     * 
     * @param bool $fetch_only_first_set        True means only fetch the first $limit records starting after the $offset position, 
     *                                          False means fetch all records in chunks of $limit. 
     *                                          This only applies to fetch strategies that use $offset & $limit.
     */
    public function __invoke(
        \Ubench $ubench,
        string $table_name,
        array $relation_names,
        string $table_column_name,
        int $offset = 0,
        ?int $limit = 999,
        string $strategy = EloquentFetchStrategies::CHUNK, // chunk, lazy, get
        string $shell_script_start_time ='',
        bool $fetch_only_first_set = false
    ) {
        $num_records = 0;
        
        \Rotexsoft\PhpOrmBenchmarks\Utils::showOrmVersion(MessageResources::PACKAGIST_NAME_ELOQUENT);
        
        \Rotexsoft\PhpOrmBenchmarks\Utils::printDbInfo(
            \Rotexsoft\PhpOrmBenchmarks\BootstrapEloquent::getPdo($table_name)
        );
        
        echo ($limit === null)
            ? sprintf(
                MessageResources::START_MSG_NO_LIMIT, MessageResources::ORM_VENDOR_ELOQUENT, $table_name, implode(', ', array_keys($relation_names)), 
                MessageResources::HAS_MANY_OR_HMT, $strategy, $table_column_name, $table_name
            )
            : sprintf(
                MessageResources::START_MSG, MessageResources::ORM_VENDOR_ELOQUENT, $table_name, implode(', ', array_keys($relation_names)), 
                MessageResources::HAS_MANY_OR_HMT, ($limit), $strategy, $table_column_name, $table_name
            );
        
        $ubench->run(
            function() 
            use (
                &$num_records, 
                $table_name, 
                $relation_names, 
                $table_column_name,
                $offset,
                $limit,
                $strategy,
                $fetch_only_first_set
            ) {
                do {
                    $recordSet = EloquentDataFetcher::fetchAll($table_name, array_keys($relation_names), $offset, $limit, $strategy);

                    foreach ($recordSet as $record) {

                        $val = $record->$table_column_name;
                        $num_records++; //var_dump("{$table_name} {$table_column_name} {$num_records} {$val}");
                        
                        foreach($relation_names as $relation_name=>$relation_column_name) {
                            
                            foreach ($record->$relation_name as $related_record) {
                                
                                $related_record->$relation_column_name;
                                //var_dump("\t{$relation_name} {$relation_column_name} {$related_record->$relation_column_name}");
                            }
                        }
                    }
                    $offset += ($limit ?? 0);
                    
                } while(
                    count($recordSet) > 0 
                    // chunk & lazy do not need do while, they fetch all the data in one call
                    && !in_array($strategy, [EloquentFetchStrategies::CHUNK, EloquentFetchStrategies::LAZY])
                    && $limit !== null
                    && !$fetch_only_first_set
                ); 
            }
        );  // $ubench->run(...)
        
        echo sprintf(
            MessageResources::END_MSG, $table_name, ($num_records), 
            $ubench->getTime(), $ubench->getMemoryUsage(), $ubench->getMemoryPeak()
        );
        
        $test_result = [
            'orm_vendor' => MessageResources::ORM_VENDOR_ELOQUENT 
                            . ' - ' . \Composer\InstalledVersions::getVersion(MessageResources::PACKAGIST_NAME_ELOQUENT),
            'short_desc' => sprintf(MessageResources::SHORT_DESC_HM_HMT, $table_name, $num_records, implode(', ', array_keys($relation_names) )),
            'strategy' => $strategy,
            'chunk_size' => $limit,
            'execution_duration' => $ubench->getTime(),
            'memory_used' => $ubench->getMemoryUsage(),
            'execution_duration_in_seconds' => $ubench->getTime(true),
            'memory_used_in_bytes' => $ubench->getMemoryUsage(true),
            'shell_script_start_time' => $shell_script_start_time,
        ];
        EloquentDataFetcher::storeBenchmarkResult($test_result);
    }
}

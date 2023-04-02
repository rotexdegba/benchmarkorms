<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks\Ubench;

use \Rotexsoft\PhpOrmBenchmarks\Eloquent\{EloquentDataFetcher, EloquentFetchStrategies};

/**
 * Description of EloquentNoEagerLoadingRunner
 *
 * @author rotimi
 */
class EloquentNoEagerLoadingRunner {

    public function __construct() { }
    
    /**
     * @param \Ubench $ubench               Ubench instance
     * 
     * @param string $table_name            DB table name
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
     * @param string $shell_script_start_time Full date-time stamp when run-*.sh which invokes this object was executed
     * 
     * @param bool $fetch_only_first_set        True means only fetch the first $limit records starting after the $offset position, 
     *                                          False means fetch all records in chunks of $limit. 
     *                                          This only applies to fetch strategies that use $offset & $limit.
     */
    public function __invoke(
        \Ubench $ubench,
        string $table_name,
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
                MessageResources::START_MSG_NO_EAGER_NO_LIMIT, MessageResources::ORM_VENDOR_ELOQUENT, 
                $table_name, $strategy, $table_column_name, $table_name
            )
            :  
            (
                $fetch_only_first_set
                ? sprintf(
                    MessageResources::START_MSG_NO_EAGER_FIRST_N, MessageResources::ORM_VENDOR_ELOQUENT, 
                    $table_name, $limit, $strategy, $table_column_name, $table_name
                )
                : sprintf(
                    MessageResources::START_MSG_NO_EAGER, MessageResources::ORM_VENDOR_ELOQUENT, 
                    $table_name, number_format($limit), $strategy, $table_column_name, $table_name
                )
            )
            ;
        
        $ubench->run(
            function() 
            use (
                &$num_records, 
                $table_name, 
                $table_column_name, 
                $limit,
                $offset,
                $strategy,
                $fetch_only_first_set
            ) {
                $progress_bar = \Rotexsoft\PhpOrmBenchmarks\Utils::createClimateProgressBar(
                    \Rotexsoft\PhpOrmBenchmarks\BootstrapEloquent::getPdo($table_name), 
                    $table_name, $limit, $fetch_only_first_set
                );
            
                do {
                    $fetch_all_records = (!$fetch_only_first_set);
                    $recordSet = EloquentDataFetcher::fetchAll($table_name, [], $offset, $limit, $strategy, $fetch_all_records);

                    foreach ($recordSet as $record) {

                        $progress_bar->current($num_records);
                        $val = $record->$table_column_name;
                        $num_records++;//var_dump("{$num_records} {$val}");
                        
                        if(
                            $fetch_only_first_set 
                            && $limit !== null 
                            && $num_records === $limit
                        ) {
                            break 2; // lazy will always loop through all the records in chunks of $limit (internally)
                                     // need to break here out of the foreach & do while loop once lazy has returned $limit records
                        }
                    }
                    
                    $offset += ($limit ?? 0);
                    
                } while(
                    // chunk & lazy do not need do while, they fetch all the data in one call
                    !in_array($strategy, [EloquentFetchStrategies::CHUNK, EloquentFetchStrategies::LAZY])
                    && count($recordSet) > 0
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
            'short_desc' => (
                                ($limit !== null && $fetch_only_first_set)
                                ?sprintf(MessageResources::SHORT_DESC_NO_EAGER_FIRST_N, number_format($limit), $table_name, number_format($num_records))
                                :sprintf(MessageResources::SHORT_DESC_NO_EAGER, $table_name, number_format($num_records))
                            ),
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

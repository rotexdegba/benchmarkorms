<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks\Ubench;

use \Rotexsoft\PhpOrmBenchmarks\AtlasOrm\{AtlasDataFetcher, AtlasFetchStrategies};

/**
 * Description of AtlasNoEagerLoadingRunner
 *
 * @author rotimi
 */
class AtlasNoEagerLoadingRunner {
    
    public function __construct() { }

    /**
     * @param \Ubench $ubench            Ubench instance
     * 
     * @param \Atlas\Orm\Atlas $atlas    Atlas instance
     * 
     * @param string $table_name         DB table name
     * 
     * @param string $table_column_name  A property on the records to be fetched. 
     *                                   For example if we are fetching authors 
     *                                   we can specify name for this argument
     * 
     * @param int $offset                Offset position
     * 
     * @param null|int $limit            Number of records to fetch per iteration, null means no limit
     * 
     * @param string $strategy           It must be one of fetchRecords or fetchRecordSet
     *                                   This is the method that Atlas will use to fetch
     *                                   the desired data
     * 
     * @param string $shell_script_start_time Full date-time stamp when run-*.sh which invokes this object was executed
     * 
     * @param bool $fetch_only_first_set        True means only fetch the first $limit records starting after the $offset position, 
     *                                          False means fetch all records in chunks of $limit. 
     *                                          This only applies to fetch strategies that use $offset & $limit.
     */
    public function __invoke (
        \Ubench $ubench, 
        \Atlas\Orm\Atlas $atlas, 
        string $table_name,
        string $table_column_name,
        int $offset = 0, 
        ?int $limit = 999,
        string $strategy = AtlasFetchStrategies::FETCH_RECORDS,
        string $shell_script_start_time ='',
        bool $fetch_only_first_set = false
    ) {
        $num_records = 0;
        
        \Rotexsoft\PhpOrmBenchmarks\Utils::showOrmVersion(MessageResources::PACKAGIST_NAME_ATLAS);
        
        \Rotexsoft\PhpOrmBenchmarks\Utils::printDbInfo(
            AtlasDataFetcher::getPdo($atlas, $table_name)
        );
        
        echo ($limit === null)
            ? sprintf(
                MessageResources::START_MSG_NO_EAGER_NO_LIMIT, MessageResources::ORM_VENDOR_ATLAS, 
                $table_name, $strategy, $table_column_name, $table_name
            )
            : 
            (
                $fetch_only_first_set
                ? sprintf(
                    MessageResources::START_MSG_NO_EAGER_FIRST_N, MessageResources::ORM_VENDOR_ATLAS, 
                    $table_name, number_format($limit), $strategy, $table_column_name, $table_name
                )
                : sprintf(
                    MessageResources::START_MSG_NO_EAGER, MessageResources::ORM_VENDOR_ATLAS, 
                    $table_name, number_format($limit), $strategy, $table_column_name, $table_name
                )
            )
            ;
        
        $ubench->run(
            function() 
            use (
                &$num_records, 
                $atlas, 
                $table_name, 
                $table_column_name,
                $offset, 
                $limit,
                $strategy,
                $fetch_only_first_set
            ) {
                $progress_bar = \Rotexsoft\PhpOrmBenchmarks\Utils::createClimateProgressBar(
                    AtlasDataFetcher::getPdo($atlas, $table_name), $table_name, $limit, $fetch_only_first_set
                );
                
                do {
                    $recordSet = AtlasDataFetcher::fetchAll($table_name, [], $atlas, $offset, $limit, $strategy);

                    foreach ($recordSet as $record) {
                        
                        $val = $record->$table_column_name;
                        $num_records++; //var_dump("{num_records} {$val}");
                        $progress_bar->current($num_records);
                    }
                    $offset += ($limit ?? 0);
                    
                }while(count($recordSet) > 0 && $limit !== null && !$fetch_only_first_set);
            }
        );  // $ubench->run(...)
        
        echo sprintf(
            MessageResources::END_MSG, $table_name, $num_records, 
            $ubench->getTime(), $ubench->getMemoryUsage(), $ubench->getMemoryPeak()
        );
        
        $test_result = [
            'orm_vendor' => MessageResources::ORM_VENDOR_ATLAS 
                            . ' - ' . \Composer\InstalledVersions::getVersion(MessageResources::PACKAGIST_NAME_ATLAS),
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
        AtlasDataFetcher::storeBenchmarkResult($test_result, $atlas);
    }
}

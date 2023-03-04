<?php
namespace Rotexsoft\PhpOrmBenchmarks\Ubench;

use \Rotexsoft\PhpOrmBenchmarks\LeanOrm\{LeanOrmDataFetcher, LeanOrmFetchStrategies};

/**
 * Description of LeanOrmNoEagerLoadingRunner
 *
 * @author rotimi
 */
class LeanOrmNoEagerLoadingRunner {
    
    public function __construct() { }
    
    /**
     * @param \Ubench $ubench       Ubench instance
     * 
     * @param string $table_column_name A property on the records to be fetched. 
     *                              For example if we are fetching authors 
     *                              we can specify name for this argument
     * 
     * @param int $offset           Offset position
     * 
     * @param null|int $limit       Number of records to fetch per iteration, null means no limit
     * 
     * @param string $shell_script_start_time Full date-time stamp when run-benchmarks.sh which invokes this object was executed
     */
    public function __invoke(
        \Ubench $ubench,
        string $table_name,
        string $table_column_name,
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
                MessageResources::START_MSG_NO_EAGER_NO_LIMIT, MessageResources::ORM_VENDOR_LEAN, 
                $table_name, $strategy, $table_column_name, $table_name
            )
            : sprintf(
                MessageResources::START_MSG_NO_EAGER, MessageResources::ORM_VENDOR_LEAN, 
                $table_name, ($limit), $strategy, $table_column_name, $table_name
            );
        
        $ubench->run(
            function(
                $offset, 
                $limit,
                $table_name,
                $table_column_name,
                $strategy,
                $pdo_args
            ) use (&$num_records) {
                do {
                    $recordSet = LeanOrmDataFetcher::fetchAll($table_name, [], $offset, $limit, $strategy, $pdo_args);

                    foreach ($recordSet as $record) {

                        $val = $record[$table_column_name];
                        $num_records++; //var_dump("{$num_records} {$val}");
                    }

                    $offset += ($limit ?? 0);
                    
                }while(count($recordSet) > 0 && $limit !== null);
            },
            $offset, 
            $limit,
            $table_name,
            $table_column_name,
            $strategy,
            $pdo_args
        );
        
        echo sprintf(
            MessageResources::END_MSG, $table_name, ($num_records), 
            $ubench->getTime(), $ubench->getMemoryUsage(), $ubench->getMemoryPeak()
        );
        
        $test_result = [
            'orm_vendor' => MessageResources::ORM_VENDOR_LEAN 
                            . ' - ' . \Composer\InstalledVersions::getVersion(MessageResources::PACKAGIST_NAME_LEAN),
            'short_desc' => sprintf(MessageResources::SHORT_DESC_NO_EAGER, $table_name, $num_records),
            'strategy' => $strategy,
            'chunk_size' => $limit,
            'execution_duration' => $ubench->getTime(),
            'memory_used' => $ubench->getMemoryUsage(),
            'execution_duration_in_seconds' => $ubench->getTime(true),
            'memory_used_in_bytes' => $ubench->getMemoryUsage(true),
            'shell_script_start_time' => $shell_script_start_time,
        ];
        LeanOrmDataFetcher::storeBenchmarkResult($test_result, $pdo_args);
    }
}

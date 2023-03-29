<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks\Ubench;

use \Rotexsoft\PhpOrmBenchmarks\AtlasOrm\{AtlasDataFetcher, AtlasFetchStrategies};

/**
 * Description of AtlasBelongsToOrHasOneRunner
 *
 * @author rotimi
 */
class AtlasBelongsToOrHasOneRunner {
    
    public function __construct() { }

    /**
     * @param \Ubench $ubench               Ubench instance
     * 
     * @param \Atlas\Orm\Atlas $atlas       Atlas instance
     * 
     * @param string $table_name            DB table name
     * 
     * @param array $relation_names         Relation names (belongs to or has one), either
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
     * @param string $strategy              It must be one of fetchRecords or fetchRecordSet
     *                                      This is the method that Atlas will use to fetch
     *                                      the desired data
     * 
     * @param string $shell_script_start_time   Full date-time stamp when run-*.sh which invokes this object was executed
     * 
     * @param bool $fetch_only_first_set        True means only fetch the first $limit records starting after the $offset position, 
     *                                          False means fetch all records in chunks of $limit. 
     *                                          This only applies to fetch strategies that use $offset & $limit.
     */
    public function __invoke (
        \Ubench $ubench, 
        \Atlas\Orm\Atlas $atlas, 
        string $table_name, 
        array $relation_names, 
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
                MessageResources::START_MSG_NO_LIMIT, MessageResources::ORM_VENDOR_ATLAS, $table_name, implode(', ', array_keys($relation_names)), 
                MessageResources::BELONGS_TO_HAS_ONE, $strategy, $table_column_name, $table_name
            )
            :
            (
                $fetch_only_first_set
                ? sprintf(
                    MessageResources::START_MSG_FIRST_N, MessageResources::ORM_VENDOR_ATLAS, $table_name, implode(', ', array_keys($relation_names)), 
                    MessageResources::BELONGS_TO_HAS_ONE, ($limit), $strategy, $table_column_name, $table_name
                )
                : sprintf(
                    MessageResources::START_MSG, MessageResources::ORM_VENDOR_ATLAS, $table_name, implode(', ', array_keys($relation_names)), 
                    MessageResources::BELONGS_TO_HAS_ONE, ($limit), $strategy, $table_column_name, $table_name
                )
            )
            ;
        
        $ubench->run(
            function()
            use (
                &$num_records, 
                $atlas,
                $offset,
                $limit,
                $table_name,
                $relation_names,
                $table_column_name,
                $strategy,
                $fetch_only_first_set
            ) {
                do {
                    $recordSet = AtlasDataFetcher::fetchAll($table_name, array_keys($relation_names), $atlas, $offset, $limit, $strategy);

                    foreach ($recordSet as $record) {

                        $val = $record->$table_column_name;
                        $num_records++; //var_dump("{$table_name} {$table_column_name} {num_records} {$val}");
                        
                        foreach($relation_names as $relation_name => $relation_column_name) {
                            
                            $record->$relation_name->$relation_column_name;
                            //var_dump("\t{$relation_name} {$relation_column_name} {$record->$relation_name->$relation_column_name}");
                        }
                    }
                    $offset += ($limit ?? 0);
                    
                }while(count($recordSet) > 0 && $limit !== null && !$fetch_only_first_set);
            }
        ); // $ubench->run(...)
        
        echo sprintf(
            MessageResources::END_MSG, $table_name, ($num_records), 
            $ubench->getTime(), $ubench->getMemoryUsage(), $ubench->getMemoryPeak()
        );
        
        $test_result = [
            'orm_vendor' => MessageResources::ORM_VENDOR_ATLAS 
                            . ' - ' . \Composer\InstalledVersions::getVersion(MessageResources::PACKAGIST_NAME_ATLAS),
            'short_desc' => sprintf(MessageResources::SHORT_DESC_BT_HO, $table_name, $num_records, implode(', ', array_keys($relation_names) )),
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

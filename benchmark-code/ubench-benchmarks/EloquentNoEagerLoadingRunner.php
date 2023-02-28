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
     * @param int $limit                    Number of records to fetch per iteration.
     * 
     * @param string $strategy              It must be one of chunk, get or lazy.
     *                                      This is the method that Eloquent will use to 
     *                                      fetch the desired data
     */
    public function __invoke(
        \Ubench $ubench,
        string $table_name,
        string $table_column_name,
        int $offset = 0,
        int $limit = 999,
        string $strategy = EloquentFetchStrategies::CHUNK // chunk, lazy, get
    ) {
        $num_records = 0;
        
        \Rotexsoft\PhpOrmBenchmarks\Utils::showOrmVersion(MessageResources::PACKAGIST_NAME_ELOQUENT);
        
        \Rotexsoft\PhpOrmBenchmarks\Utils::printDbInfo(
            \Rotexsoft\PhpOrmBenchmarks\BootstrapEloquent::getPdo($table_name)
        );
        
        echo sprintf(
            MessageResources::START_MSG_NO_EAGER, MessageResources::ORM_VENDOR_ELOQUENT, 
            $table_name, $limit, $strategy, $table_column_name, $table_name
        );
        
        $ubench->run(
            function(
                $offset, 
                $limit, 
                $table_name, 
                $table_column_name,
                $strategy
            ) use (&$num_records){
            
                do {
                    $recordSet = EloquentDataFetcher::fetchAll($table_name, [], $offset, $limit, $strategy);

                    foreach ($recordSet as $record) {

                        $val = $record->$table_column_name;
                        $num_records++; //var_dump("{$num_records} {$val}");
                    }

                    $offset += $limit;
                    
                } while(
                    count($recordSet) > 0 
                    // chunk & lazy do not need do while, they fetch all the data in one call
                    && !in_array($strategy, [EloquentFetchStrategies::CHUNK, EloquentFetchStrategies::LAZY]) 
                ); 
            },
            $offset,
            $limit,
            $table_name,
            $table_column_name,
            $strategy
        );
        
        echo sprintf(
            MessageResources::END_MSG, $table_name, $num_records, 
            $ubench->getTime(), $ubench->getMemoryUsage(), $ubench->getMemoryPeak()
        );
    }
}

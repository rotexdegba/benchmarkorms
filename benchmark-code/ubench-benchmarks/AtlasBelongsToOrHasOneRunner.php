<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks\Ubench;

use \Rotexsoft\PhpOrmBenchmarks\AtlasOrm\AtlasDataFetcher;

/**
 * Description of AtlasBelongsToOrHasOneRunner
 *
 * @author rotimi
 */
class AtlasBelongsToOrHasOneRunner {
    
    public function __construct() { }

    /**
     * @param \Ubench $ubench            Ubench instance
     * 
     * @param \Atlas\Orm\Atlas $atlas    Atlas instance
     * 
     * @param string $table_name         DB table name
     * 
     * @param array $relation_names      Relation names (belongs to or has one)
     * 
     * @param string $property_name      A property on the records to be fetched. 
     *                                   For example if we are fetching authors 
     *                                   we can specify name for this argument
     * 
     * @param int $offset                Offset position
     * 
     * @param int $limit                 Number of records to fetch per iteration
     *                                   We need this for sqlite.
     */
    public function __invoke (
        \Ubench $ubench, 
        \Atlas\Orm\Atlas $atlas, 
        string $table_name, 
        array $relation_names, 
        string $property_name, 
        int $offset = 0, 
        int $limit = 999
    ) {
        $relation_names_str = implode(', ', $relation_names);
        
        echo "Atlas fetching data from `{$table_name}`"
           . " with relateds `({$relation_names_str})` [BelongsTo or HasOne],"
           . " in chunks of {$limit}. \n`{$property_name}` for each `{$table_name}` record will be accessed.";
        
        $i = 0;
        
        $ubench->run(
            function(
                \Atlas\Orm\Atlas $atlas, 
                $offset, 
                $limit, 
                $table_name, 
                $relation_names, 
                $property_name
            ) use (&$i){
            
                do {
                    $recordSet = AtlasDataFetcher::fetchAll($table_name, $relation_names, $atlas, $offset, $limit);

                    foreach ($recordSet as $record) {

                        $val = $record->$property_name;
                        
                        foreach($relation_names as $relation_name) {
                            
                            $has_one_or_belongs_to_data = $record->$relation_name;
                        }
                        
                        $i++;
                        //var_dump("{$val} {$i}");
                    }

                    $offset += $limit;
                    
                }while($recordSet->count() > 0);
            },
            $atlas,
            $offset,
            $limit,
            $table_name,
            $relation_names,
            $property_name
        );
        
        echo "\nTotal records fetched from `{$table_name}`: {$i} \n" 
           . "\nTime taken: " . $ubench->getTime() 
           . "\nMemory Usage: " . $ubench->getMemoryUsage() 
           . "\nPeak Memory Usage: " . $ubench->getMemoryPeak() 
           . PHP_EOL. PHP_EOL;
    }
}

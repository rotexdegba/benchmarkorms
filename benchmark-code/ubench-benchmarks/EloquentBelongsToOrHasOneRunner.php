<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks\Ubench;

/**
 * Description of EloquentBelongsToOrHasOneRunner
 *
 * @author rotimi
 */
class EloquentBelongsToOrHasOneRunner {

    public function __construct() { }
    
    public function __invoke(
        \Ubench $ubench,
        $eloquent_model_class_name,
        string $relation_name,
        string $property_name,
        int $offset = 0,
        int $limit = 999,
        $strategy='chunk' // chunck, lazy, get
    ) {
        $ubench->run(
            function(
                $eloquent_model_class_name, 
                $offset, 
                $limit, 
                $relation_name, 
                $property_name,
                $strategy
            ) {
                $i = 1;
                
                /** @var \Illuminate\Database\Eloquent\Model $eloquent_model_class_name */
                if($strategy === 'lazy') {
                    
                    echo 'Eloquent using lazy strategy' . PHP_EOL;
                    
                    foreach ($eloquent_model_class_name::with($relation_name)->lazy() as $record) {

                        $val = $record->$property_name;
                        $has_one_or_belongs_to_data = $record->$relation_name;
                        //var_dump("{$val} {$i}");
                        $i++;
                    }
                    
                } elseif($strategy === 'get') {
                    
                    echo 'Eloquent using get strategy' . PHP_EOL;
                    
                    do {
                        $recordSet = $eloquent_model_class_name::with($relation_name)->offset($offset)->limit($limit)->get();

                        foreach ($recordSet as $record) {

                            $val = $record->$property_name;
                            $has_one_or_belongs_to_data = $record->$relation_name;
                            //var_dump("{$val} {$i}");
                            $i++;
                        }

                        $offset += $limit;

                    }while($recordSet->count() > 0);
                    
                } else {
                    
                    echo 'Eloquent using chunk strategy' . PHP_EOL;
                    
                    //default to chunk
                    $eloquent_model_class_name::with($relation_name)->chunk($limit, function ($records)use(&$i, $property_name, $relation_name) {

                        foreach ($records as $record) {

                            $val = $record[$property_name];
                            $has_one_or_belongs_to_data = $record->$relation_name;
                            //var_dump("{$val} {$i}");
                             $i++;
                        }
                    });
                }                
            },
            $eloquent_model_class_name,
            $offset, 
            $limit,
            $relation_name,
            $property_name,
            $strategy
        );
    }
}

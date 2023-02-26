<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks\Ubench;

/**
 * Description of EloquentHasManyOrHasManyThroughRunner
 *
 * @author rotimi
 */
class EloquentHasManyOrHasManyThroughRunner {

    public function __construct() { 
        
    }
    
    public function __invoke(
        \Ubench $ubench,
        $eloquent_model_class_name,
        string $relation_name,
        string $property_name,
        int $offset = 0,
        int $limit = 999
    ) {
        $ubench->run(
            
            function(
                $eloquent_model_class_name, 
                $offset, 
                $limit, 
                $relation_name, 
                $property_name
            ) {
                $i = 1;
                
                /** @var \Illuminate\Database\Eloquent\Model $eloquent_model_class_name */
                $eloquent_model_class_name::with($relation_name)->chunk($limit, function ($records)use(&$i, $property_name, $relation_name) {

                    foreach ($records as $record) {

                        $name = $record[$property_name];
                        $count = $record->$relation_name->count();
                        //var_dump("{$name} {$i}");
                        //var_dump("{$name} {$i} with {$record->$relation_name->count()} {$relation_name}");
                         $i++;
                    }
                });
                
//                foreach ($eloquent_model_class_name::with($relation_name)->get() as $record) {
//
//                    $name = $record[$property_name];
//                    $count = $record->$relation_name->count();
//                    //var_dump("{$name} {$i}");
//                    //var_dump("{$name} {$i} with {$record->$relation_name->count()} {$relation_name}");
//                     $i++;
//                }
                
            },
            $eloquent_model_class_name,
            $offset, 
            $limit,
            $relation_name,
            $property_name
        );
    }
}

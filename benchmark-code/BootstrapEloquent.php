<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

/**
 * Description of BootstrapEloquent
 *
 * @author rotimi
 */
class BootstrapEloquent {
    
    protected static bool $is_booted = false;
    
    public static function setup() {
        
        if(!static::$is_booted) {
            
            $ds = DIRECTORY_SEPARATOR;
            $raw_root_folder = __DIR__ . $ds . '..' . $ds;
            $root_folder = realpath($raw_root_folder).$ds;

            $capsule = new Capsule;
            $config = include $root_folder . 'eloquent-config.php';
            $capsule->addConnection($config);
            $capsule->setEventDispatcher(new Dispatcher(new Container));

            // Make this Capsule instance available globally via static methods... (optional)
            $capsule->setAsGlobal();

            // Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
            $capsule->bootEloquent();
            
            static::$is_booted = true;
        }
    }
    
    public static function getPdo(string $table_name): \PDO {
        
        static::setup();
        
        /** @var \Illuminate\Database\Eloquent\Model $model_class_name */
        $model_class_name = Eloquent\EloquentDataFetcher::TABLE_TO_MODEL_MAP[$table_name];
        
        return $model_class_name::resolveConnection()->getPdo();
    }
}

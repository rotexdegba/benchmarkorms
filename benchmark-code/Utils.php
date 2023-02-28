<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks;

/**
 * Description of Utils
 *
 * @author rotimi
 */
class Utils {
    
    private final function __construct() { }
    
    public static function printDbInfo(\PDO $pdo): void {
        
        echo \LeanOrmCli\SchemaUtils::getCurrentConnectionInfo(
            $pdo
        ) . PHP_EOL;
    }
    
    public static function showOrmVersion(string $package_name): void {
        
        echo $package_name . ': ' 
            . \Composer\InstalledVersions::getVersion($package_name) 
            . ' installed'. PHP_EOL . PHP_EOL;
    }
}

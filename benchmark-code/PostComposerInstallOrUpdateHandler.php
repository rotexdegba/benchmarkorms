<?php
namespace Rotexsoft\PhpOrmBenchmarks;

/**
 * Description of PostComposerInstallOrUpdateHandler
 *
 * @author rotimi
 */
class PostComposerInstallOrUpdateHandler {

    public static function exec() {

        $ds = DIRECTORY_SEPARATOR;
        echo( "Running post composer install or update tasks ........".PHP_EOL.PHP_EOL );

        $raw_root_folder = __DIR__ . $ds . '..' . $ds;
        $root_folder = realpath($raw_root_folder).$ds;
        $was_any_file_copied = false;
        $files_to_edit = [];
        
        $files_to_copy = [
            "{$root_folder}phinx-dist.php" => "{$root_folder}phinx.php",
            "{$root_folder}pdo-dist.php" => "{$root_folder}pdo.php",
            "{$root_folder}atlas-dist.php" => "{$root_folder}atlas.php",
            "{$root_folder}eloquent-config-dist.php" => "{$root_folder}eloquent-config.php",
            "{$root_folder}leanorm-cli-config-dist.php" => "{$root_folder}leanorm-cli-config.php",
        ];
        
        foreach($files_to_copy as $from => $to) {
            
            if(file_exists($to)) { continue; }
            
            $was_any_file_copied = true;
            
            echo( "Trying to copy `{$from}` to `{$to}` ....".PHP_EOL );

            if( copy($from, $to) ) {
                
                $files_to_edit[] = $to;
                echo( "Successfully Copied!".PHP_EOL );

            } else {

                echo( "Could not copy `{$from}` to `{$to}`!".PHP_EOL );
            }
            
            echo PHP_EOL;
            
            sleep(1);
        }
        
        if($was_any_file_copied) {
            
            echo 'Please edit any of the files below if necessary'. PHP_EOL;

            foreach($files_to_edit as $to) {

                echo "\t{$to}".PHP_EOL;
            }
        }
        
        if(!\is_executable("{$root_folder}run-benchmarks.sh")) {

            echo 'Making ' . "{$root_folder}run-benchmarks.sh" . ' executable' . PHP_EOL;
            
            \chmod("{$root_folder}run-benchmarks.sh", 0755);
        }
        
        echo PHP_EOL . 'All done!' . PHP_EOL;
    }
}

<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks;

use kbATeam\MarkdownTable\{Column, Table};

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
    
    public static function dumpLatestResultsToMarkdown(string $shell_script_start_time): void {
        
        include_once __DIR__ . DIRECTORY_SEPARATOR . '../load-lean.php';
        
        $benchmarkResultsModel = new \Rotexsoft\PhpOrmBenchmarks\LeanOrm\Blog\BenchmarksResults\BenchmarksResultsModel(...$leanArgs);
        
        $test_results = $benchmarkResultsModel->fetchRowsIntoArray(
            $benchmarkResultsModel->getSelect()
                                  ->cols(
                                        [
                                            'orm_vendor', 'short_desc', 'strategy', 
                                            'chunk_size', 'execution_duration', 'memory_used', 
                                            'execution_duration_in_seconds', 'memory_used_in_bytes',
                                        ]
                                    )
                                  ->where(' shell_script_start_time = ? ', $shell_script_start_time)
        );

        foreach($test_results as $key=>$val) {

            if($val['chunk_size'] === null) { $test_results[$key]['chunk_size'] = 'No limit clause'; }
        }
        
        $operating_system = ''; // $distro['name'] will report this for non-Linux
        $distro = [
            'name' => php_uname('s'),
            'version' => php_uname('r') . ' - ' . php_uname('v') . ' - ' . php_uname('m'),
        ];

        if(PHP_OS === 'Linux') {

            // use linfo to get detailed linux os info
            $linfo = new \Linfo\Linfo();
            $parser = $linfo->getParser();
            $operating_system = $parser->getOS() . ' -';
            $distro = $parser->getDistro();
        }

        $header = "# Latest Benchmark Results for Fetching Data from tables without Related Data";
        $php_version = '**Benchmarks were run on PHP Version:** '. PHP_VERSION;
        $os_full = "**Operating System:** {$operating_system} {$distro['name']} - {$distro['version']} ";
        $db_version = $benchmarkResultsModel->getPDO()->getAttribute(\PDO::ATTR_DRIVER_NAME) 
                      . ' - ' . $benchmarkResultsModel->getPDO()->getAttribute(\PDO::ATTR_SERVER_VERSION) ;
        $date_generated = "**Date Generated:** " . date('Y-m-d h:i:s');

        $output = "$header\n\n{$php_version}\n\n{$os_full}\n\n**Database:** {$db_version}\n\n{$date_generated}\n\n\n\n";

        $table = new Table();
        $table->addColumn('orm_vendor', new Column('orm_vendor', Column::ALIGN_LEFT));
        $table->addColumn('short_desc', new Column('short_desc', Column::ALIGN_LEFT));
        $table->addColumn('strategy', new Column('strategy', Column::ALIGN_LEFT));
        $table->addColumn('chunk_size', new Column('chunk_size', Column::ALIGN_LEFT));
        $table->addColumn('execution_duration', new Column('execution_duration', Column::ALIGN_LEFT));
        $table->addColumn('memory_used', new Column('memory_used', Column::ALIGN_LEFT));
        $table->addColumn('execution_duration_in_seconds', new Column('execution_duration_in_seconds', Column::ALIGN_LEFT));
        $table->addColumn('memory_used_in_bytes', new Column('memory_used_in_bytes', Column::ALIGN_LEFT));
        
        foreach ($table->generate($test_results) as $row) {
            
            //printf('%s%s', $row, PHP_EOL);
            $output .= $row . PHP_EOL;
        }
        
        file_put_contents(
            __DIR__ . DIRECTORY_SEPARATOR . '../benchmark-results/LATEST_RESULTS_NO_EAGER.md', 
            $output
        );
        
        echo "Results have been saved to ./benchmark-results/LATEST_RESULTS_NO_EAGER.md" . PHP_EOL;
    }
}

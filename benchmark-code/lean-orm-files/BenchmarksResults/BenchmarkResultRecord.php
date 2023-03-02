<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks\LeanOrm\Blog\BenchmarksResults;

/**
 * @property mixed $id int unsigned NOT NULL
 * @property mixed $orm_vendor varchar(255) NOT NULL
 * @property mixed $short_desc text NOT NULL
 * @property mixed $strategy text NOT NULL
 * @property mixed $chunk_size int unsigned
 * @property mixed $execution_duration text NOT NULL
 * @property mixed $memory_used text NOT NULL
 * @property mixed $shell_script_start_time text NOT NULL
 * @property mixed $m_timestamp timestamp NOT NULL
 * @property mixed $date_created timestamp NOT NULL
 *
 * @method BenchmarksResultsModel getModel()
 */
class BenchmarkResultRecord extends \LeanOrm\Model\Record {
    
    //put your code here
}

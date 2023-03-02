<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks\AtlasOrm\Blog\BenchmarkResult;

use Atlas\Mapper\Record;

/**
 * @method BenchmarkResultRow getRow()
 */
class BenchmarkResultRecord extends Record
{
    use BenchmarkResultFields;
}

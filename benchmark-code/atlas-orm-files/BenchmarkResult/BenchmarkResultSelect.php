<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks\AtlasOrm\Blog\BenchmarkResult;

use Atlas\Mapper\MapperSelect;

/**
 * @method BenchmarkResultRecord|null fetchRecord()
 * @method BenchmarkResultRecord[] fetchRecords()
 * @method BenchmarkResultRecordSet fetchRecordSet()
 */
class BenchmarkResultSelect extends MapperSelect
{
}

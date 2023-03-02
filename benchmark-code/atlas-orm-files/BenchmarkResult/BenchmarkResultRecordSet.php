<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks\AtlasOrm\Blog\BenchmarkResult;

use Atlas\Mapper\RecordSet;

/**
 * @method BenchmarkResultRecord offsetGet($offset)
 * @method BenchmarkResultRecord appendNew(array $fields = [])
 * @method BenchmarkResultRecord|null getOneBy(array $whereEquals)
 * @method BenchmarkResultRecordSet getAllBy(array $whereEquals)
 * @method BenchmarkResultRecord|null detachOneBy(array $whereEquals)
 * @method BenchmarkResultRecordSet detachAllBy(array $whereEquals)
 * @method BenchmarkResultRecordSet detachAll()
 * @method BenchmarkResultRecordSet detachDeleted()
 */
class BenchmarkResultRecordSet extends RecordSet
{
}

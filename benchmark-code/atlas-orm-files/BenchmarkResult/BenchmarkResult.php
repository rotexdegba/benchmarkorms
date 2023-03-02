<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks\AtlasOrm\Blog\BenchmarkResult;

use Atlas\Mapper\Mapper;
use Atlas\Table\Row;

/**
 * @method BenchmarkResultTable getTable()
 * @method BenchmarkResultRelationships getRelationships()
 * @method BenchmarkResultRecord|null fetchRecord($primaryVal, array $with = [])
 * @method BenchmarkResultRecord|null fetchRecordBy(array $whereEquals, array $with = [])
 * @method BenchmarkResultRecord[] fetchRecords(array $primaryVals, array $with = [])
 * @method BenchmarkResultRecord[] fetchRecordsBy(array $whereEquals, array $with = [])
 * @method BenchmarkResultRecordSet fetchRecordSet(array $primaryVals, array $with = [])
 * @method BenchmarkResultRecordSet fetchRecordSetBy(array $whereEquals, array $with = [])
 * @method BenchmarkResultSelect select(array $whereEquals = [])
 * @method BenchmarkResultRecord newRecord(array $fields = [])
 * @method BenchmarkResultRecord[] newRecords(array $fieldSets)
 * @method BenchmarkResultRecordSet newRecordSet(array $records = [])
 * @method BenchmarkResultRecord turnRowIntoRecord(Row $row, array $with = [])
 * @method BenchmarkResultRecord[] turnRowsIntoRecords(array $rows, array $with = [])
 */
class BenchmarkResult extends Mapper
{
}

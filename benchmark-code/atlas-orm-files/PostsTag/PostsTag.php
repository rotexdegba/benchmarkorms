<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks\AtlasOrm\Blog\PostsTag;

use Atlas\Mapper\Mapper;
use Atlas\Table\Row;

/**
 * @method PostsTagTable getTable()
 * @method PostsTagRelationships getRelationships()
 * @method PostsTagRecord|null fetchRecord($primaryVal, array $with = [])
 * @method PostsTagRecord|null fetchRecordBy(array $whereEquals, array $with = [])
 * @method PostsTagRecord[] fetchRecords(array $primaryVals, array $with = [])
 * @method PostsTagRecord[] fetchRecordsBy(array $whereEquals, array $with = [])
 * @method PostsTagRecordSet fetchRecordSet(array $primaryVals, array $with = [])
 * @method PostsTagRecordSet fetchRecordSetBy(array $whereEquals, array $with = [])
 * @method PostsTagSelect select(array $whereEquals = [])
 * @method PostsTagRecord newRecord(array $fields = [])
 * @method PostsTagRecord[] newRecords(array $fieldSets)
 * @method PostsTagRecordSet newRecordSet(array $records = [])
 * @method PostsTagRecord turnRowIntoRecord(Row $row, array $with = [])
 * @method PostsTagRecord[] turnRowsIntoRecords(array $rows, array $with = [])
 */
class PostsTag extends Mapper
{
}

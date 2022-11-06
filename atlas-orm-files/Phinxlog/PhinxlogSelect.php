<?php
declare(strict_types=1);

namespace TestAtlasOrm\Db\Phinxlog;

use Atlas\Mapper\MapperSelect;

/**
 * @method PhinxlogRecord|null fetchRecord()
 * @method PhinxlogRecord[] fetchRecords()
 * @method PhinxlogRecordSet fetchRecordSet()
 */
class PhinxlogSelect extends MapperSelect
{
}

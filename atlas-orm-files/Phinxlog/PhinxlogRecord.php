<?php
declare(strict_types=1);

namespace TestAtlasOrm\Db\Phinxlog;

use Atlas\Mapper\Record;

/**
 * @method PhinxlogRow getRow()
 */
class PhinxlogRecord extends Record
{
    use PhinxlogFields;
}

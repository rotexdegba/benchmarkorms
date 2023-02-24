<?php
declare(strict_types=1);

namespace Benchmark\AtlasOrm\Blog\Summary;

use Atlas\Mapper\Record;

/**
 * @method SummaryRow getRow()
 */
class SummaryRecord extends Record
{
    use SummaryFields;
}

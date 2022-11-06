<?php
declare(strict_types=1);

namespace TestAtlasOrm\Db\Post;

use Atlas\Mapper\Record;

/**
 * @method PostRow getRow()
 */
class PostRecord extends Record
{
    use PostFields;
}

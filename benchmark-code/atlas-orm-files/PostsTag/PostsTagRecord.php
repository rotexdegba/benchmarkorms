<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks\AtlasOrm\Blog\PostsTag;

use Atlas\Mapper\Record;

/**
 * @method PostsTagRow getRow()
 */
class PostsTagRecord extends Record
{
    use PostsTagFields;
}

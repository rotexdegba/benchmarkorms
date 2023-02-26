<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks\AtlasOrm\Blog\Author;

use Atlas\Mapper\Record;

/**
 * @method AuthorRow getRow()
 */
class AuthorRecord extends Record
{
    use AuthorFields;
}

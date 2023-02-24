<?php
declare(strict_types=1);

namespace Benchmark\AtlasOrm\Blog\Comment;

use Atlas\Mapper\Record;

/**
 * @method CommentRow getRow()
 */
class CommentRecord extends Record
{
    use CommentFields;
}

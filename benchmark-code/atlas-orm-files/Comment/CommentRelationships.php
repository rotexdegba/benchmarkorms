<?php
declare(strict_types=1);

namespace Benchmark\AtlasOrm\Blog\Comment;

use Atlas\Mapper\MapperRelationships;
use Benchmark\AtlasOrm\Blog\Post\Post;

class CommentRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->manyToOne('post', Post::CLASS, [ 'post_id' => 'post_id']);
    }
}

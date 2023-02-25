<?php
declare(strict_types=1);

namespace Benchmark\AtlasOrm\Blog\PostsTag;

use Atlas\Mapper\MapperRelationships;

use Benchmark\AtlasOrm\Blog\Post\Post;
use Benchmark\AtlasOrm\Blog\Tag\Tag;

class PostsTagRelationships extends MapperRelationships
{
    protected function define()
    {
        // the threads side of the association mapping
        $this->manyToOne('posts', Post::CLASS, [ 'post_id' => 'post_id']);

        // the tags side of the association mapping
        $this->manyToOne('tags', Tag::CLASS, [ 'tag_id' => 'tag_id']);
    }
}

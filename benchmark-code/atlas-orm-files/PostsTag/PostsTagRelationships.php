<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks\AtlasOrm\Blog\PostsTag;

use Atlas\Mapper\MapperRelationships;

use Rotexsoft\PhpOrmBenchmarks\AtlasOrm\Blog\Post\Post;
use Rotexsoft\PhpOrmBenchmarks\AtlasOrm\Blog\Tag\Tag;

class PostsTagRelationships extends MapperRelationships
{
    protected function define()
    {
        // the posts side of the association mapping
        $this->manyToOne('posts', Post::CLASS, [ 'post_id' => 'post_id']);

        // the tags side of the association mapping
        $this->manyToOne('tags', Tag::CLASS, [ 'tag_id' => 'tag_id']);
        
        // alias mapping for posts_tags belongs to post to ensure conformity with 
        // leanorm & eloquent that rightfully define the relationship in singular
        $this->manyToOne('post', Post::CLASS, [ 'post_id' => 'post_id']);

        // alias mapping for posts_tags belongs to tag to ensure conformity with 
        // leanorm & eloquent that rightfully define the relationship in singular
        $this->manyToOne('tag', Tag::CLASS, [ 'tag_id' => 'tag_id']);
    }
}

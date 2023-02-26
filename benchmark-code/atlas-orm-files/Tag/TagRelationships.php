<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks\AtlasOrm\Blog\Tag;

use Atlas\Mapper\MapperRelationships;

class TagRelationships extends MapperRelationships
{
    protected function define()
    {
        // the "through" relationship that joins post and tags
        $this->oneToMany(
            'posts_tags', 
            \Rotexsoft\PhpOrmBenchmarks\AtlasOrm\Blog\PostsTag\PostsTag::class,
            [
                'tag_id' => 'tag_id',
            ]
        );
        
        // the "foreign" relationship "through" posts_tags
        $this->manyToMany(
            'posts', 
            \Rotexsoft\PhpOrmBenchmarks\AtlasOrm\Blog\Post\Post::class, 
            'posts_tags',
            [
               'post_id' => 'post_id',
            ]
        );
    }
}

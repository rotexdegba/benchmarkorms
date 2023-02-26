<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks\AtlasOrm\Blog\Author;

use Atlas\Mapper\MapperRelationships;
use Rotexsoft\PhpOrmBenchmarks\AtlasOrm\Blog\Post\Post;

class AuthorRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->oneToMany(
          'posts',
          Post::class,
            [
                'author_id' => 'author_id'
            ]
        );
    }
}

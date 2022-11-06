<?php
declare(strict_types=1);

namespace TestAtlasOrm\Db\User;

use Atlas\Mapper\MapperRelationships;

class UserRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->oneToMany('posts_created', \TestAtlasOrm\Db\Post\Post::class, [
            // native (users) column => foreign (posts) column
            'id' => 'creators_userid',
        ]);
        $this->oneToMany('posts_updated', \TestAtlasOrm\Db\Post\Post::class, [
            // native (users) column => foreign (posts) column
            'id' => 'updaters_userid',
        ]);
        $this->oneToMany('comments', \TestAtlasOrm\Db\Comment\Comment::class, [
            // native (users) column => foreign (comments) column
            'id' => 'commenter_id',
        ]);
    }
}

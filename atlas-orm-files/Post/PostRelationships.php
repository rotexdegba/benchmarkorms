<?php
declare(strict_types=1);

namespace TestAtlasOrm\Db\Post;

use Atlas\Mapper\MapperRelationships;

class PostRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->manyToOne('creator', \TestAtlasOrm\Db\User\User::class, [
            // native (posts) column => foreign (users) column
            'creators_userid' => 'id',
        ]);
        $this->manyToOne('last_updater', \TestAtlasOrm\Db\User\User::class, [
            // native (posts) column => foreign (users) column
            'updaters_userid' => 'id',
        ]);
    }
}

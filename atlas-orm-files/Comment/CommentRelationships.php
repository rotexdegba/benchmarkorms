<?php
declare(strict_types=1);

namespace TestAtlasOrm\Db\Comment;

use Atlas\Mapper\MapperRelationships;

class CommentRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->manyToOne('comments', \TestAtlasOrm\Db\User\User::class, [
            // native (comments) column => foreign (users) column
            'commenter_id' => 'id',
        ]);
    }
}

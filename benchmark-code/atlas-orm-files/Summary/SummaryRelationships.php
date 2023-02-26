<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks\AtlasOrm\Blog\Summary;

use Atlas\Mapper\MapperRelationships;

class SummaryRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->manyToOne('post', \Rotexsoft\PhpOrmBenchmarks\AtlasOrm\Blog\Post\Post::CLASS, [ 'post_id' => 'post_id']);
    }
}

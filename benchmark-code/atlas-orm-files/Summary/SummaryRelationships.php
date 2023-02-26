<?php
declare(strict_types=1);

namespace Benchmark\AtlasOrm\Blog\Summary;

use Atlas\Mapper\MapperRelationships;

class SummaryRelationships extends MapperRelationships
{
    protected function define()
    {
        $this->manyToOne('post', \Benchmark\AtlasOrm\Blog\Post\Post::CLASS, [ 'post_id' => 'post_id']);
    }
}

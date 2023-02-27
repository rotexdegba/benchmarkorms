<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks\Eloquent\Blog;

/**
 * Description of Author
 *
 * @author rotimi
 */
class Author extends BaseModel {

    protected $primaryKey = 'author_id';
    
    public function posts() {
        
        return $this->hasMany(Post::class, 'author_id', 'author_id');
    }
}

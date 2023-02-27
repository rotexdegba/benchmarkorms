<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks\Eloquent\Blog;

/**
 * Description of Comment
 *
 * @author rotimi
 */
class Comment extends BaseModel {
    
    protected $primaryKey = 'comment_id';

    public function post(){
        
        return $this->belongsTo(Post::class, 'post_id', 'post_id');
    }
}

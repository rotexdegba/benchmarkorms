<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks\Eloquent\Blog;

/**
 * Description of Summary
 *
 * @author rotimi
 */
class Summary extends BaseModel {
    
    protected $primaryKey = 'summary_id';
    
    public function post(){
        
        return $this->belongsTo(Post::class, 'post_id', 'post_id');
    }
}

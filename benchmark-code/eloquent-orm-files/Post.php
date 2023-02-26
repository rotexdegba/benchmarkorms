<?php
declare(strict_types=1);


namespace Rotexsoft\PhpOrmBenchmarks\Eloquent\Blog;

/**
 * Description of Post
 *
 * @author rotimi
 */
class Post extends BaseModel {
    
    protected $primaryKey = 'post_id';
    
    public function tags() {
        
        return $this->belongsToMany(
            Tag::class, 
            'posts_tags', 
            'post_id', 
            'tag_id'
        );
    }
}

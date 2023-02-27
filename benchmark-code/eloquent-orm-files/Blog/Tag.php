<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks\Eloquent\Blog;

/**
 * Description of Tag
 *
 * @author rotimi
 */
class Tag extends BaseModel {
    
    protected $primaryKey = 'tag_id';
    
    public function posts_tags() {
        
        return $this->hasMany(PostsTag::class, 'tag_id', 'tag_id');
    }
    
    public function posts() {
        
        return $this->belongsToMany(
            Post::class, 
            'posts_tags', 
            'tag_id', 
            'post_id'
        );
    }
}

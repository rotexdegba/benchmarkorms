<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks\Eloquent\Blog;

/**
 * Description of PostsTag
 *
 * @author rotimi
 */
class PostsTag extends BaseModel {
    
    protected $primaryKey = 'posts_tags_id';
    
    public function post(){
        
        return $this->belongsTo(Post::class, 'post_id', 'post_id');
    }
    
    public function tag(){
        
        return $this->belongsTo(Tag::class, 'tag_id', 'tag_id');
    }
}

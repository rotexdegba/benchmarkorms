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
    
    public function author(){
        
        return $this->belongsTo(Author::class, 'author_id', 'author_id');
    }
    
    public function summary() {
        
        return $this->hasOne(Summary::class, 'post_id', 'post_id');
    }
    
    public function comments() {
        
        return $this->hasMany(Comment::class, 'post_id', 'post_id');
    }
    
    public function posts_tags() {
        
        return $this->hasMany(PostsTag::class, 'post_id', 'post_id');
    }
    
    public function tags() {
        
        return $this->belongsToMany(
            Tag::class, 
            'posts_tags', 
            'post_id', 
            'tag_id'
        );
    }
}

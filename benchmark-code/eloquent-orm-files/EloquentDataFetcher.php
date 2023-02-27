<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks\Eloquent;

/**
 * Description of EloquentDataFetcher
 *
 * @author rotimi
 */
class EloquentDataFetcher {
    
    public const TABLE_TO_MODEL_MAP = [
        'authors'       => Blog\Author::class,
        'comments'      => Blog\Comment::class,
        
        'posts'         => Blog\Post::class,
        'posts_tags'    => Blog\PostsTag::class,
        
        'summaries'     => Blog\Summary::class,
        'tags'          => Blog\Tag::class,
    ];

    /**
     * @param string $strategy chunk, get, lazy
     */
    public static function fetchAll(
        string $table_name, array $relation_names, string $strategy='chunk'
    ) {
        \Rotexsoft\PhpOrmBenchmarks\BootstrapEloquent::setup();
        
        /** @var \Illuminate\Database\Eloquent\Model $model_class */
        $model_class = static::TABLE_TO_MODEL_MAP[$table_name];
        
        $result = new \Illuminate\Database\Eloquent\Collection();
        
        if($strategy === 'get') {
            
            return $model_class::with($relation_names)->get();
            
        } elseif($strategy === 'lazy') {
            
            return $model_class::with($relation_names)->lazy();
            
        } else {
            
            // chunk
            $model_class::with($relation_names)->chunk(10_000, function ($records)use($result) {

                foreach ($records as $record) {

                    $result[] = $record;
                }
            });
            
            return $result;
        }
    }
}

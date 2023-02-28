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
    
    public static function fetchAll(
        string $table_name, 
        array $relation_names,
        int $offset = 0,    // only applicable to the get strategy, lazy & chunk don't need it
        int $limit = 999,   //only applicable to the get & chunk strategies, lazy  doesn't need it
        string $strategy='chunk' // chunk, get or lazy
    ) {
        \Rotexsoft\PhpOrmBenchmarks\BootstrapEloquent::setup();
        
        /** @var \Illuminate\Database\Eloquent\Model $model_class */
        $model_class = static::TABLE_TO_MODEL_MAP[$table_name];
        
        $result = new \Illuminate\Database\Eloquent\Collection();
        
        if($strategy === 'get') {
            
            return $model_class::with($relation_names)->offset($offset)->limit($limit)->get();
            
        } elseif($strategy === 'lazy') {
            
            return $model_class::with($relation_names)->lazy();
            
        } else {
            
            // chunk
            $model_class::with($relation_names)->chunk($limit, function ($records)use($result) {

                foreach ($records as $record) {

                    $result[] = $record;
                }
            });
            
            return $result;
        }
    }
}

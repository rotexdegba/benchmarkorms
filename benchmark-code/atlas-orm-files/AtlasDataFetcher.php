<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks\AtlasOrm;

/**
 * Description of AtlasDataFetcher
 *
 * @author rotimi
 */
class AtlasDataFetcher {

    public const TABLE_TO_MODEL_MAP = [
        'authors'       => Blog\Author\Author::class,
        'comments'      => Blog\Comment\Comment::class,
        'posts'         => Blog\Post\Post::class,
        'posts_tags'    => Blog\PostsTag\PostsTag::class,
        'summaries'     => Blog\Summary\Summary::class,
        'tags'          => Blog\Tag\Tag::class,
    ];
    
    public static function fetchAll(
        string $table_name, 
        array $relation_names, 
        \Atlas\Orm\Atlas $atlas,
        int $offset = 0, 
        int $limit = 999,
        string $strategy = 'fetchRecords' // fetchRecords or fetchRecordSet
    ) {
        if( $strategy === 'fetchRecords' ) {
            
            return $atlas->select(static::TABLE_TO_MODEL_MAP[$table_name])
                         ->with($relation_names)
                         ->limit($limit)
                         ->offset($offset)
                         ->fetchRecords();
        
        } else {
        
            // Default: fetchRecordSet
            return $atlas->select(static::TABLE_TO_MODEL_MAP[$table_name])
                         ->with($relation_names)
                         ->limit($limit)
                         ->offset($offset)
                         ->fetchRecordSet();
        }
    }
}

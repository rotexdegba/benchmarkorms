<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks\LeanOrm;

/**
 * Description of LeanOrmDataFetcher
 *
 * @author rotimi
 */
class LeanOrmDataFetcher {

    public const TABLE_TO_MODEL_MAP = [
        'authors'       => Blog\Authors\AuthorsModel::class,
        'comments'      => Blog\Comments\CommentsModel::class,
        
        'posts'         => Blog\Posts\PostsModel::class,
        'posts_tags'    => Blog\PostsTags\PostsTagsModel::class,
        
        'summaries'     => Blog\Summaries\SummariesModel::class,
        'tags'          => Blog\Tags\TagsModel::class,
    ];

    /**
     * @param string $strategy fetchRecordsIntoArray, fetchRecordsIntoCollection, fetchRowsIntoArray
     */
    public static function fetchAll(
        string $table_name, 
        array $relation_names, 
        string $strategy='fetchRecordsIntoCollection', 
        array $pdo_args =[]
    ) {
        $model = static::getModel($table_name, $pdo_args);
        
        if($strategy === 'fetchRowsIntoArray') {
            
            return $model->fetchRowsIntoArray(null, $relation_names);
            
        } elseif($strategy === 'fetchRecordsIntoArray') {
            
            return $model->fetchRecordsIntoArray(null, $relation_names);
            
        } else {
            
            // Default: fetchRecordsIntoCollection
            return $model->fetchRecordsIntoCollection(null, $relation_names);
        }
    }
    
    public static function getModel(string $table_name, array $pdo_args): \LeanOrm\Model {
        
        $model_class_name = static::TABLE_TO_MODEL_MAP[$table_name];
        
        return new $model_class_name(...$pdo_args);
    }
}

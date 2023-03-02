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
        'authors'           => Blog\Authors\AuthorsModel::class,
        'benchmark_results' => Blog\BenchmarksResults\BenchmarksResultsModel::class,
        'comments'          => Blog\Comments\CommentsModel::class,
        'posts'             => Blog\Posts\PostsModel::class,
        'posts_tags'        => Blog\PostsTags\PostsTagsModel::class,
        'summaries'         => Blog\Summaries\SummariesModel::class,
        'tags'              => Blog\Tags\TagsModel::class,
    ];
    
    public static function fetchAll(
        string $table_name, 
        array $relation_names, 
        ?int $offset = 0, 
        ?int $limit = 999,
        string $strategy = LeanOrmFetchStrategies::FETCH_ROWS_INTO_ARRAY, // fetchRecordsIntoArray, fetchRecordsIntoCollection or fetchRowsIntoArray
        array $pdo_args =[]
    ) {
        $model = static::getModel($table_name, $pdo_args);
        
        if($strategy === LeanOrmFetchStrategies::FETCH_ROWS_INTO_ARRAY) {
            
            return is_null($limit) 
                    ? $model->fetchRowsIntoArray(
                        $model->getSelect(), 
                        $relation_names
                    )
                    : $model->fetchRowsIntoArray(
                        $model->getSelect()->offset($offset)->limit($limit), 
                        $relation_names
                    );
            
        } elseif($strategy === LeanOrmFetchStrategies::FETCH_RECORDS_INTO_ARRAY) {
            
            return is_null($limit) 
                    ? $model->fetchRecordsIntoArray(
                        $model->getSelect(), 
                        $relation_names
                    )
                    : $model->fetchRecordsIntoArray(
                        $model->getSelect()->offset($offset)->limit($limit), 
                        $relation_names
                    );
            
        } else {
            
            // Default: fetchRecordsIntoCollection
            
            return is_null($limit) 
                    ? $model->fetchRecordsIntoCollection(
                        $model->getSelect(), 
                        $relation_names
                    )
                    : $model->fetchRecordsIntoCollection(
                        $model->getSelect()->offset($offset)->limit($limit), 
                        $relation_names
                    );
        }
    }
    
    public static function insert(
        string $table_name, 
        array $data,
        array $pdo_args =[]
    ) {
        $model = static::getModel($table_name, $pdo_args);
        $model->createNewRecord($data)->save();
    }
    
    public static function storeBenchmarkResult(
        array $data,
        array $pdo_args =[]
    ) {
        $data['m_timestamp'] = date('Y-m-d H:i:s');
        $data['date_created'] = date('Y-m-d H:i:s');
        
        static::insert('benchmark_results', $data, $pdo_args);
    }
    
    public static function getModel(string $table_name, array $pdo_args): \LeanOrm\Model {
        
        $model_class_name = static::TABLE_TO_MODEL_MAP[$table_name];
        
        return new $model_class_name(...$pdo_args);
    }
}

<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks\LeanOrm;

/**
 * Description of LeanOrmFetchStrategies
 *
 * @author rotimi
 */
final class LeanOrmFetchStrategies {
    
    public const FETCH_ROWS_INTO_ARRAY = 'fetchRowsIntoArray';
    public const FETCH_RECORDS_INTO_ARRAY = 'fetchRecordsIntoArray';
    public const FETCH_RECORDS_INTO_COLLECTION = 'fetchRecordsIntoCollection';
    
    private final function __construct() { }
}

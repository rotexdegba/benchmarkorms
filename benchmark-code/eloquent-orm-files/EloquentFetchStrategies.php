<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks\Eloquent;

/**
 * Description of EloquentFetchStrategies
 *
 * @author rotimi
 */
final class EloquentFetchStrategies {
    
    public const GET = 'get';
    public const LAZY = 'lazy';
    public const CHUNK = 'chunk';
    
    private final function __construct() { }
}

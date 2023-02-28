<?php
declare(strict_types=1);

namespace Rotexsoft\PhpOrmBenchmarks\Ubench;

/**
 * Description of RuntimeMessages
 *
 * @author rotimi
 */
final class MessageResources {
    
    public const START_MSG = "%s fetching data from `%s`"
                            . " with relateds `(%s)` [%s],"
                            . " in chunks of %d using the `%s` strategy."
                            . " \n`%s` for each `%s` record will be accessed.\n";
    
    public const START_MSG_NO_EAGER 
                           = "%s fetching data from `%s`"
                            . " without eager-fetching any related data,"
                            . " in chunks of %d using the `%s` strategy."
                            . " \n`%s` for each `%s` record will be accessed.\n";
    
    public const END_MSG = "\nTotal records fetched from `%s`: %d \n" 
                            . "\nTime taken: %s"
                            . "\nMemory Usage: %s"
                            . "\nPeak Memory Usage: %s" . PHP_EOL. PHP_EOL;
    
    public const HAS_MANY_OR_HMT = 'HasMany or HasManyThrough';
    public const BELONGS_TO_HAS_ONE = 'BelongsTo or HasOne';
    
    public const ORM_VENDOR_ATLAS = 'Atlas';
    public const ORM_VENDOR_ELOQUENT = 'Eloquent';
    public const ORM_VENDOR_LEAN = 'LeanOrm';
    
    public const PACKAGIST_NAME_ATLAS = 'atlas/orm';
    public const PACKAGIST_NAME_ELOQUENT = 'illuminate/database';
    public const PACKAGIST_NAME_LEAN = 'rotexsoft/leanorm';
    
    public const RUNNING_SCENARIO = 'Running Scenario: ';
    public const SCENARIO_ENDED = 'End of Scenario: ';


    private final function __construct() { }
}

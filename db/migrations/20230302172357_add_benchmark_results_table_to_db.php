<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class AddBenchmarkResultsTableToDb extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        // create the table
        $table = $this->table('benchmark_results');
        
        $table->addColumn('orm_vendor', 'string', [ 'limit'=>255, 'null'=>false ])
              ->addColumn('short_desc', 'text', [ 'null'=>false ])
              ->addColumn('strategy', 'text', [ 'null'=>false ])
              ->addColumn('chunk_size', 'integer', [ 'signed' => false, 'null'=>true, 'default'=>null ])
              ->addColumn('execution_duration', 'text', [ 'null'=>false ])
              ->addColumn('memory_used', 'text', [ 'null'=>false ])
              ->addColumn('shell_script_start_time', 'text', [ 'null'=>false ])
              
              ->addColumn('m_timestamp', 'timestamp', [ 'null'=>false, 'default'=>'CURRENT_TIMESTAMP' ] )
              ->addColumn('date_created', 'timestamp', [ 'null'=>false, 'default'=>'CURRENT_TIMESTAMP' ] )
                
              ->addIndex(
                ['orm_vendor'], 
                [
                    'unique' => false,
                    'name' => 'idx_unq_benchmark_results_orm_vendor'
                ]
              )
              ->create();
    }
}

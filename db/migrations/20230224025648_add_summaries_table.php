<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class AddSummariesTable extends AbstractMigration
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
        $table = $this->table('summaries', ['id' => 'summary_id', ]);
        $table->addColumn('post_id', 'integer', ['null' => false])
              ->addColumn('view_count', 'integer', ['null' => false])
              ->addColumn('comment_count', 'integer', ['null' => false])
                
              ->addColumn('m_timestamp', 'timestamp', [ 'null'=>false, 'default'=>'CURRENT_TIMESTAMP' ] )
              ->addColumn('date_created', 'timestamp', [ 'null'=>false, 'default'=>'CURRENT_TIMESTAMP' ] )
                
              ->addIndex(
                ['post_id'], 
                [
                    'unique' => true,
                    'name' => 'idx_unq_summaries_post_id'
                ]
              )
              ->create();
        
        $table->addForeignKey('post_id', 'posts', 'post_id', ['delete'=> 'CASCADE', 'update'=> 'CASCADE'])
              ->save();
        
        if($this->isMigratingUp()) {
            
            $post_id = 1;
            
            // 150 x 333 = 49,950 records.
            for($i=0; $i <= 149; $i++) {
                
                $data = [];
                
                for($j=0; $j <= 332; $j++) {

                    $data[] = [ 
                        'post_id' => $post_id++,
                        'view_count' => random_int(0, 999_999_999),
                        'comment_count' => random_int(0, 999_999),
                    ];
                }

                $table->insert($data)->save();
            }
        }
    }
}

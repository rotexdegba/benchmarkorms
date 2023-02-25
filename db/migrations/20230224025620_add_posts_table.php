<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class AddPostsTable extends AbstractMigration
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
        $table = $this->table('posts', ['id' => 'post_id', 'signed' => true, ]);
        $table->addColumn('author_id', 'integer', ['null' => false])
              ->addColumn('datetime', 'timestamp', [ 'null'=>true, 'default'=>'CURRENT_TIMESTAMP' ] )
              ->addColumn('title', 'string', [ 'limit'=>255, 'null'=>false ] )
              ->addColumn('body', 'text', [ 'null'=>true ] )
                
              ->addColumn('m_timestamp', 'timestamp', [ 'null'=>false, 'default'=>'CURRENT_TIMESTAMP' ] )
              ->addColumn('date_created', 'timestamp', [ 'null'=>false, 'default'=>'CURRENT_TIMESTAMP' ] )
                
              ->addIndex(
                ['title'], 
                [
                    'unique' => true,
                    'name' => 'idx_unq_posts_title'
                ]
              )
              ->create();
        
        $table->addForeignKey('author_id', 'authors', 'author_id', ['delete'=> 'CASCADE', 'update'=> 'CASCADE'])
              ->save();
        
        if($this->isMigratingUp()) {
            
            $faker = \Faker\Factory::create();
            
            // 150 x 333 = 49,950 records.
            for($i=0; $i <= 149; $i++) {
                
                $data = [];
                
                for($j=0; $j <= 332; $j++) {

                    $data[] = [ 
                        'author_id' => random_int(1, 10_000),
                        'title' => $faker->text(200) . "{$i}{$j}",
                        'body' => $faker->text(255) . "{$i}{$j}",
                    ];
                }

                $table->insert($data)->save();
            }
        }
    }
}

<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class AddCommentsTable extends AbstractMigration
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
        $table = $this->table('comments', ['id' => 'comment_id', 'signed' => true, ]);
        $table->addColumn('post_id', 'integer', ['null' => false])
              ->addColumn('datetime', 'timestamp', [ 'null'=>true, 'default'=>'CURRENT_TIMESTAMP' ] )
              ->addColumn('name', 'string', [ 'limit'=>255, 'null'=>false ] )
              ->addColumn('email', 'string', [ 'limit'=>255, 'null'=>false ] )
              ->addColumn('website', 'string', [ 'limit'=>255, 'null'=>false ] )
              ->addColumn('body', 'text', [ 'null'=>true ] )
                
              ->addColumn('m_timestamp', 'timestamp', [ 'null'=>false, 'default'=>'CURRENT_TIMESTAMP' ] )
              ->addColumn('date_created', 'timestamp', [ 'null'=>false, 'default'=>'CURRENT_TIMESTAMP' ] )
                
              ->addIndex(
                ['name'], 
                [
                    'unique' => true,
                    'name' => 'idx_unq_comments_name'
                ]
              )
              ->addIndex(
                ['email'], 
                [
                    'unique' => true,
                    'name' => 'idx_unq_comments_email'
                ]
              )
              ->addIndex(
                ['website'], 
                [
                    'unique' => true,
                    'name' => 'idx_unq_comments_website'
                ]
              )
              ->create();
        
        $table->addForeignKey('post_id', 'posts', 'post_id', ['delete'=> 'CASCADE', 'update'=> 'CASCADE'])
              ->save();
        
        if($this->isMigratingUp()) {
            
            $faker = \Faker\Factory::create();
            
            // 300 x 199 = 59,700 records.
            for($i=0; $i <= 299; $i++) {
                
                $data = [];
                
                for($j=0; $j <= 198; $j++) {
                    
                    $randInt = (($i * $j) + random_int(1, 999_999_999));
                    
                    $data[] = [ 
                        'post_id' => random_int(1, 49_950),
                        'name' => $faker->name() . $randInt,
                        'email' => $faker->email() . $randInt,
                        'website' => $faker->url() . $randInt,
                        'body' => $faker->text(300) . $randInt,
                    ];
                }

                $table->insert($data)->save();
            }
        }
    }
}

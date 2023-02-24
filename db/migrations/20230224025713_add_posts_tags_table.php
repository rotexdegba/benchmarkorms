<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class AddPostsTagsTable extends AbstractMigration
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
        $table = $this->table('posts_tags', ['id' => 'posts_tags_id', ]);
        $table->addColumn('post_id', 'integer', ['null' => false])
              ->addColumn('tag_id', 'integer', ['null' => false])
                
              ->addColumn('m_timestamp', 'timestamp', [ 'null'=>false, 'default'=>'CURRENT_TIMESTAMP' ] )
              ->addColumn('date_created', 'timestamp', [ 'null'=>false, 'default'=>'CURRENT_TIMESTAMP' ] )
              
              ->create();
        
        $table->addForeignKey('post_id', 'posts', 'post_id', ['delete'=> 'CASCADE', 'update'=> 'CASCADE'])
              ->addForeignKey('tag_id', 'tags', 'tag_id', ['delete'=> 'CASCADE', 'update'=> 'CASCADE'])
              ->save();
        
        if($this->isMigratingUp()) {
            
            $post_id_tag_id_map = [];
            
            // 500 x 499 = 249,500‬ records.
            for($i=0; $i <= 499; $i++) {
                
                $data = [];
                
                for($j=0; $j <= 498; $j++) {
                    
                    do{
                        // We want unique (post_id, tag_id) inserted into the db
                        $post_id = random_int(1, 49_950);
                        $tag_id = random_int(1, 10_000);
                        
                    } while(array_key_exists("{$post_id}{$tag_id}", $post_id_tag_id_map));
                    
                    $data[] = [ 
                        'post_id' => $post_id,
                        'tag_id' => $tag_id,
                    ];
                    
                    $post_id_tag_id_map["{$post_id}{$tag_id}"] = "{$post_id}{$tag_id}";
                }

                $table->insert($data)->save();
            }
        }
    }
}

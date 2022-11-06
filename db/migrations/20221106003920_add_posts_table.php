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
    public function change()
    {
        // create the table
        $table = $this->table('posts');
        $table->addColumn('body', 'text', [ 'null'=>false ] )
              ->addColumn('is_approved', 'string', [ 'limit'=>1, 'null'=>false, 'default'=>'0' ] )
              ->addColumn('creators_userid', 'biginteger', [ 'signed'=>false, 'null'=>false ] )
              ->addColumn('updaters_userid', 'biginteger', [ 'signed'=>false, 'null'=>false ] )
                
              ->addColumn('date_created', 'timestamp', [ 'null'=>false, 'default'=>'CURRENT_TIMESTAMP' ] )
              ->addColumn('date_updated', 'timestamp', [ 'null'=>false, 'default'=>'CURRENT_TIMESTAMP' ] )
              
              ->addForeignKey('creators_userid', 'users', 'id', ['delete'=>'CASCADE', 'update'=>'CASCADE'])
              ->addForeignKey('updaters_userid', 'users', 'id', ['delete'=>'CASCADE', 'update'=>'CASCADE'])
                
              ->create();
        
        if($this->isMigratingUp()){
            
            $table->changeColumn('id', 'biginteger', ['identity' => true, 'signed'=>false,]);
            $table->save();
            
            $table->insert([
                        [
                            'body'=>'First Post',
                            'creators_userid'=>1,
                            'updaters_userid'=>1,
                        ],
                        [
                            'body'=>'Second Post',
                            'creators_userid'=>2,
                            'updaters_userid'=>2,
                        ],
                    ])
                  ->save();
        }
    }
}

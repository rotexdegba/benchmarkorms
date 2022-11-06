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
    public function change()
    {
        // create the table
        $table = $this->table('comments');
        $table->addColumn('comment', 'text', [ 'null'=>false ] )
              ->addColumn('is_approved', 'string', [ 'limit'=>1, 'null'=>false, 'default'=>'0' ] )
              ->addColumn('post_id', 'biginteger', [ 'signed'=>false, 'null'=>false ] )
              ->addColumn('commenter_id', 'biginteger', [ 'signed'=>false, 'null'=>false ] )
                
              ->addColumn('date_created', 'timestamp', [ 'null'=>false, 'default'=>'CURRENT_TIMESTAMP' ] )
              ->addColumn('date_updated', 'timestamp', [ 'null'=>false, 'default'=>'CURRENT_TIMESTAMP' ] )
              
              ->addForeignKey('post_id', 'posts', 'id', ['delete'=>'CASCADE', 'update'=>'CASCADE'])
              ->addForeignKey('commenter_id', 'users', 'id', ['delete'=>'CASCADE', 'update'=>'CASCADE'])
                
              ->create();
        
        if($this->isMigratingUp()){
            
            $table->changeColumn('id', 'biginteger', ['identity' => true, 'signed'=>false,]);
            $table->save();
            
            $table->insert([
                        [
                            'comment'=>'First Comment on First Post',
                            'post_id'=>1,
                            'commenter_id'=>1,
                        ],
                        [
                            'comment'=>'First Comment on Second Post',
                            'post_id'=>2,
                            'commenter_id'=>2,
                        ],
                    ])
                  ->save();
        }
    }
}

<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class AddUsersTable extends AbstractMigration
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
        $table = $this->table('users');
        $table->addColumn('username', 'string', [ 'limit'=>254, 'null'=>false ] )
              ->addColumn('password', 'text', [ 'null'=>false ] )
                
              ->addColumn('creators_userid', 'biginteger', [ 'signed'=>false, 'null'=>true ] )
              ->addColumn('updaters_userid', 'biginteger', [ 'signed'=>false, 'null'=>true ] )
                
              ->addColumn('date_created', 'timestamp', [ 'null'=>false, 'default'=>'CURRENT_TIMESTAMP' ] )
              ->addColumn('date_updated', 'timestamp', [ 'null'=>false, 'default'=>'CURRENT_TIMESTAMP' ] )
                
              ->addIndex(
                ['username'], 
                [
                    'unique' => true,
                    'name' => 'idx_unq_users_username'
                ]
              )
                
              ->create();
        
        if($this->isMigratingUp()){
            
            $table->changeColumn('id', 'biginteger', ['identity' => true, 'signed'=>false,]);
            $table->save();
            
            $table->insert([
                        [
                            'username'=>'aadegbam',
                            'password'=>'aadegbam',
                        ]
                    ])
                  ->save();
        }
    }
}

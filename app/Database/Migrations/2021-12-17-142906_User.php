<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addFiled([
            'id' => [
                'type'=> 'INT', 'constrain' => 4,
                'unsigned'=> true,
                'auto_increment'=> true,
            ],
            'username' => [
                'type' => 'VARCHAR', 'constraint' => 50,
                'null' => false,
            ],
            'password' => [
                'type' => 'VARCHAR', 'constraint' => 32,
                'null' => false
            ],
            
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}

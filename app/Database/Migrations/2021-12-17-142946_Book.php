<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Book extends Migration
{
    public function up()
        
    {$this->forge->addFiled([
        'judulbuku' => [
            'type'=> 'INT', 'constrain' => 4,
            'unsigned'=> true,
            'auto_increment'=> true,
        ],
        'pengarang' => [
            'type' => 'VARCHAR', 'constraint' => 50,
            'null' => false,
        ],
        'tahunterbit' => [
            'type' => 'VARCHAR', 'constraint' => 32,
            'null' => false
        ],
        
    ]);
    $this->forge->addKey('judulbuku', true);
    $this->forge->createTable('book');
        
    }

    public function down()
    {
        $this->forge->dropTable('book');
    }
}

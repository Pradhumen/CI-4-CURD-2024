<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Categories extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'status'=>[
                'type'=>'ENUM',
                'constraint'=>['ACTIVE','INACTIVE'],
                'default'=>'ACTIVE',
                'null'=>true
            ],
            'create_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
        ]);

        // Add Primary key
        $this->forge->addKey('id', true);  

        // Create table
        $this->forge->createTable('categories'); 
    }

    public function down()
    {
        // Drop the categories table
        $this->forge->dropTable('categories');
    }
}

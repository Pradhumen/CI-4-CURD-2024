<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCategoriesTable extends Migration
{
    public function up()
{
    $this->forge->addField([
        'id' => [
            'type' => 'INT',
            'auto_increment' => true,
        ],
        'category_name' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
        ],
        'status' => [
            'type' => 'ENUM',
            'constraint' => ['Active', 'Inactive'],
            'default' => 'Active',
        ],
        'created_at' => ['type' => 'DATETIME', 'null' => true],
        'updated_at' => ['type' => 'DATETIME', 'null' => true],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('categories');
}

public function down()
{
    $this->forge->dropTable('categories');
}

}
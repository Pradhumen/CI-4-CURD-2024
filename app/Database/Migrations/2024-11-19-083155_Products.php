<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Products extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
                'type'=>'INT',
                'constraint'=>'5',
                'unsigned'=>true,
                'auto_increment'=>true
            ],
            'category_id'=>[
                'type'=>'INT',
                'constraint'=>'5',
                'unsigned'=>true
            ],
            'name'=>[
                'type'=>'VARCHAR',
                'constraint'=>'255',
                'null'=>true
            ],
            'status'=>[
                'type'=>'ENUM',
                'constraint'=>['ACTIVE','INACTIVE'],
                'default'=>'ACTIVE',
                'null'=>true
            ],
            'image'=>[
                'type'=>'VARCHAR',
                'constraint'=>'255',
                'null'=>true
            ],
            'created_at'=>[
                'type'=>'DATETIME',
                'null'=>true
            ],
            'updated_at'=>[
                'type'=>'DATETIME',
                'null'=>true
            ]

        ]);

        
        // add primary key
        $this->forge->addKey('id',true);
        
        // add foreign key 
        $this->forge->addForeignKey('category_id','categories','id','CASCADE','CASCADE');

        // create table
        $this->forge->createTable('products');
    }

    public function down()
    {
        $this->forge->dropTable('products');
    }
}

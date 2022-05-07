<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $fields = [
            'id' => [
                'type' => 'INT',
                'constraint' => '11',
                'auto_increment' => true,
                'unsigned' => true,
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => false
            ],
            'firstname' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => false
            ],
            'lastname' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => false
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false
            ],
            'gender' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
                'null' => false
            ],
            'telephone' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => false
            ],
            'address' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
                'null' => false
            ],
            'dob' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '60',
                'null' => false
            ],
            'created_at datetime default CURRENT_TIMESTAMP',
            'updated_at datetime default CURRENT_TIMESTAMP',
            'deleted_at datetime'
        ];
        $this->forge->addField($fields);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $fields = [
            'id' => [
                'primary_key' => true,
                'auto_increment' => true,
                ''
            ],
            'created_at datetime default CURRENT_TIMESTAMP',
            'deleted_at datetime default CURRENT_TIMESTAMP'
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

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

use function PHPSTORM_META\type;

class Session extends Migration
{
    public function up()
    {
        $field = [
            'session_id' => [
                'type' => 'INT',
                'constraint' => '11',
                'auto_increment' => true,
                'unsigned' => true,
            ],
            'user_id' => [
                'type' => 'INT',
                'unsigned' => true
            ],
            'session_type' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
                'null' => false
            ],
            'session_trainer' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
                'null' => false
            ],
            'session_time' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => false
            ],
            'session_date' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => false
            ],
            'created_at datetime default CURRENT_TIMESTAMP',
            'updated_at datetime default CURRENT_TIMESTAMP',
            'deleted_at datetime'
        ];
        $this->forge->addField($field);
        $this->forge->addPrimaryKey('session_id', true);
        $this->forge->addForeignKey('user_id', 'user', 'id', 'CASCADE');
        $this->forge->createTable('session');
    }

    public function down()
    {
        $this->forge->dropTable('session');
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Project extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'project_id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'cname'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'cemail' => [
                'type' => 'VARCHAR',
                'constraint' => '30'
            ],
            'cphone' => [
                'type' => 'INT',
                'constraint' => 12,
            ],
            'site' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
        ]);
        $this->forge->addKey('project_id', true);
        $this->forge->createTable('project');
    }
    

    public function down()
    {
        $this->forge->dropTable('project');
    }
}

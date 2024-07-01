<?php

namespace App\Database\Migrations;

class AddGrupos extends \CodeIgniter\Database\Migration
{

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'INT',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],
                        'descripcion'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '50',
                        ],                        
                        'created_at'       => [
                                'type'           => 'DATETIME',
                                // 'default'        => 'current_timestamp()',
                        ],
                        'updated_at'       => [
                                'type'           => 'DATETIME',
                                // 'default'        => 'current_timestamp()',
                        ]
                ]);
                $this->forge->addKey('id', TRUE);
                $this->forge->createTable('grupos');
        }

        public function down()
        {
                $this->forge->dropTable('grupos');
        }
}

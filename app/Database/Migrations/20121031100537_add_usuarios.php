<?php

namespace App\Database\Migrations;

class AddUsuarios extends \CodeIgniter\Database\Migration
{

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'INT',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],
                        'nombre'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '50',
                        ],
                        'usuario'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '50',
                        ],
                        'grupo_id'       => [
                                'type'           => 'INT',
                                'constraint'     => '50',
                        ],
                        'password'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '255',
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
                $this->forge->addForeignKey('grupo_id', 'grupos', 'id');
                $this->forge->createTable('usuarios');
        }

        public function down()
        {
                $this->forge->dropTable('usuarios');
        }
}

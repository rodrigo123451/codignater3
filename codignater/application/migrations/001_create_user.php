<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_user extends CI_Migration {

//----lo que se va a ejecutar, crear --
        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 10,
                                //no numeros negativos
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'nombre_usuario' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'correro' => array(
                                'type' => 'VARCHAR',
                                'constraint'=>'100',
                                'null' => TRUE,
                        ),
                        'contrasena' => array(
                                'type' => 'VARCHAR',
                                'constraint'=>'100',
                                'null' => TRUE,
                        ),
                        'status' => array(
                                'type' => 'TINYINT',
                                'constraint'=>'1',
                                'null' => TRUE,
                        ),
                        'range' => array(
                                'type' => 'TINYINT',
                                'constraint'=>'1',
                                'null' => TRUE,
                        ),
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('Usuarios');
        }
//----lo que se va a eliminar..--
        public function down()
        {
                $this->dbforge->drop_table('Usuarios');
        }
}
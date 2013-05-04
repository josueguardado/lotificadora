<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_create_usuarios extends CI_Migration {

	public function __construct()
	{
		$this->load->dbforge();
		//$this->load->database();
	}

	public function up()
	{

		/**
		*
		* Campos de la tabla usuarios
		*
		**/
		
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 2,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'nombre' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'apellidos' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'clave' => array(
				'type' => 'VARCHAR',
				'constraint' => '128',
			),
			'telefono' => array(
				'type' => 'VARCHAR',
				'constraint' => '9',
			),
			'email' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'cargo' => array(
				'type' => 'INT',
				'constraint' => '2',
				'unsigned' => TRUE
			),			
			'activo' => array(
				'type' => 'INT',
				'constraint' => '1',
				'unsigned' => TRUE
			)
			
		));

		$this->dbforge->add_key('id');
		$this->dbforge->create_table('usuarios');

		/**
		*
		* Campos de la tabla cargos
		*
		**/
		

		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 2,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'nombreCargo' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			)
			
		));
		$this->dbforge->add_key('id');
		$this->dbforge->create_table('cargos');
		
		// Agregando llave foranea de usuarios a cargos
		$this->db->query('ALTER TABLE `usuarios` ADD FOREIGN KEY(`cargo`) REFERENCES cargos(`id`) ON DELETE CASCADE ON UPDATE CASCADE;');  

		//Valores por defecto tabla cargos
		$data = array(
			array(
				'id' => NULL ,
				'nombreCargo' => 'Administrador'			
			),
			array(
				'id' => NULL ,
				'nombreCargo' => 'Digitador'			
			),
			array(
				'id' => NULL ,
				'nombreCargo' => 'Developer'			
			)
		);
		$this->db->insert_batch('cargos', $data);

		//usuario admin por defecto

		$data=array(
			'id'=>NULL,
			'nombre'=>'Josue',
			'apellidos'=>'Guardado',
			'clave'=>'4d186321c1a7f0f354b297e8914ab240',
			'telefono'=>'72354512',
			'email'=>'j@gmail.com',
			'cargo'=>1,
			'activo'=>1
		);

		$this->db->insert('usuarios', $data);
	}

	public function down()
	{
		$this->dbforge->drop_table('usuarios');
		$this->dbforge->drop_table('cargos');
	}

	
}

/* End of file 001_usuarios.php */
/* Location: ./application/migrations/001_usuarios.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_usuario extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}


	public function doLogin($datos)
	{

		/**
		*
		* get_where . recibe los parametros enviados desde el form login, los recoge el controlador usuario/login
		*
		**/
		
		$query = $this->db->get_where('usuarios', $datos,1);
		
		if ($query->num_rows()>0) {
			$resp=1;
			$resultado=$query->row();
			//datos para la session
			$datos=array(
			'numrow'=>$query->num_rows(),
			'idusuario'=>$resultado->id,
			'nombreusuario'=>$resultado->nombre,
			'nickusuario'=>$resultado->email,
			'loggedin'=>TRUE
						);
			$this->session->set_userdata($datos);
			
		}


	}

	public function logout ()
	{
		$this->session->sess_destroy();
	}

	public function logeado ()
	{
		return $this->session->userdata('loggedin');
	}


	/**
	*
	* OPERACIONES CRUD
	*
	**/

	public function registrar($datos, $id=0)
	{
		if ($id==0) {
			$this->db->insert('usuarios', $datos);
		}else{
			$this->db->update('usuarios', $datos, "id = $id");
		}
		
		return $this->db->affected_rows();
	}

	public function get1($id){

		$this->db->where('id', $id);
		return $this->db->get('usuarios',1)->row();

	}

	public function listado()
	{
		$this->db->join('cargos', 'cargos.id=usuarios.cargo');
		$this->db->select('usuarios.id, apellidos, nombre,email,cargos.nombreCargo,activo');
		return $this->db->get('usuarios')->result();
	}
	

	

}

/* End of file m_usuario.php */
/* Location: ./application/models/m_usuario.php */
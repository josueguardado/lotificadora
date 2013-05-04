<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_usuario');
	}


	public function index()
	{
		

		if ($this->m_usuario->logeado()) {
			$datos=array(
				'titulo'=> 'Inicio - '.$this->config->item('NombreApp')
				);
			$this->load->view('templates/site_header',$datos);
			$this->load->view('templates/site_sidebar');
			$this->load->view('templates/site_nav');
			$this->load->view('home/home');
			$this->load->view('templates/site_footer');

		}else{
			redirect('usuario/login');
		}

		

		
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
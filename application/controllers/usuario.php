<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('m_usuario');
		
	}

	public function index()
	{

		if($this->m_usuario->logeado())
			{
				redirect('home');
			}else{
				$this->login();
			}
	}

	public function perfil()
	{
		if ($this->m_usuario->logeado()) {
			$datos=array(
				'titulo'=> 'Perfil - '.$this->config->item('NombreApp')
				);
			$this->load->view('templates/site_header',$datos);
			$this->load->view('templates/site_sidebar');
			$this->load->view('templates/site_nav');
			$this->load->view('usuario/perfil');
			$this->load->view('templates/site_footer');

		}else{
			redirect('usuario/login');
		}

	}


	public function login()
	{

		if($this->m_usuario->logeado())
			{
				redirect('home');
			}
		//validacion de los campos
		$validaciones = array(
               array(
                     'field'   => 'email',
                     'label'   => 'Email',
                     'rules'   => 'required|valid_email|xss_clean'
                  ),
               array(
                     'field'   => 'clave',
                     'label'   => 'Clave',
                     'rules'   => 'required'
                  )
            );

		$this->form_validation->set_rules($validaciones);

		if ($this->form_validation->run() == FALSE)
		{
			$datos=array(
				'titulo'=> 'Login - '.$this->config->item('NombreApp')
				);
			$this->load->view('templates/site_header',$datos);
		    $this->load->view('login');
		} else{

			//captura los datos del formulario enviados por post
			$datoslogin = array(
			'email' => $this->input->post('email'),
			'clave' => md5($this->input->post('clave')),
			'activo'=>1
			);
			//accedemos al metodo doLogin y le pasamos los datos capturados. m_usuario es el modelo
			$this->m_usuario->doLogin($datoslogin);

			//comprobamos que el login sea exitoso y redireccionamos a la pagina home, en caso de fallar mostramos el formulario de login.
			if($this->m_usuario->logeado())
			{
				redirect('home');
			}else{
				$datos=array(
				'titulo'=> 'Login - '.$this->config->item('NombreApp')
				);
				$this->load->view('templates/site_header',$datos);
		        $this->load->view('login');
	        }
        }

	}

	public function logout()
	{
		$this->m_usuario->logout();
		$this->login();
	}

	/**********************************************************************
	* 
	* CRUD USUARIOS
	*
	************************************************************************/

	public function registrar($id=NULL)
	{
		//validacion de los campos
		//nombre=&apellidos=&telefono=&cargo=0&email=j%40gmail.com&clave=hola
		if ($id==NULL) {			
			$validaciones = array(
	               array('field'   => 'nombre','label'   => 'Nombre','rules'   => 'required'),
	               array('field'   => 'apellidos','label'   => 'Apellidos','rules'   => 'required'),
	               array('field'   => 'clave','label'   => 'Clave','rules'   => 'required|min_length[8]'),
	               array('field'   => 'telefono','label'   => 'Telefono','rules'   => 'required|numeric'),
	               array('field'   => 'cargo','label'   => 'Cargo','rules'   => 'required|numeric|greater_than[0]'),
	               array('field'   => 'email','label'   => 'Email','rules'   => 'required|valid_email|xss_clean')
	        );

	        $this->form_validation->set_rules($validaciones);

			if ($this->form_validation->run() == FALSE)
			{
				$datos=array(
					'titulo'=> 'Perfil - '.$this->config->item('NombreApp')
					);


				//$resultado['usuario']=NULL;
				$this->load->view('templates/site_header',$datos);
				$this->load->view('templates/site_sidebar');
				$this->load->view('templates/site_nav');
				$this->load->view('usuario/perfil');
				$this->load->view('templates/site_footer');
			} else{
				//Si la validacion esta correcta envio los datos al modelo
				
				$datos= array(
					'id'=> 'NULL',
					'nombre'=>$this->input->post('nombre'),
					'apellidos'=>$this->input->post('apellidos'),
					'clave'=>md5($this->input->post('clave')),
					'telefono'=>$this->input->post('telefono'),
					'email'=>$this->input->post('email'),
					'cargo'=>$this->input->post('cargo'),
					'activo'=>1
					);


				 if($this->m_usuario->registrar($datos)) //si es exitoso el registro enviamos al usuario al listado general
				 {
				 	$this->listado();
				 }else{
				 	$this->registrar(); //si el registro falla lo mandamos al formulario nuevamente
				 }
			}
		}else{
			$validaciones = array(
	               array('field'   => 'nombre','label'   => 'Nombre','rules'   => 'required'),
	               array('field'   => 'apellidos','label'   => 'Apellidos','rules'   => 'required'),
	               array('field'   => 'telefono','label'   => 'Telefono','rules'   => 'required|numeric'),	               
	               array('field'   => 'email','label'   => 'Email','rules'   => 'required|valid_email|xss_clean')
	        );

         	$this->form_validation->set_rules($validaciones);

			if ($this->form_validation->run() == FALSE)
			{
				$this->modificar($id,24);
				
			}else{
				$datos= array(
					
					'nombre'=>$this->input->post('nombre'),
					'apellidos'=>$this->input->post('apellidos'),					
					'telefono'=>$this->input->post('telefono'),
					'email'=>$this->input->post('email')
					
					);

				 $this->m_usuario->registrar($datos,$id); //si es exitoso el registro enviamos al usuario al listado general
				 $this->listado();
				 
			}

		}

		

	}//registro

	public function listado()
	{
		//consultado a la base de datos
		$resultado['usuarios']=$this->m_usuario->listado();
		$datos=array('titulo'=> 'Listado general - '.$this->config->item('NombreApp'));
		$this->load->view('templates/site_header',$datos);
		$this->load->view('templates/site_sidebar');
		$this->load->view('templates/site_nav');
		$this->load->view('usuario/listado',$resultado);
		$this->load->view('templates/site_footer');
		// echo "<pre>";
		// print_r($resultado);
	}//listado general

	public function modificar($id,$key=NULL)
	{
		$resultado['usuario']=$this->m_usuario->get1($id);
		$resultado['key']=$key;
		$datos=array(
				'titulo'=> 'Perfil - '.$this->config->item('NombreApp')
				);
			$this->load->view('templates/site_header',$datos);
			$this->load->view('templates/site_sidebar');
			$this->load->view('templates/site_nav');
			$this->load->view('usuario/perfil',$resultado);
			$this->load->view('templates/site_footer');
	}
	

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */


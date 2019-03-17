<?php 
	class Users extends CI_Controller{

		//Registro del Usuario ingresado
		public function register(){

			$data['titulo'] = 'Crear Usuario';

			// Se validan que los siguientes campos del "formulario de registro de usuario" se hayan completado.
			$this->form_validation->set_rules('name','Nombre','required');

			//Validamos que el campo "Usuario" haya sido completado, y también llamamos a la función "check_username_exists" que definimos mas abajo.
			$this->form_validation->set_rules('email','Email','required|callback_check_email_exists');
			$this->form_validation->set_rules('username','Usuario','required|callback_check_username_exists');
			$this->form_validation->set_rules('password','Contraseña','required');

			//Comprueba de que la "confirmación de contraseña" coincida con dicha "contraseña".
			$this->form_validation->set_rules('password2','Confirmación de Contraseña','matches[password]');


			if($this->form_validation->run() === FALSE){
				$this->load->view('partes_actualidad/header', $data);
				$this->load->view('partes_actualidad/menu');
				$this->load->view('users/register', $data);
				$this->load->view('partes_actualidad/footer_admin');

			}else{
				//Encriptamos la contraseña
				$enc_password = md5($this->input->post('password'));

				$this->user_model->register($enc_password);

				//Set message
				$this->session->set_flashdata('user_registered','El Usuario fue registrado exitosamente');

				redirect('posts');
			}

		}


		//Inicio de Sesión del Usuario
		public function login(){

			$data['titulo'] = 'Inicio de Sesión';

			// Se validan que los siguientes campos del "formulario de registro de usuario" se hayan completado.

			//Validamos que el campo "Usuario" haya sido completado, y también llamamos a la función "check_username_exists" que definimos mas abajo.
			$this->form_validation->set_rules('username','Usuario','required');
			$this->form_validation->set_rules('password','Contraseña','required');



			if($this->form_validation->run() === FALSE){
				$this->load->view('partes_actualidad/header', $data);
				$this->load->view('partes_actualidad/menu');
				$this->load->view('users/login', $data);
				$this->load->view('partes_actualidad/footer_admin');

			}else{
				//Obtenemos el Nombre de Usuario
				$username = $this->input->post('username');

				//Obtenemos y encriptamos la contraseña
				$password = md5($this->input->post('password'));

				// Usuario de Inicio de Sesión
				$user_id = $this->user_model->login($username, $password);

				if($user_id){
					//Crear Sesión
					//Asignamos los datos del usuario loggeado, a una variable para manejar su sesión.
					$user_data = array(
						'user_id' => $user_id,
						'username' => $username,
						//Con este valor podemos verificar si el usuario esta realmente conectado.
						'logged_in' => true
					);

					//Almacenamos los datos del usuario, para que podamos acceder a cualquiera de ellos cuando queremos.
					$this->session->set_userdata($user_data);

					//Set message
					$this->session->set_flashdata('user_loggedin','Usted ha iniciado sesión');

					redirect('posts');
				}else{

					//Set message
					$this->session->set_flashdata('login_failed','El Usuario y/o contraseña son incorrectos');

					redirect('users/login');

				}

			}

		}

		//Cierre de Sesión de Usuario
		public function logout(){
			//Eliminación de Datos de la Sesión del usuario.
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('username');


			//Set message
			$this->session->set_flashdata('user_loggedout','Usted ha cerrado sesión');

			redirect('users/login');

		}


		//Verificamos si el usuario ya existe.
		public function check_username_exists($username){

			//Mensaje que se mostrara en caso de que el Usuario que se intenta registrar, ya exista.
			$this->form_validation->set_message('check_username_exists', 'El usuario ingresado ya existe. Por favor ingrese uno diferente.');

			// Invocamos a la función "check_username_exists" del modelo "user_model", la cual realizara la verificación de que si el usuario ingresado, ya existe.
			//Si el usuario ya existe, esta función retornara "True", en caso contrario retornara "False"
			if($this->user_model->check_username_exists($username)){
				return true;
			}else{
				return false;
			}

		}


		//Verificamos si el email ya existe.
		public function check_email_exists($email){

			//Mensaje que se mostrara en caso de que el Email que se intenta registrar, ya exista.
			$this->form_validation->set_message('check_email_exists', 'El email ingresado ya existe. Por favor ingrese uno diferente.');

			// Invocamos a la función "check_email_exists" del modelo "user_model", la cual realizara la verificación de que si el email ingresado, ya existe.
			//Si el usuario ya existe, esta función retornara "True", en caso contrario retornara "False"
			if($this->user_model->check_email_exists($email)){
				return true;
			}else{
				return false;
			}

		}
	}
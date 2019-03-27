<?php 
	class User_model extends CI_Model{

		public function register($enc_password){

			//User data array
			// Asignamos los valores obtenidos del método "Post" del formulario de "Registro de Usuario", a un arreglo.
			$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'username' => $this->input->post('username'),
				'password' => $enc_password,
				'zipcode' => $this->input->post('zipcode'),
			);

			//Realizamos la consulta "insert" del nuevo usuario en la tabla users.
			return $this->db->insert('users',$data);

		}

		//Función para Iniciar Sesión
		public function login($username, $password){
			//validación
			// Buscamos el username que coincide con el username que obtenemos como parámetro de esta función.
			$this->db->where('username', $username);

			// Buscamos la contraseña que coincide con la contraseña que obtenemos como parámetro de esta función.
			$this->db->where('password', $password);

			//Con las verificaciones de arriba, verificamos si esos datos pertenecen a un usuario ya existente.
			$result = $this->db->get('users');

			//Si el número de filas obtenidas de la consulta sobre la tabla de "users" es exactamente 1, quiere decir que usuario existe en la Base de Datos, y retornamos el "id" de dicho usuario.
			//De lo contrario retornamos false.
			if($result->num_rows() == 1){
				return $result->row(0)->id;
			
			}else{
				return false;

			}
		}



		//Verificamos la existencia del usuario ingresado.
		public function check_username_exists($username){

			//Obtenemos de la Base de Datos los usuarios cuyos username coincide con el parámetro de esta función. Encapsulamos los resultados en un arraglo.
			$query = $this->db->get_where('users', array('username' => $username));

			//Verificamos si el arreglo de arriba está "vacío" o si no lo está. Si está vacio nuestra función retornará "True", si el arreglo no está vacio nuestra función retornará "False".
			if(empty($query->row_array())){
				return true;
			}else{
				return false;
			}

		}


		//Verificamos la existencia del email ingresado.
		public function check_email_exists($email){

			//Obtenemos de la Base de Datos los usuarios cuyos email coincide con el parámetro de esta función. Encapsulamos los resultados en un arraglo.
			$query = $this->db->get_where('users', array('email' => $email));

			//Verificamos si el arreglo de arriba está "vacío" o si no lo está. Si está vacio nuestra función retornará "True", si el arreglo no está vacio nuestra función retornará "False".
			if(empty($query->row_array())){
				return true;
			}else{
				return false;
			}

		}

	}

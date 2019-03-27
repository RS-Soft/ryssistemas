<?php 
	class Posts extends CI_Controller{
		public function index($offset = 0){
			// Configuración de paginación
			//Indicamos que la paginación iniciará en la página "posts/index".
			$config['base_url'] = base_url().'posts/index/';

			//el total de filas va a ser igual a la cantidad de registros en la tabla "Posts".
			$config['total_rows'] = $this->db->count_all('posts');

			//indicamos las cantidad de posts que queremos visualizar en cada página.
			$config['per_page'] = 3;

			//indicamos las cantidad de segmentos que vamos a utilizar en la dirección de la página "Post".
			//Ejemplo: en "localhost/ryssistemas/categories/posts/1/" tenemos -> sección1 (/categories/), sección2 (/posts/), sección3 (/1/) .
			$config['uri_segment'] = 3;

			$config['attributes'] = array('class' => 'pagination-links');

			//Iniciar paginación
			$this->pagination->initialize($config);



			$data['titulo'] = 'Últimas Noticias';

			$data['posts'] = $this->post_model->get_posts(FALSE, $config['per_page'], $offset);


			// EL MENU DEBE LLAMARSE ANTES QUE EL INDEX
			$this->load->view('partes_actualidad/header', $data);
			$this->load->view('partes_actualidad/menu');
			$this->load->view('posts/index', $data);
			$this->load->view('partes_actualidad/footer');
		}

		public function view($slug = NULL){
			$data['post'] = $this->post_model->get_posts($slug);

			$post_id = $data['post']['id'];
			$data['comments'] = $this->comment_model->get_comments($post_id);

			if(empty($data['post'])){
				show_404();
			}

			$data['titulo'] = $data['post']['titulo'];

			// EL MENU DEBE LLAMARSE ANTES QUE EL VIEW
			$this->load->view('partes_actualidad/header', $data);
			$this->load->view('partes_actualidad/menu');
			$this->load->view('posts/view', $data);
			$this->load->view('partes_actualidad/footer_admin');

		}

		public function create(){
			//Verificamos si el usuario está conectado, si no está conectado lo redirecciona a la pagina de login.
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			//Asignamos el nombre de titulo "Create Post", para la página de creación de post.
			$data['titulo'] = 'Creación de la Noticia';

			//Obtiene las categorias como resultado de la invocación de la función "get_categories" del modelo "post_model"
			$data['categories'] = $this->post_model->get_categories();

			//Reglas de Validacion de las partes del Post
			$this->form_validation->set_rules('titulo', 'Titulo', 'required');
			$this->form_validation->set_rules('body', 'Descripción', 'required');


			//Verifica si se ha ejecutado la validación
			if($this->form_validation->run() === FALSE){

				// EL MENU DEBE LLAMARSE ANTES QUE EL CREATE
				$this->load->view('partes_actualidad/header', $data);
				$this->load->view('partes_actualidad/menu');
				$this->load->view('posts/create', $data);
				$this->load->view('partes_actualidad/footer_admin');
			
			}else{

				//si se ejecuto la validacion, entonces llamamos a la funcion "create_post" del modelo "post_model"
				//el modelo realiza el insert en la Base de Datos y luego nos redirecciona a "posts"

				//Cargar Imagen
				//lugar donde se encuentrar las imagenes que se van a subir
				$config['upload_path'] = './assets/img/posts';
				//Se realiza un filtrado, para mostrar solo los archivos de tipos: .gif, .jpg, .png
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['max_width'] = '2000';
				$config['max_height'] = '2000';

				//llama a la función libreria y le pasa los parametros establecidos arriba.
				$this->load->library('upload', $config);

				if(!$this->upload->do_upload()){
					$errors = array('error' => $this->upload->display_errors());

					// Se asigna una imagen por defecto, si el usuario no carga alguna imagen
					$post_image = 'noimage.jpg';
				}else{

					$data = array('upload_data' => $this->upload->data());

					//Obtiene la imagen cargada por el usuario y su nombre, y se la asigna a la variable "$post_image".
					
					// Dentro de los corchetes debe ir si o si el nombre "userfile", lo mismo
					//para el input del formulario de la vista "create" (el input que envia la imagen)
					$post_image = $_FILES['userfile']['name'];

				}

				$this->post_model->create_post($post_image);

				//Set message
				$this->session->set_flashdata('post_created','Su publicación ha sido registrada exitosamente');

				redirect('posts');

			}

			

		}


		//Funcion "delete" que recibe el "ID" del post que se desea eliminar, y invoca a la funcion delete_post de Post_model, con el parámetro "ID".
		//Luego redirecciona a la página posts/index
		public function delete($id){
			//Verificamos si el usuario está conectado, si no está conectado lo redirecciona a la pagina de login.
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$this->post_model->delete_post($id);

			//Set message
				$this->session->set_flashdata('post_deleted','Su publicación ha sido eliminada exitosamente');

			redirect('posts');

		}

		//La función "edit" llama a la página "posts/edit" para realizar la edición del Post deseado.
		public function edit($slug){
			//Verificamos si el usuario está conectado, si no está conectado lo redirecciona a la pagina de login.
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['post'] = $this->post_model->get_posts($slug);

			//Verificación de Usuario
			if($this->session->userdata('user_id') != $this->post_model->get_posts($slug)['user_id']){
				redirect('posts');

			}

			//Obtiene las categorias como resultado de la invocación de la función "get_categories" del modelo "post_model"
			$data['categories'] = $this->post_model->get_categories();

			if(empty($data['post'])){
				show_404();
			}

			$data['titulo'] = 'Modificación de la Noticia';

			// EL MENU DEBE LLAMARSE ANTES QUE EL EDIT
			$this->load->view('partes_actualidad/header', $data);
			$this->load->view('partes_actualidad/menu');
			$this->load->view('posts/edit', $data);
			$this->load->view('partes_actualidad/footer_admin');

		}

		//La función "update", invoca a la función "update_post" del modelo "post_model", para realizar la correspondiente consulta "update" a la Base de Datos
		public function update(){
			//Verificamos si el usuario está conectado, si no está conectado lo redirecciona a la pagina de login.
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}


			//Cargar Imagen
				//lugar donde se encuentrar las imagenes que se van a subir
				$config['upload_path'] = './assets/img/posts';
				//Se realiza un filtrado, para mostrar solo los archivos de tipos: .gif, .jpg, .png
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['max_width'] = '2000';
				$config['max_height'] = '2000';

				//llama a la función libreria y le pasa los parametros establecidos arriba.
				$this->load->library('upload', $config);

				if(!$this->upload->do_upload()){
					$errors = array('error' => $this->upload->display_errors());

					// Se asigna una imagen por defecto, si el usuario no carga alguna imagen
					$post_image = 'noimage.jpg';
				}else{

					$data = array('upload_data' => $this->upload->data());

					//Obtiene la imagen cargada por el usuario y su nombre, y se la asigna a la variable "$post_image".
					
					// Dentro de los corchetes debe ir si o si el nombre "userfile", lo mismo
					//para el input del formulario de la vista "create" (el input que envia la imagen)
					$post_image = $_FILES['userfile']['name'];

				}

				$this->post_model->update_post($post_image);

				//Set message
				$this->session->set_flashdata('post_updated','Su publicación ha sido actualizada exitosamente');

				redirect('posts');
		}

		//La función "edit" llama a la página "posts/edit" para realizar la edición del Post deseado.
		public function buscador(){

			//obtiene el valor del input "del formulario del buscador", y se lo asigna a la variable "$nombre_post"
			$nombre_post = $this->input->post('nombre_post');

			//invoca a la función "post_model" y le pasa la variable "$nombre_post" como parámetro,
			//el valor obtenido del modelo, lo asignamos al arreglo "$data['posts']"
			$data['posts'] = $this->post_model->buscador_posts($nombre_post);

			//print_r($data['posts']);

			//Agregamos el titulo de la página que visualizará las noticias buscadas
			$data['titulo'] = 'Resultados de la busqueda: " '.$nombre_post.' "';

			$data['text_search'] = $nombre_post;

			// EL MENU DEBE LLAMARSE ANTES QUE EL EDIT
			$this->load->view('partes_actualidad/header', $data);
			$this->load->view('partes_actualidad/menu');
			$this->load->view('posts/buscador', $data);
			$this->load->view('partes_actualidad/footer_admin');

		}

	}




?>
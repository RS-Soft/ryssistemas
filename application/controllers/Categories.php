<?php 
	class Categories extends CI_Controller{

		public function index(){

			$data['titulo'] = 'Lista de Categorias';

			$data['categories'] = $this->category_model->get_categories();

			$this->load->view('partes_actualidad/header', $data);
			$this->load->view('partes_actualidad/menu');
			$this->load->view('categories/index', $data);
			$this->load->view('partes_actualidad/footer_admin');
		}



		public function create(){
			//Verificamos si el usuario está conectado, si no está conectado lo redirecciona a la pagina de login.
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			

			$data['titulo'] = 'Crear Categoria';

			$this->form_validation->set_rules('name','Nombre', 'required');

			if($this->form_validation->run() === FALSE){

				$this->load->view('partes_actualidad/header', $data);
				$this->load->view('partes_actualidad/menu');
				$this->load->view('categories/create', $data);
				$this->load->view('partes_actualidad/footer_admin');

			}else{
				
				$this->category_model->create_category();

				//Set message
				$this->session->set_flashdata('category_created','Su categoria ha sido registrada exitosamente');

				redirect('categories');

			}

		}

		public function posts($id){

			//Asigna como "titulo" al nombre obtenido de la función get_category del modelo "category_model"
			$data['titulo'] = $this->category_model->get_category($id)->name;

			//Obtiene los posts correspondientes a la categoria seleccionada, mediante la función "get_posts_by_category" del modelo "post_model" 
			$data['posts'] = $this->post_model->get_posts_by_category($id);

			$this->load->view('partes_actualidad/header', $data);
			$this->load->view('partes_actualidad/menu');
			$this->load->view('posts/index', $data);
			$this->load->view('partes_actualidad/footer_admin');

		}


		//Funcion "delete" que recibe el "ID" del post que se desea eliminar, y invoca a la funcion delete_post de Post_model, con el parámetro "ID".
		//Luego redirecciona a la página posts/index
		public function delete($id){
			//Verificamos si el usuario está conectado, si no está conectado lo redirecciona a la pagina de login.
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$this->category_model->delete_category($id);

			//Set message
				$this->session->set_flashdata('category_deleted','Su categoría ha sido eliminada exitosamente');

			redirect('categories');

		}


	}






 ?>
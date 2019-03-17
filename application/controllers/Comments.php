<?php 
	class Comments extends CI_Controller{

		public function create($post_id){

			$data['titulo'] = 'Create Comment';
			// Se Obtiene el comentario de la "view" y se lo almacena en la variable "$slug".
			$slug = $this->input->post('slug');

			//Mediante la infomación del comentario, obtenemos el "post" en el que se publicó.
			$data['post'] = $this->post_model->get_posts($slug);

			//validamos los campos del formulario del "Comentario" de la vista "view".
			$this->form_validation->set_rules('name','Nombre','required');
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('body','Descripción','required');

			//Se verifica si se ejecutó la validación de algun campo del formulario del "Comentario".
			//Si no se ejecuto la validación de algún campo campo, se llama a la vista del "post"
			if($this->form_validation->run() === FALSE){
				$this->load->view('partes_actualidad/header', $data);
				$this->load->view('partes_actualidad/menu');
				$this->load->view('posts/view', $data);
				$this->load->view('partes_actualidad/footer_admin');

			//Si se ejecuto la validación de algún campo campo, se llama a la función "create_comment" del modelo "comment_model" para crear el comentario.
			//Luego redireccionamos a la misma página (refrescamos la página)
			}else{
				$this->comment_model->create_comment($post_id);

				//Set message
				$this->session->set_flashdata('comment_created','Su comentario ha sido publicado exitosamente');

				redirect('posts/'.$slug);
			}
		}

	}
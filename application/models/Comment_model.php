
<?php
	class Comment_model extends CI_Model{

		public function __construct(){

			//Se carga la base de datos
			$this->load->database();

		}

		public function create_comment($post_id){

			//asignamos los datos obtenidos del método "post" del formulario de "Comentario", a un arreglo. 
			$data = array(
				'post_id' => $post_id,
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'body' => $this->input->post('body'),

			);

			//Esta función retornara "Ok" o "fail", según sea que se hayan insertados los datos del "array" de arriba en la tabla "comments".
			return $this->db->insert('comments', $data);
		}


		//La función permite obtener los comentarios que pertenecen a un mismo "Post".
		public function get_comments($post_id){
			$query = $this->db->get_where('comments', array('post_id' => $post_id));
			return $query->result_array();
		}
	}
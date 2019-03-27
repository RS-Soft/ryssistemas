<?php 
	class Category_model extends CI_Model{

		public function _construct(){

			//Cargamos la Base de Datos
			$this->load->database();
		}

		//Realiza una consulta para obtener todas las categorias, ordenadas por nombre.
		public function get_categories(){

			$this->db->order_by('name');
			$query = $this->db->get('categories');
			return $query->result_array();

		}

		// realiza una consulta "Insert" de la nueva categoria.
		public function create_category(){
			$data = array(
				//toma el valor del input "name" de la clase "Categories".
				'name' => $this->input->post('name'),
				'user_id' => $this->session->userdata('user_id')
			);

			return $this->db->insert('categories', $data);
		}

		////Realiza una consulta para obtener todos los posts con la misma categoria.
		public function get_category($id){

			$query = $this->db->get_where('categories', array('id' => $id));
			return $query->row();

		}

		// La funcion delete_category, realiza las consultas: 1ro -> compara el "$id" recibido como parámetro con los "id" de la Base de Datos. 2do -> Realiza envia una consulta "delete" a la Base de Datos, en la tabla "posts" del post correspondiente al "Id" que resulte igual en la comparación de la 1er consulta.
		public function delete_category($id){

			$this->db->where('id', $id);
			$this->db->delete('categories');
			return true;
		}

	}







 ?>
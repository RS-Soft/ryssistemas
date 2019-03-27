<?php
	class Post_Model extends CI_Model{


		public function __construct(){

			$this->load->database();
		}

		public function get_posts($slug = FALSE, $limit = FALSE, $offset = FALSE){
			if($limit){
				$this->db->limit($limit, $offset);
			}


			if($slug === FALSE){

				// envia una consulya a la base de datos para ordenar los Posts por sus "ID" en forma "Descendente".
				$this->db->order_by('posts.id', 'DESC');

				//Realiza una consulta Join(Union) de los Id de la tabla de categoria, y los id de categoria de los posts
				//para agrupar los posts por categorias
				$this->db->join('categories','categories.id = posts.category_id');

				//Obtiene los datos que fueron ordenados "Descendentemente" arriba.
				$query = $this->db->get('posts');
				return $query->result_array();

			}

			//Envia los datos obtenidos arriba, hacia la pagina posts/index
			$query = $this->db->get_where('posts', array('slug' => $slug));
			return $query->row_array();


		}

		public function create_post($post_image){

			$slug = url_title($this->input->post('titulo'));


			$data = array(
				'titulo' => $this->input->post('titulo'),
				'slug' => $slug,
				'body' => $this->input->post('body'),
				//Obtiene el valor de la categoria, desde el metodo "post" del input de nombre "category"
				'category_id' => $this->input->post('category_id'),
				'user_id' => $this->session->userdata('user_id'),
				'post_image' => $post_image

			);

			//con los datos obtenidos "arriba", realizamos un insert en la tabla "posts"
			return $this->db->insert('posts', $data);
		}

		// La funcion delete_post, realiza las consultas: 1ro -> compara el "$id" recibido como parámetro con los "id" de la Base de Datos. 2do -> Realiza envia una consulta "delete" a la Base de Datos, en la tabla "posts" del post correspondiente al "Id" que resulte igual en la comparación de la 1er consulta.

		public function delete_post($id){

			//Al eliminar la publicación, también eliminamos la imagen de la misma, que se encuentra en la carpeta "img/posts"
			$image_file_name = $this->db->select('post_image')->get_where('posts', array('id' => $id))->row()->post_image;
			$cwd = getcwd();//save the current working directory
			$image_file_path = $cwd."\\assets\\img\\posts\\";
			chdir($image_file_path);
			unlink($image_file_name);
			chdir($cwd); //Restore the previous working directory
			

			$this->db->where('id', $id);
			$this->db->delete('posts');
			return true;
		}


		public function update_post($post_image){

			$slug = url_title($this->input->post('titulo'));

			$data = array(
				'titulo' => $this->input->post('titulo'),
				'slug' => $slug,
				'body' => $this->input->post('body'),
				//Obtiene el valor de la categoria, desde el metodo "post" del input de nombre "category"
				'category_id' => $this->input->post('category_id'),
				'post_image' => $post_image

			);

			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('posts', $data);
		}


		//La Función get_categories, obtiene las categorias de la tabla categorias, ordenadas por nombre y las retorna como un arreglo.
		public function get_categories(){

			$this->db->order_by('name');
			$query = $this->db->get('categories');
			return $query->result_array();

		}

		public function get_posts_by_category($category_id){

			//Realiza una consulta para ordenar los datos de forma "Descendente".
			$this->db->order_by('posts.id', 'DESC');

			//Realiza una consulta Join(Union) de los Id de la tabla de categoria, y los id de categoria de los posts
			//para agrupar los posts por categorias.
			$this->db->join('categories','categories.id = posts.category_id');

			//Obtiene los datos que fueron ordenados "Descendentemente" arriba, pero solo en los que coinciden el valor de "category_id"
			$query = $this->db->get_where('posts', array('category_id' => $category_id));
			return $query->result_array();
		}


		public function buscador_posts($nombre_post){

				// envia una consulya a la base de datos para ordenar los Posts por sus "ID" en forma "Descendente".
				$this->db->order_by('posts.id', 'DESC');

				//Realiza una consulta Join(Union) de los Id de la tabla de categoria, y los id de categoria de los posts
				//para agrupar los posts por categorias
				$this->db->join('categories','categories.id = posts.category_id');

				$this->db->like('titulo',$nombre_post);

				//Obtiene los datos que fueron ordenados "Descendentemente" arriba.
				$query = $this->db->get('posts');
				return $query->result_array();

			/*//Envia los datos obtenidos arriba, hacia la pagina posts/index
			$query = $this->db->get('posts');
			return $query->row_array();*/

			/*$sql = "SELECT * FROM posts inner join categories on posts.category_id=categories.id WHERE (posts.titulo LIKE '".$nombre_post."' )";

			/*$sql = "SELECT posts.titulo, categories.name from posts inner join categories on posts.category_id=categories.id where posts.titulo LIKE".$nombre_post;*/

			/*$query = $this->db->query($sql);
			return $query->result_array();*/


		}
	}
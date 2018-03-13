<?php
	class Post_model extends CI_Model{
    	public function __construct(){
        	$this->load->database();
        }

        public function get_posts($slug = false){
        	if($slug === false){
							$this->db->order_by('idAnnuncio', 'DESC');
            	$query = $this->db->get('posts');
              return $query->result_array();
            }

            $query = $this->db->get_where('posts', array('slug' => $slug));
            return $query->row_array();
        }

				public function create_post(){
					if($this->input->post('options')!=null)
						$category = $this->input->post('options');
					else
						$category = '';
        	$slug = url_title($this->input->post('titolo'));
					$data = array(
						'titolo' => $this->input->post('titolo'),
						'slug' => $slug,
						'corpo' => $this->input->post('corpo'),
						'idCategoria' => $category,
					);

					return $this->db->insert('posts', $data);
        }

				public function delete_post($id){
        	$this->db->where('idAnnuncio', $id);
					$this->db->delete('posts');
					return true;
        }

				public function link_post_image($id, $idNULL = ''){
					if($idNULL === 'NULL')
						$this->db->set('idImmagine', $idNULL);
					else
						$this->db->set('idImmagine', $this->input->post('idImmagine'));
					$this->db->where('idAnnuncio', $id);
					$this->db->update('posts'); // gives UPDATE `mytable` SET `field` = 'field+1' WHERE `id` = 2
					return true;
				}

				public function get_posts_by_category($category_id){
					$this->db->order_by('idAnnuncio', 'DESC');
					$this->db->join('categories', 'categories.idCategoria = posts.idCategoria');
					$query = $this->db->get_where('posts', array('posts.idCategoria' => $category_id));
					return $query->result_array();
				}
    }

<?php
	class Post_model extends CI_Model{
    	public function __construct(){
        	$this->load->database();
        }

        public function get_posts($slug = false){
        	if($slug === false){
            	$query = $this->db->get('CiAnnunci');
                return $query->result_array();
            }

            $query = $this->db->get_where('CiAnnunci', array('slug' => $slug));
            return $query->row_array();
        }

				public function create_post(){
        	$slug = url_title($this->input->post('titolo'));
					$data = array(
						'titolo' => $this->input->post('titolo'),
						'slug' => $slug,
						'corpo' => $this->input->post('corpo'),

					);

					return $this->db->insert('CiAnnunci', $data);
        }
    }

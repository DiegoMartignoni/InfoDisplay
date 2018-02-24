<?php
	class Image_model extends CI_Model{
    	public function __construct(){
        	$this->load->database();
        }

        public function get_images($slug = false){
			     $this->db->order_by('idImmagine', 'DESC');
        	 $query = $this->db->get('images');
            return $query->result_array();
        }

				public function get_image($id){
			     $this->db->where('idImmagine', $id);
        	 $query = $this->db->get('images');
            return $query->result_array();
        }

        public function upload_image(){
          $uploadData = array(
            'idImmagine' => '',
						'nome' => $this->upload->data('file_name'),
						'larghezza' => $this->upload->data('image_width'),
            'altezza' => $this->upload->data('image_height')

					);

					return $this->db->insert('images', $uploadData);
        }

				public function delete_image($nome){
					$this->db->where('nome', $nome);
					$this->db->delete('images');
					return true;
				}

				public function is_image($id){
					$this->db->where('idImmagine', $id);
					$query = $this->db->get('images');
					if(empty($query->result_array()))
						return false;
					else
						return $query->result_array();
				}

    }

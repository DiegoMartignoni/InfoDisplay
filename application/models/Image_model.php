<?php
	class Image_model extends CI_Model{
    	public function __construct(){
        	$this->load->database();
        }

        public function get_image($slug = false){
			     $this->db->order_by('idImmagine', 'DESC');
        	 $query = $this->db->get('images');
            return $query->result_array();
        }
        
        public function upload_image(){
          $uploadData = array(
            'idImmagine' => '',
						'nome' => $this->upload->data('file_name'),
						'path' => $this->upload->data('full_path'),
						'larghezza' => $this->upload->data('image_width'),
            'altezza' => $this->upload->data('image_height')

					);

					return $this->db->insert('images', $uploadData);
        }

    }

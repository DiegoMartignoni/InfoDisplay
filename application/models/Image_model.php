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
    }

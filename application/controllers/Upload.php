<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Upload extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
        }

        public function index()
        {
          $this->load->view('templates/header');
        	$this->load->view('upload/index', array('error' => '' ));
          $this->load->view('templates/footer');
        }

        public function upload_file()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png|pdf|doc';
                $config['max_size']             = 2000;
                $config['max_width']            = 1920;
                $config['max_height']           = 1080;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {

                    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');

                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('templates/header');
                    $this->load->view('upload/index', $error);
                    $this->load->view('templates/footer');
                }
                else
                {
                    $data = array('upload_data' => $this->upload->data());
                    $this->load->view('templates/header');
                    $this->load->view('upload/success', $data);
                    $this->load->view('templates/footer');

                }
        }
}

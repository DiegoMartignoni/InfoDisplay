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
          $data['images'] = $this->Image_model->get_image();
          $data['error'] = '';

          //array('error' => '' )
          $this->load->view('templates/header');
        	$this->load->view('upload/index', $data);
          $this->load->view('templates/footer');
        }

        public function upload_file()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png|pdf|doc';
                $config['max_size']             = 5000;
                $config['max_width']            = 3840;
                $config['max_height']           = 2160;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {

                    $data['images'] = $this->Image_model->get_image();
                    if (empty($data['images'])) {
                      show_404();
                    }
                    $data['error'] = $this->upload->display_errors();

                    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');


                    $this->load->view('templates/header');
                    $this->load->view('upload/index', $data);
                    $this->load->view('templates/footer');
                }
                else
                {
                    $dataImage = array('upload_data' => $this->upload->data());
                    $this->load->view('templates/header');
                    $this->load->view('upload/success', $dataImage);
                    $this->load->view('templates/footer');
                    $this->Image_model->upload_image();
                    redirect('upload');

                }
        }

        public function delete($nome)
        {
          $file = './uploads/'.$nome;
          $data = $file;
          if(file_exists($file)){
            chmod($file, 0644);
            unlink($file);
          }
          $this->Image_model->delete_image($nome);
          redirect('upload');
        }
}

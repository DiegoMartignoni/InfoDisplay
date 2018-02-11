<?php
class Posts extends CI_Controller {

  public function index()
  {
    $data['posts'] = $this->Post_model->get_posts();

    $this->load->view('templates/header', $data);
    $this->load->view('posts/index', $data);
    $this->load->view('templates/footer', $data);
  }
}

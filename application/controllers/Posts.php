<?php
class Posts extends CI_Controller {

  public function index()
  {
    $data['posts'] = $this->Post_model->get_posts();

    $this->load->view('templates/header', $data);
    $this->load->view('posts/index', $data);
    $this->load->view('templates/footer', $data);
  }

  public function view($slug = null)
  {
    $data['post'] = $this->Post_model->get_posts($slug);
    if (empty($data['post'])) {
      show_404();
    }
    $data['titolo'] = $data['post']['titolo'];
    $this->load->view('templates/header');
    $this->load->view('posts/view', $data);
    $this->load->view('templates/footer');
  }

  public function create()
  {
    $this->load->view('templates/header');
    $this->load->view('posts/create');
    $this->load->view('templates/footer');
  }
}

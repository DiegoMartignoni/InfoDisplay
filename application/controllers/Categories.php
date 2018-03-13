<?php
class Categories extends CI_Controller {

  public function index()
  {
    $data['categories'] = $this->Category_model->get_categories();
    $this->load->view('templates/header');
    $this->load->view('categories/create');
    $this->load->view('categories/index', $data);
    $this->load->view('templates/footer');

  }

  public function create()
  {
    $this->form_validation->set_rules('name', 'Name', 'required');
    if($this->form_validation->run() != false){
      $this->Category_model->create_category();
    }
    redirect('categories');
  }

  public function posts($id)
  {
    $data['title'] = $this->Category_model->get_category($id)->nome;
    $data['posts'] = $this->Post_model->get_posts_by_category($id);

    $this->load->view('templates/header');
    $this->load->view('categories/posts_by_category', $data);
    $this->load->view('templates/footer');
  }
}

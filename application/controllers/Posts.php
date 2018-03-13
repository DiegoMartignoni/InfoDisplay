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
    $data['images'] = $this->Image_model->get_images();
    if($this->Image_model->is_image($data['post']['idImmagine']) != false){
      $i = $this->Image_model->get_image($data['post']['idImmagine']);
      $data['image'] = $i['0'];
    } else {
      $i = array('0' => array('nome' => 'Vuoto', ), );
      $data['image'] = $i['0'];
      $this->Post_model->link_post_image($data['post']['idAnnuncio'], 'NULL');
    }

    $data['titolo'] = $data['post']['titolo'];
    $this->load->view('templates/header');
    $this->load->view('posts/view', $data);
    $this->load->view('templates/footer');
  }

  public function create()
  {
    $this->form_validation->set_rules('titolo', 'Titolo', 'required');
    $this->form_validation->set_rules('corpo', 'Corpo', 'required');
    $data['categories'] = $this->Category_model->get_categories();

    if ($this->form_validation->run() === false) {
      $this->load->view('templates/header');
      $this->load->view('posts/create', $data);
      $this->load->view('templates/footer');
    } else {
      $this->Post_model->create_post();
      redirect('posts');
    }
  }

  public function delete($id)
  {
    $this->Post_model->delete_post($id);
    redirect('posts');
  }

  public function link($id)
  {
    $this->Post_model->link_post_image($id);
    redirect('posts');
  }
}

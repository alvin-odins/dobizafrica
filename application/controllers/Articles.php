<?php
  class Articles extends CI_Controller{

    public function index(){

      $data['title'] = 'Latest Articles';

      $data['articles'] = $this->articles_model->get_articles();

      $this->load->view('templates/header');
      $this->load->view('templates/nav');
      $this->load->view('articles/index', $data);
      $this->load->view('templates/footer');
    }
  }
 ?>

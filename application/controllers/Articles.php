<?php
  class Articles extends CI_Controller{

    public function index(){

      $data['title'] = 'Latest Articles';

      $data['articles'] = $this->article_model->get_articles();

      $this->load->view('templates/header');
      $this->load->view('templates/nav');
      $this->load->view('articles/index', $data);
      $this->load->view('templates/footer');
    }

    public function view($slug = NULL){
			$data['articles'] = $this->article_model->get_articles($slug);

			if(empty($data['articles'])){
				show_404();
			}
			$data['title'] = $data['articles']['title'];
			$this->load->view('templates/header');
			$this->load->view('templates/nav');
			$this->load->view('articles/view', $data);
			$this->load->view('templates/footer');
		}
  }
 ?>

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

    public function create(){
        $data['title'] = 'Publish New Article';

        $data['articles_cat'] = $this->article_model->get_categories();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('body', 'Body', 'required');

        if ($this->form_validation->run() === FALSE) {
          $this->load->view('templates/header');
          $this->load->view('templates/nav');
          $this->load->view('articles/create', $data);
          $this->load->view('templates/footer');
        } else {
          $this->article_model->create_article();
          redirect('articles');
        }

    }

    public function delete($id){
      $this->article_model->delete_article($id);
      redirect('articles');
    }

    public function edit($slug){
      $data['articles'] = $this->article_model->get_articles($slug);

      $data['articles_cat'] = $this->article_model->get_categories();


			if(empty($data['articles'])){
				show_404();
			}
			$data['title'] = 'Edit Article';

			$this->load->view('templates/header');
			$this->load->view('templates/nav');
			$this->load->view('articles/edit', $data);
			$this->load->view('templates/footer');
    }

    public function update(){
      $this->article_model->update_article();
      redirect('articles');
    }

  }
 ?>

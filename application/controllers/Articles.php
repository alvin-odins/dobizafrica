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
			$data['article'] = $this->article_model->get_articles($slug);
      // we need article id in order to grab the comments, we get it from ['article'] above cos it returns single article
      $article_id = $data['article']['id'];
      // get our comments
      $data['comments'] = $this->comment_model->get_comments($article_id);

			if(empty($data['article'])){
				show_404();
			}
			$data['title'] = $data['article']['title'];
			$this->load->view('templates/header');
			$this->load->view('templates/nav');
			$this->load->view('articles/view', $data);
			$this->load->view('templates/footer');
		}

    public function create(){
        $data['title'] = 'Publish New Article';

        $data['categories'] = $this->article_model->get_categories();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('body', 'Body', 'required');

        if ($this->form_validation->run() === FALSE) {
          $this->load->view('templates/header');
          $this->load->view('templates/nav');
          $this->load->view('articles/create', $data);
          $this->load->view('templates/footer');
        } else {
          // upload function
          $config['upload_path'] = './assets/img/articles';
          $config['allowed_types'] = '.gif|jpg|png';
          $config['max_size'] = '2048';
          $config['max_width'] = '500';
          $config['max_height'] = '500';

          $this->load->library('upload', $config);

          if (!$this->upload->do_upload()) {
            $errors = array('error' => $this->upload->display_errors());
            $article_image = 'noimage.jpg';
          } else {
            $data = array('upload_data' => $this->upload->data());
            // have to use 'userfile' else the image wont upload
            $article_image = $_FILES['userfile']['name'];
          }

          $this->article_model->create_article($article_image);

          // set message
          $this->session->set_flashdata('article_created', 'New Article Added');

          redirect('articles');
        }

    }

    public function delete($id){
      $this->article_model->delete_article($id);

      $this->session->set_flashdata('article_deleted', 'Article has been removed');
      
      redirect('articles');
    }

    public function edit($slug){
      $data['articles'] = $this->article_model->get_articles($slug);

      $data['categories'] = $this->article_model->get_categories();


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
      
      $this->session->set_flashdata('article_updated', 'Article updated successfully');

      redirect('articles');
    }

  }
 ?>

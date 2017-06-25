<?php 
	class Comments extends CI_Controller{
		public function create($article_id){
			// get the slug so we put it in its own var
			$slug = $this->input->post('slug');
			// get the actual article so if the validation fails we need to load that
			$data['article'] = $this->article_model->get_articles($slug);

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			// $this->form_validation->set_rules('email', 'Email', 'valid_email');
			$this->form_validation->set_rules('body', 'Body', 'required');

			if ($this->form_validation->run() === FALSE) {
				$this->load->view('templates/header');
				$this->load->view('templates/nav');
				$this->load->view('articles/view', $data);
				$this->load->view('templates/footer');
			} else {
				$this->comment_model->create_comment($article_id);
				redirect('articles/'.$slug);
			}
			
		}
	}

?>
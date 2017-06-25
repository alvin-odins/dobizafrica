<?php 
	class Categories extends CI_Controller{

		public function index(){
			$data['title'] = 'Categories';

			$data['categories'] = $this->category_model->get_categories();

			$this->load->view('templates/header');
			$this->load->view('templates/nav');
			$this->load->view('categories/index', $data);
			$this->load->view('templates/footer');
		}

		public function create(){
			$data['title'] = 'Create Article Category';

			$this->form_validation->set_rules('name', 'Name', 'required');

			if ($this->form_validation->run() === FALSE) {
				$this->load->view('templates/header');
				$this->load->view('templates/nav');
				$this->load->view('categories/create', $data);
				$this->load->view('templates/footer');
			} else {
				$this->category_model->create_category();
				redirect('categories');
			}
		}

		public function articles($id){
			$data['title'] = $this->category_model->get_category($id)->name;

			$data['articles'] = $this->article_model->get_articles_by_category($id);

			// we dont necessarily have to create a new view for this we can use the articles/index cos all it needs is a variable called articles and the title
			$this->load->view('templates/header');
			$this->load->view('templates/nav');
			$this->load->view('articles/index', $data);
			$this->load->view('templates/footer');
		}

	}
?>
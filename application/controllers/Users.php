<?php
  class Users extends CI_Controller{

    public function register(){
      $data['title'] = 'Register';

      $this->form_validation->set_rules('name', 'Name', 'trim|required|alpha|min_length[4]|max_length[30]');
      $this->form_validation->set_rules('username', 'Username', 'trim|required|alpha|min_length[4]|max_length[12]');
      $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]');
      $this->form_validation->set_rules('password', 'Password', 'trim|required');
      $this->form_validation->set_rules('password2', 'Confirm Password', 'trim|matches[password]');

      if ($this->form_validation->run() === FALSE) {
        $this->load->view('templates/header');
        $this->load->view('users/register', $data);
        $this->load->view('templates/footer');
      } else {
        // Encrypt password
        $enc_password = md5($this->input->post('password'));

        // mvc is for us to do anything without db in controller
        // so no need to do password enc in model
        $this->user_model->register($enc_password);

        // set message
        $this->session->set_flashdata('user_registered', 'You are now registered and can login');

        redirect('articles');
      }
    }
  }
 ?>

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
        die('continue');
      }
    }
  }
 ?>

<?php

    class Articles_model extends CI_Model{

      public function __construct(){
        $this->load->database();
      }

      public function get_articles($slug = FALSE){
        if ($slug === FALSE) {
          $query = $this->db->get('articles');
          return $query->result_array();
        }

        $query = $this->db->get_where('articles', array('slug' => $slug));
        return $query->row_array();
      }

    }


 ?>

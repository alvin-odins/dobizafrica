<?php

    class Article_model extends CI_Model{

      public function __construct(){
        $this->load->database();
      }

      public function get_articles($slug = FALSE){
        if ($slug === FALSE) {
          $this->db->order_by('id', 'DESC');
          $query = $this->db->get('articles');
          return $query->result_array();
        }

        $query = $this->db->get_where('articles', array('slug' => $slug));
        return $query->row_array();
      }

      public function create_article(){
        $slug = url_title($this->input->article('title'));

        $data = array(
          'title' => $this->input->article('title'),
          'slug' => $slug,
          'body' => $this->input->article('body')
        );

        return $this->db->insert('articles', $data);
      }

      public function delete_article($id){
        $this->db->where('id', $id);
        $this->db->delete('articles');
        return true;
      }

      public function update_article(){
        $slug = url_title($this->input->article('title'));

        $data = array(
          'title' => $this->input->article('title'),
          'slug' => $slug,
          'body' => $this->input->article('body'),
        );

        $this->db->where('id', $this->input->article('id'));
        return $this->db->update('artilces', $data);
      }

    }


 ?>

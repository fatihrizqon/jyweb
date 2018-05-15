<?php
class News extends CI_Model{

  public function __construct(){
    parent::__construct();
  }

  public function getNews(){
    $this->db->order_by("id_news","desc");
    $query=$this->db->get("news");
    return $query->result_array();
  }

  public function addNews(){

  }

  public function editNews(){

  }

  public function deleteNews($id_news){

  }
}

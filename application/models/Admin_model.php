<?php
class Admin_model extends CI_Model {

  public function __construct()
  {
    $this->load->database();
  }

  function check_login($table,$where){
	return $this->db->get_where($table,$where);
  }

  // Web Content
  public function getMainContent()
  {
    $query = $this->db->get('main_content');
    return $query->result();
  }

  public function viewNews($slug = FALSE)
  {
    if ($slug === FALSE)
    {
      $query = $this->db->get('news');
      return $query->result_array();
    }
    $this->db->join('users', 'users.id_users = news.id_users');
    $query = $this->db->get_where('news', array('slug' => $slug));
    return $query->row_array();
  }

  public function getNews()
  {

    $this->db->select('*');
    $this->db->from('news');
    $this->db->join('users', 'users.id_users = news.id_users');
    $this->db->order_by('id_news', 'DESC');
    $query = $this->db->get();
    return $query->result();
  }
  public function addNews()
  {
    $image = $this->upload->data();
    $slug = url_title($this->input->post('title'), 'dash', TRUE);
    $data = array(
      'title'     => $this->input->post('title'),
      'text'      => $this->input->post('text'),
      'image'     => $image['file_name'],
      'id_users'  => $this->session->userdata('id'),
      'slug'      => $slug
    ); 
    return $this->db->insert('news', $data);
  }

  // Admin Management
  public function getUser()
  {
  	$query = $this->db->get('users');
  	return $query->result();
  }

  public function addUser($data)
  {
  	$this->db->insert('users', $data);
  	return TRUE;
  }

  public function deleteUser($id_users)
  {
    return $this->db->delete('users', array('id_users'=>$id));
  }

}


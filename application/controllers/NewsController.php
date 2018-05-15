<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewsController extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin_model');
    $this->load->model('root_model');
    $this->load->model('News');
    $this->load->helper('url_helper');
  }

	public function index(){
    $data["news"]=$this->News->read();
    $this->load->view('admin/templates/header',$data);
    $this->load->view('admin/templates/navbar',$data);
    $this->load->view('admin/news',$data);
    $this->load->view('admin/templates/footer');
	}

  public function addNews(){

  }

  public function editNews(){

  }

  public function deleteNews(){

  }


}

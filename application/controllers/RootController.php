<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RootController extends CI_Controller {

    public function __construct()
    {
    	parent::__construct();
    	$this->load->model('admin_model');
    	$this->load->model('root_model');
    	$this->load->helper('url_helper');
    }

	public function index()
	{
		$data['username'] = $this->session->userdata('username');
		$data['main'] = $this->admin_model->getMainContent();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('pages/index',$data);
		$this->load->view('templates/footer');
	}


}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		//$this->load->view('templates/navbar');
		$this->load->view('pages/home');
		//$this->load->view('templates/footer');
	}
}

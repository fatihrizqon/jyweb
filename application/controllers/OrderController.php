<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrderController extends CI_Controller {

	public function index()
	{
    $this->load->view('templates/header');
    $this->load->view('templates/navbar');
		$this->load->view('pages/order/index');
    $this->load->view('templates/footer');
	}
}

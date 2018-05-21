<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct()
  {
  	parent::__construct();
  	$this->load->model('admin_model');
  	$this->load->model('root_model');
  	$this->load->helper('url_helper');
  	$this->load->helper('login_helper');
  	$this->load->library('session');
  }

  public function index()
  {
  	is_login();
    $data['title'] = "Dashboard";
    $data['login'] = $this->session->userdata();
  	$data['main'] = $this->admin_model->getMainContent();
    $this->load->view('admin/templates/header',$data);
    $this->load->view('admin/templates/navbar',$data);
    $this->load->view('admin/index',$data);
    $this->load->view('admin/templates/footer');
  }

  public function login()
  {
  	if($this->session->userdata('status') == "login")
    {
      redirect('admin/index');
    }
    $data['title'] = "Login";
    $this->load->view('admin/templates/header',$data);
    $this->load->view('admin/login');
    $this->load->view('admin/templates/footer');
  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect('admin/login');
  }

  public function news()
  {
    is_login();
    $this->load->library('pagination');
    $data['title'] = "News Section";
    $data['login'] = $this->session->userdata();
    $data['news']  = $this->admin_model->getNews();
    $data['json'] = json_encode($this->admin_model->getNews());

  	$this->load->view('admin/templates/header',$data);
  	$this->load->view('admin/templates/navbar',$data);
  	$this->load->view('admin/news',$data);
  	$this->load->view('admin/templates/footer');
  }

  public function viewNews($slug){
  	$data['news_item'] = $this->admin_model->viewNews($slug);

    if (empty($data['news_item']))
    {
    	show_404();
    }


    $this->load->view('templates/header', $data);
    $this->load->view('templates/navbar', $data);
    $this->load->view('pages/news/viewNews', $data);
    $this->load->view('templates/footer');
  }

  public function addNews()
  {
	is_login();
	$this->load->helper('form');
	$this->load->library('form_validation');
	$this->load->library('upload');
	$this->form_validation->set_rules("title", "title", 'required');
	$this->form_validation->set_rules("text", "text", 'required');

    $data['login'] = $this->session->userdata();
    $id_users = $this->session->userdata('id_users');

	$imagename 			     = "image_".time();
	$config['upload_path'] 	 = './uploads/images/news';
	$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|svg';
	$config['max_size'] 	 = '9000';
	$config['max_width']  	 = '9000';
	$config['max_height']  	 = '9000';
	$config['file_name']	 = $imagename;
 	$config['overwrite']	 = TRUE;

    $this->upload->initialize($config);

    if($_FILES)
    {
		if ($this->upload->do_upload('userfile'))
        {
			$image = $this->upload->data();
			if ($this->form_validation->run() === FALSE)
		 	{
		 		redirect('admin/ucp', 'refresh');
		 	}
		 	else
		 	{
				$this->admin_model->addNews();
				redirect('admin/news', 'refresh');
		 	}
        }

        else
        {
        	redirect('admin');
        }
    }
  }

	public function article()
	{
  	is_login();
    $data['title'] = "Article Section";
    $data['login'] = $this->session->userdata();
		$this->load->view('admin/templates/header',$data);
		$this->load->view('admin/templates/navbar',$data);
		$this->load->view('admin/article');
		$this->load->view('admin/templates/footer');
	}

	public function portfolio()
	{
  		is_login();
    	$data['title'] = "Portfolio Section";
    	$data['login'] = $this->session->userdata();
		$this->load->view('admin/templates/header',$data);
		$this->load->view('admin/templates/navbar',$data);
		$this->load->view('admin/portfolio');
		$this->load->view('admin/templates/footer');
	}

	public function gallery()
	{
  		is_login();
    	$data['title'] = "Gallery Section";
    	$data['login'] = $this->session->userdata();
		$this->load->view('admin/templates/header',$data);
		$this->load->view('admin/templates/navbar',$data);
		$this->load->view('admin/gallery');
		$this->load->view('admin/templates/footer');
	}

	public function mainContent()
	{
  		is_login();
    	$data['title'] = "Setting Section";
    	$data['login'] = $this->session->userdata();
  		$data['main'] = $this->admin_model->getMainContent();
		$this->load->view('admin/templates/header',$data);
		$this->load->view('admin/templates/navbar',$data);
		$this->load->view('admin/mainContent');
		$this->load->view('admin/templates/footer');
	}
	public function addMainContentPage(){
  	is_login();
    $data['title'] = "Setting Section";
    $data['login'] = $this->session->userdata();
  	$data['main'] = $this->admin_model->getMainContent();
		$this->load->view('admin/templates/header',$data);
		$this->load->view('admin/templates/navbar',$data);
		$this->load->view('admin/MainContent/add');
		$this->load->view('admin/templates/footer');
	}

	public function addMainContent(){
		is_login();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules("title", "title", 'required');
		$this->form_validation->set_rules("text", "text", 'required');
    $data['login'] = $this->session->userdata();
    $id_users = $this->session->userdata('id_users');
		$imagename 			         = "image_".time();
		$config['upload_path'] 	 = './uploads/images/content';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|svg';
		$config['max_size'] 	   = '10000';
		$config['max_width']  	 = '10000';
		$config['max_height']  	 = '10000';
		$config['file_name']	   = $imagename;
 		$config['overwrite']	   = TRUE;
    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    if($_FILES){
      if ( ! $this->upload->do_upload())
      {
        $error = array('error' => $this->upload->display_errors());
        var_dump($error);
      }
      else
      {
        $this->admin_model->addMainContent();
      }
    }else{
      die("Image Not Selected.");
      // redirect('admin/mainContent', 'refresh');
    }
  }


	public function editMainContentPage(){
  		is_login();
    	$data['title'] = "Setting Section";
    	$data['login'] = $this->session->userdata();
  		$data['main'] = $this->admin_model->getMainContent();
		$this->load->view('admin/templates/header',$data);
		$this->load->view('admin/templates/navbar',$data);
		$this->load->view('admin/MainContent/edit');
		$this->load->view('admin/templates/footer');
	}

	public function ucp()
	{
  		is_login();
    	$data['title'] = "User Control Panel Section";
    	$data['login'] = $this->session->userdata();
  		$data['users'] = $this->admin_model->getUser();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/navbar',$data);
		$this->load->view('admin/ucp',$data);
		$this->load->view('admin/templates/footer',$data);
	}

	public function action_login(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules("username", "username", 'required');
		$this->form_validation->set_rules("password", "password", 'required');

		if ($this->form_validation->run() == true) {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$check = $this->admin_model->check_login("users",$where)->num_rows();
		$this->db->where('username', $username);
		$query = $this->db->get('users');
		foreach ($query->result() as $row)
		{
			$id_users = $row->id_users;
			$role = $row->role;
			if ($role == 3) {
				$role = 'Super Administrator';
			}elseif($role == 2){
				$role = 'Administrator';
			}elseif($role == 1){
				$role = 'Operator';
			}else{
    			$this->session->sess_destroy();
				echo '<script>alert("Access Denied.");</script>';
    			redirect('admin/login', 'refresh');
			}
		}
		if($check > 0){
			$data_session = array(
				'id_users' => $id_users,
				'role' => $role,
				'username' => $username,
				'status' => "login"
			);
			$this->session->set_userdata($data_session);
			echo '<script>alert("Login Success.");</script>';
			redirect(('admin/index'),'refresh');
			}else{
			echo '<script>alert("Login Failed.");</script>';
			redirect(('admin/login'),'refresh');
			}
		}else{
			echo '<script>alert("Login Failed.");</script>';
			redirect(('admin/login'),'refresh');
		}
	}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class My_controller extends CI_Controller{
	
	public function index() {
		$this->load->view('template/header');
		$this->load->view('template/nav-bar-normal');
		$this->load->view('template/page/front-body');
		$this->load->view('template/footer');
	}

	public function method1() {
		echo "Mrthod";
		$this->load->model('My_model');
		echo $this->My_model->first_name();
	}

	public function get_user_registration_form() {
		$this->load->view('template/header');
		$this->load->view('template/nav-bar-normal');
		$this->load->view('user_registration');
		$this->load->view('template/footer');
	}

	public function get_login_page() {
		$data = array ('check' => 0);
		$this->load->view('login-page', $data);
	}
}
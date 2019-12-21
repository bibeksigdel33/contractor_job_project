<?php

class User_details extends CI_Controller {
	public function index() {
		echo "User_details";
		$this->load->model('User_Model');
		$data['user_array'] = $this->User_Model->get_user_details();
		$this->load->view('user_view', $data);
	}

	public function handle_user_registration() {
		$data = $this->input->post();
		$this->load->model('user_model');
		$check = 0;
		$check = $this->user_model->save_user_data($data);
		if ($check == 1) {
			$data = array('check'=>$check);
			$this->load->view('login-page', $data);
		}
	}

	public function handle_user_login() {
		$login_form_data = $this->input->post();
		$this->load->model('user_model');
		$user_database_data['result_array'] = $this->user_model->get_login_details($login_form_data);
		if ($user_database_data['result_array'] == NULL) {
			$this->load->view('login-page', array('check' => -1));
		} else {
			//Login successful now.
			$this->load->view('user/user-home-page', $user_database_data);
		}
	}

	public function show_contractor_search_form() {
		$this->load->model('job_model');
		$service_category_list['service_category'] = $this->job_model->get_service_category_list();
		$this->load->view('job/contractor_search_form', $service_category_list);
	}
}
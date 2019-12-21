<?php

class Contractor_details extends CI_Controller {
	
	public function index() {

	}

	public function get_landing_page() {
		$this->load->model('Job_model');
		$service_category = $this->Job_model->get_service_category_list();
		$this->load->view('contractor/contractor_landing_page', array ('check' => 0, 'contractor_categories' =>$service_category));
	}

	public function handle_contractor_registration() {
		$data = $this->input->post();
		$this->load->model('contractor_details_model');
		$data_inserted = $this->contractor_details_model->save_contractor_data($data);
		if ($data_inserted == 1) {
			$data = array('check' => 1);
			$this->load->view('contractor/contractor_landing_page', $data);
		}
	}

	public function handle_contractor_login() {
		$this->load->model('Contractor_Details_Model');
		$data_from_login_form = $this->input->post();

		$login_results['result_array'] = $this->Contractor_Details_Model->verify_login($data_from_login_form);
		if($login_results['result_array'] == NULL) {
			$this->load->view('contractor/contractor_landing_page', array('check' => -1));
		} else {
			$this->load->view('contractor/contractor_home_page', $login_results);
		}
	}
}
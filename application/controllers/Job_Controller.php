<?php

class Job_Controller extends CI_Controller {
	
	public function get_profession_list() {
		
		if($this->input->post('service_category')) {

			$this->load->model('job_model');
			echo $this->job_model->get_profession($this->input->post('service_category'));
		}
	}

	public function search_contractor() {
		$this->load->model('job_model');
		$results = $this->job_model->search_professionals($this->input->post());
		$this->load->view('job/contractor_search_result');
	}
}
<?php

class Job_Model extends CI_Model {
	
	public function save_job() {
			
	}

	public function get_service_category_list() {
		$this->load->database();
		$this->db->select('service_category');
		$this->db->distinct();
		$query = $this->db->get('tbl_service');
		return $query->result();
	}

	public function get_profession($service_category) {
		$this->load->database();
		$this->db->where('service_category', $service_category);
		$this->db->order_by('service_profession', 'ASC');
		$query = $this->db->get('tbl_service');
		$output = '<option value="">Select Profession</option>';
		foreach($query->result() as $row):
			$output .= '<option value="'.$row->service_profession.'">'.$row->service_profession.'</option>';
		endforeach;
		return $output;
	}

	public function search_professionals($search_criteria) {
		$this->load->database();
		$query = $this->db->get_where('tbl_contractor_registration_details', array (
			'contractor_service_category'=> $search_criteria['contractor_search_form_service_category'],
			'contractor_service_profession'=> $search_criteria['contractor_search_form_service_profession'],
			'suburb' =>$search_criteria['contractor_search_form_suburb']
	));
		return $query->result();
	}
}
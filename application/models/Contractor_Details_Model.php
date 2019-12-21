<?php

class Contractor_Details_Model extends CI_Model {
	
	public function save_contractor_data($contractor): int {
		$this->load->database();
		$query = $this->db->insert('tbl_contractor_registration_details', array (
				'contractor_full_name' => $contractor['contractor_registration_form_full_name'],
				'contractor_email' => $contractor['contractor_registration_form_email'],
				'contractor_password' => $contractor['contractor_registration_form_password'],
				'contractor_address' => $contractor['contractor_registration_form_address'],
				'contractor_suburb' => $contractor['contractor_registration_form_suburb'],
				'contractor_postcode' => $contractor['contractor_registration_form_postcode'],
				'contractor_state' => $contractor['contractor_registration_form_state'],
				'contractor_service_category' => $contractor['contractor_registration_form_service_category'],
				'contractor_profession' => $contractor['contractor_registration_form_profession']
		));
		return 1;
	}

	public function verify_login($login_details) {
		$this->load->database();
		$query = $this->db->get_where('tbl_contractor_registration_details', 
										array('contractor_email' => $login_details['contractor_login_portal_email'],
											  'contractor_password' => $login_details['contractor_login_portal_password']
											)
									);
		if($query->num_rows() == 1) {
			return $query->result();
		} else {
			return NULL;
		}
	}
}
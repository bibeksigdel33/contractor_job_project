<?php

class User_Model extends CI_Model{
	public function get_user_details() {
		
		$this->load->database();
		$query = $this->db->get('user_details');
		
		return $query->result();
	}

	public function save_user_data($user_data): int {		
		$this->load->database();
		$data_to_be_inserted = array ( 'user_full_name'=> $user_data['user_registration_form_full_name'],
										'user_email'=> $user_data['user_registration_form_email'],
										 'user_password'=> $user_data['user_registration_form_password'],
										 'user_address'=> $user_data['user_registration_form_address'],
										 'user_suburb'=> $user_data['user_registration_form_suburb'],
										 'user_postcode'=> $user_data['user_registration_form_postcode'],
										 'user_state'=> $user_data['user_registration_form_state'],
										 'user_registration_date' => date("Y-m-d")
										);

		$insert_query = $this->db->insert('tbl_user_registration_details', $data_to_be_inserted);
		return 1;
	}

	public function get_login_details($login_form_data) {
		$data_to_be_checked = array( 'user_email' => $login_form_data['user_login_portal_email'],
								'user_password' => $login_form_data['user_login_portal_password']
							);
		$this->load->database();
		$query = $this->db->get_where('tbl_user_registration_details', array ('user_email'=> $login_form_data['user_login_portal_email'],
										'user_password' => $login_form_data['user_login_portal_password']
									)
		);
		if($query->num_rows() > 0) {
			return $query->result();
		}
		else {
			return NULL;
		}
	}
}
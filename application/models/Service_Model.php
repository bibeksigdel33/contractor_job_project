<?php

class Service_Model extends CI_Service {

	public function get_service_category_list() {
		$this->load->database();
		$this->db->select('service_category');
		$this->db->from('tbl_service');
		return($this->db->get());		
	}
}
<?php 

class Partner_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}
	
	public function insert_partner($data){
		
		if( !empty($data) ) {
			$this->db->insert('partner', $data);
			return $this->db->insert_id();
		}
	
		return false;
	}

	
}

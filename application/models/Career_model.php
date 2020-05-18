<?php 

class Career_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}
	
	public function insert_candidate($data){
	
		if( !empty($data) ) {
			$this->db->insert('career', $data);
			return $this->db->insert_id();
		}
	
		return false;
	}

	
}

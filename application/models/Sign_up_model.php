<?php 

class Sign_up_model extends CI_Model {

	/*function __construct() {
		parent::__construct();
	}*/
	
	public function insert_data($data){
		
		if( !empty($data) ) {
			$this->db->insert('users', $data);
			return $this->db->insert_id();
		}
	
		return false;
	}

	public function duplicate_domain($domain_name){
		
		$this->db->where('u_domain_name', $domain_name);
	    $query = $this->db->get('users');
	    $count_row = $query->num_rows();

	    if ($count_row > 0) {
	        return TRUE;
	    } else {
	        return FALSE;
	    }
   }

}

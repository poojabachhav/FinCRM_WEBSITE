<?php 

class News_letter_model extends CI_Model {

	/*function __construct() {
		parent::__construct();
	}*/
	
	public function insert_email($data){
		
		if( !empty($data) ) {
			$this->db->insert('news_letter', $data);
			return $this->db->insert_id();
		}
	
		return false;
	}

	

}

?>
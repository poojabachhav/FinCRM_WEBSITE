<?php
   class sign_in_model extends CI_Model{
      function __construct() {
        parent::__construct();
   }

   public function login($data) {

     $condition = "u_name =" . "'" . $data['user_name'] . "' AND " . "u_password =" . "'" . $data['password'] . "'";
     $this->db->select('*');
     $this->db->from('users');
     $this->db->where($condition);
     $this->db->limit(1);
     $query = $this->db->get();

     if ($query->num_rows() == 1) {
		return true;
	 } else {
		return false;
	 }
  } 
}
?>
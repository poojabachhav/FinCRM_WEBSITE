<?php
class sign_in_model extends CI_Model{
function __construct() {
parent::__construct();
}
public function login() {

	$user_name = $this->input->post('user_id');
	$password = $this->input->post('password');

	$this->db->where('u_name', $user_name );
	$this->db->where('u_password', $password);
	$query = $this->db->get('users');
	
    if ($query->num_rows() == 1) {
       return true;
    } else {
       return false;
    }
  }
}
?>
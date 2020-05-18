<?php
class sign_up_model extends CI_Model{
function __construct() {
parent::__construct();
}
public function user_insert($data){
	if($data != "")
// Insertiecng in Table(students) of Database(college)
	{
$this->db->insert('demo', $data);
}else{
	echo "data not found";
}
}
}
?>
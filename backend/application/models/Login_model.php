<?php
class Login_model extends CI_Model
{
 function can_login($uname, $password)
 {
  $this->db->where('uname', $uname);	
  $query = $this->db->get_where('register')->result_array();
    return $query;  
 }
}

?>
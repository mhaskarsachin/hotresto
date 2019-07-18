<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  $this->load->model('login_model');
 }


 function loginUser()
 {
   $result = $this->login_model->can_login('sachin', 'sachin');
   if($result != '')
   {
    echo json_encode($result);
   }
 }
}
?>
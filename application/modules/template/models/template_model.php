<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template_model extends MY_Model
{
	function __construct(){
		parent::__construct();
	}

	function get_user_details()
   {
    $user_id = $this->session->userdata('userid');
    if (!$user_id) {
    	return false;
    }
    else{
	      $query = $this->db->query('SELECT usertype FROM user WHERE user_id = ' .$user_id);
	      $result = $query->row();

	      if ($result) {
	        $usertype = $result->usertype;

	        $data_array = array('admin' => 'administrator');

	        $query = $this->db->get_where($data_array[$usertype], array('user_id' => $user_id));
	        $user_details = $query->result_array();

	        return $user_details;
	      }
	      else
	      {
	        return false;
	      }
	  }
   }
}
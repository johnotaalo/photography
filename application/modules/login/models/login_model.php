<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

   function authentication($uname,$upass)
   {
        $sql = "SELECT * FROM `user` WHERE `username` = '$uname' AND `password` = '$upass'";
        // echo $sql; die();
        $result = $this->db->query($sql);
        $result = $result->result_array() ;
        // echo "<pre>";print_r($result);echo "</pre>";die();
        $user = array();
        if ($result)
        {    
            $user['log'] = TRUE;
            $user['user_id'] = $result[0]['user_id'];
            $user['usertype'] = $result[0]['usertype'];
        }

        else
        {
           $user['log'] = FALSE;
        }

        return $user;
   }

   function member_registration()
   {
        $fname = $this->input->post();
        $fname = $this->input->post();
        $fname = $this->input->post();
   }

}
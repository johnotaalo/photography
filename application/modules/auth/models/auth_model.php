<?php
if(!defined("BASEPATH")) exit("No direct access to the script is allowed");

/**
* 
*/
class auth_model extends MY_Model
{
	
	function __construct()
	{
		parent:: __construct();
	}

	function authenticate($username,$password)
	{
		$sql = "SELECT
					*
				FROM
					`user`
				WHERE `username` = '$username' AND `password` = '$password' AND `is_deleted` = 1";

		$result = $this->db->query($sql);

		return $result->result_array();
	}
}

?>
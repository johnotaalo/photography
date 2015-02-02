<?php
if(!defined("BASEPATH")) exit("No direct access to the script is allowed");

/**
* 
*/
class calendar_model extends MY_Model
{
	
	function load_general_calendar()
	{
		$sql = "SELECT * FROM `events`";

		$result = $this->db->query($sql);

		return $result->result_array();
	}
}
?>
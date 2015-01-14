<?php
if (!defined("BASEPATH")) exit("No direct access to this script");

/**
* 
*/
class admin_model extends CI_Model
{
	function __construct()
	{
		parent:: __construct();
	}


	function get_model_count()
	{
		$sql = "SELECT 
					COUNT(`model_id`) AS `Models`
				FROM `models`";

		$result = $this->db->query($sql);

		return $result->result_array();
	}
	function get_event_counts()
	{
		$sql = "SELECT 
					COUNT(`event_id`) AS `Events`
				FROM `events`";

		$result = $this->db->query($sql);

		return $result->result_array();
	}
	
}

?>
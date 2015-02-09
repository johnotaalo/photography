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

		$calendar = $result->result_array();
		// echo "<pre>";print_r($calendar);die();
		foreach ($calendar as $key => $value) {
			// echo "<pre>";print_r($value);die();
			$data['title'] = $value['event_name'];
       		$data['start'] = "Date(y, m, 1)";
		}
		// echo "<pre>";print_r($data);die();
		// json_encode($calendar);
		
		
	}
}
?>
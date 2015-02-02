<?php
if (!defined("BASEPATH")) exit("No direct access to this script");

/**
* 
*/
class events_model extends CI_Model
{
	function __construct()
	{
		parent:: __construct();
		
	}

	function get_event_counts()
	{
		$sql = "SELECT 
					COUNT(`event_id`) AS `Events`
				FROM `events`";

		$result = $this->db->query($sql);

		return $result->result_array();
	}

	public function call_all_events()
	{
		$sql = "SELECT 
					`event_id`,
					`event_name`,
					YEAR(`day`) AS `start_year`,
					MONTH(`day`) AS `start_month`,
					DAY(`day`) AS `start_Date`,
					`place`
				FROM `events`";
		$result = $this->db->query($sql);

		$result = $result->result_array();

		return $result;
	}

	public function get_events_profile($event_id)
	{
		$sql = "SELECT 
					`ev`.`event_id`,
					`ev`.`event_name`,
					YEAR(`ev`.`day`) AS `start_year`,
					MONTH(`ev`.`day`) AS `start_month`,
					DAY(`ev`.`day`) AS `start_Date`,
					`ev`.`place`,
					`ev`.`Description`,
					`ev`.`cover`
				FROM `events` `ev`
				
				WHERE `ev`.`event_id` = '$event_id'";

		$result = $this->db->query($sql);

		$result = $result->result_array();

		return $result;
	}

	function addevent()
	{
		$insert_data = array();
		if ($this->input->post()) {
			foreach ($this->input->post() as $key => $value) {
				$insert_data[$key] = $value;
			}

			$result = $this->db->insert('events', $insert_data);

			if ($result) {
				return true;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}

	function get_events_images($event_id)
	{
		$sql = "SELECT 
					`ie`.`img_id`,
					`ie`.`event_id`,
					`img`.`image_id`,
					`img`.`image_path`
				FROM `image_event` `ie`
				LEFT JOIN `images` `img`
				ON `ie`.`img_id` = `img`.`image_id` 
				WHERE `ie`.`event_id` = '$event_id'
				ORDER BY `img`.`date_uploaded` DESC";

		$result = $this->db->query($sql);

		return $result->result_array();
	}

	function geteventimages($event_id)
	{
		$sql = "SELECT 
					`img`.* 
				FROM `image_event` `ie`
				LEFT JOIN `images` `img`
				ON `ie`.`img_id` = `img`.`image_id` 
				WHERE `ie`.`event_id` = '$event_id'
				ORDER BY `img`.`date_uploaded` DESC";

		$query = $this->db->query($sql);
		$result = $query->result_array();

		if ($result) {
			return $result;
		}
		else
		{
			return false;
		}
	}
	
}

?>
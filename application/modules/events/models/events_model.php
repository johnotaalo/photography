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
					YEAR(`from`) AS `start_year`,
					YEAR(`to`) AS `end_year`,
					MONTH(`from`) AS `start_month`,
					MONTH(`to`) AS `end_month`,
					DAY(`from`) AS `start_Date`,
					DAY(`to`) AS `end_Date`,
					TIME(`from`) AS `start_time`,
					TIME(`to`) AS `end_time`,
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
					YEAR(`ev`.`from`) AS `start_year`,
					YEAR(`ev`.`to`) AS `end_year`,
					MONTH(`ev`.`from`) AS `start_month`,
					MONTH(`ev`.`to`) AS `end_month`,
					DAY(`ev`.`from`) AS `start_Date`,
					DAY(`ev`.`to`) AS `end_Date`,
					TIME(`ev`.`from`) AS `start_time`,
					TIME(`ev`.`to`) AS `end_time`,
					`ev`.`place`,
					`ev`.`Description`,
					`imgev`.`img_id`,
					`imgev`.`event_id`,
					`imgev`.`cover_image`,
					`img`.`image_id`,
					`img`.`image_path`
				FROM `events` `ev`
				LEFT JOIN `image_event` `imgev`
					ON `ev`.`event_id` = `imgev`.`event_id`
				LEFT JOIN `images` `img`
					ON `img`.`image_id` = `imgev`.`img_id`
				WHERE `ev`.`event_id` = '$event_id' AND `imgev`.`cover_image` = 1";

		$result = $this->db->query($sql);

		$result = $result->result_array();

		return $result;
	}

	function get_events_images($event_id)
	{

	}
	
}

?>
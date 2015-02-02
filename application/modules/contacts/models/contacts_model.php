<?php 
if(!defined("BASEPATH")) exit("No direct access to the script is allowed.");

/**
* 
*/
class contacts_model extends MY_Model
{
	function get_all_models_contacts()
		{
			$sql = "SELECT * FROM `models` ";

			$result = $this->db->query($sql);

			return $result->result_array();
		}

	function get_all_members_contacts()
	{
		$sql = "SELECT * FROM `models` ";

		$result = $this->db->query($sql);

		return $result->result_array();
	}
}

?>
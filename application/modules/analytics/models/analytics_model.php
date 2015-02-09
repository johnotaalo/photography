<?php if (!defined("BASEPATH")) exit("No direct access to the script is allowed");

/**
* 
*/

class Analytics_model extends MY_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function getmonthlyuploadstatistics()
	{
		$query = $this->db->query(
			"SELECT DATE_FORMAT(date_uploaded, '%M') AS month, count(image_id) as images FROM `images` GROUP BY month ORDER BY date_uploaded ASC"
			);

		$result = $query->result_array();

		return $result;
	}

	function categorizeuploads()
	{
		$return_data = array();
		$tables = array(
			'Models' => 'image_model',
			'Events' => 'image_event',
			'Categories' => 'image_catetgory');

		foreach ($tables as $key => $value) {
			$query = $this->db->query(
				"SELECT count(img_id) as ".$key." FROM " .$value
			);

			$result = $query->row();

			$data = $result->$key;

			$return_data[$key] = $data;
		}

		return $return_data;
	}

	function getuploadsbycategory()
	{
		$query = $this->db->query('SELECT c.category_name, count(ic.img_id) as images FROM image_catetgory ic RIGHT JOIN categories c ON c.category_id = ic.category_id GROUP BY c.category_id');
		$result = $query->result_array();

		return $result;
	}

	function getuploadsbyevent()
	{
		$query = $this->db->query('SELECT e.event_name, count(ie.img_id) as images FROM image_event ie RIGHT JOIN events e ON e.event_id = ie.event_id GROUP BY e.event_id');
		$result = $query->result_array();

		return $result;
	}

}
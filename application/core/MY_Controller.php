<?php if (!defined("BASEPATH")) exit("No direct access to the script is allowed");

/**
* 
*/
class MY_Controller extends MX_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->module('upload');
		$this->load->module('template');
		$this->load->module('security');
		$this->load->model('upload/upload_model');
		$this->security->encryption_parameters();
	}

	function get_active($table)
	{
		$data = array();
		$response = '';
		if ($table == 'category') {
			$query = $this->db->get_where($table, array('active' => 1));
		}
		else
		{
			$query = $this->db->get($table);
		}

		$result = $query->result_array();

		if ($result) {
			switch ($table) {
				case 'categories':
					foreach ($result as $key => $value) {
						// $data[$key]['id'] = $value['category_id'];
						// $data[$key]['text'] = $value['category_name'];
						$data[] = array('id' => $value['category_id'], 'text' => $value['category_name']);
					}
					break;
				
				case 'events':
					foreach ($result as $key => $value) {
						// $data[$key]['id'] = $value['event_id'];
						// $data[$key]['text'] = $value['event_name'];

						$data[] = array('id' => $value['event_id'], 'text' => $value['event_name']);
					}
					break;
				default:
					# code...
					break;
			}
		}

		echo json_encode($data);
	}

}

?>
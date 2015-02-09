<?php if (!defined("BASEPATH")) exit("No direct access to the script is allowed");

/**
* 
*/
class Analytics extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('analytics_model');
	}

	function monthlyuploadstatistics()
	{
		$data = $this->analytics_model->getmonthlyuploadstatistics();
		$labels = array();
		$dataset = array();
		$return_data = array();
		if($data)
		{
			$dataset['label'] = 'Uploads Per Month';
			foreach ($data as $key => $value) {
				$labels[] = $value['month'];
				$dataset['data'][] = intval($value['images']);
			}
		}

		$return_data['labels'] = $labels;
		$return_data['dataset'] = $dataset;
		echo json_encode($return_data);
	}

	function categorizeuploads()
	{
		$data = $this->analytics_model->categorizeuploads();
		$colors = array('#a3e1d4', '#dedede', '#b5b8cf');
		$return_data = array();
		$counter = 0;
		foreach ($data as $key => $value) {
			$return_data[$counter]['value'] = intval($value);
			$return_data[$counter]['color'] = $colors[$counter];
			$return_data[$counter]['label'] = $key;
			$return_data[$counter]['hightlight'] = "#1ab394";
			$counter++;
		}

		echo json_encode($return_data);
	}

	function monthlymodal()
	{
		$data = $this->analytics_model->getmonthlyuploadstatistics();
		$return_data = array();

		foreach ($data as $key => $value) {
			$return_data[] = array($value['month'], intval($value['images']));
		}
		echo json_encode($return_data);
	}

	function uploadspercategory()
	{
		$data = $this->analytics_model->getuploadsbycategory();
		$colors = array('#a3e1d4', '#dedede', '#b5b8cf');
		$return_data = array();
		$counter = 0;
		$color_counter = 0;

		if ($data) {
			foreach ($data as $key => $value) {
				$color_counter = $counter;
				if($color_counter > 2)
				{
					$color_counter = 0;
				}
				$return_data[$counter]['value'] = intval($value['images']);
				$return_data[$counter]['color'] = $colors[$color_counter];
				$return_data[$counter]['label'] = $value['category_name'];
				$return_data[$counter]['hightlight'] = "#1ab394";
				$counter++;
			}
		}

		echo json_encode($return_data);
	}

	function uploadsperevent()
	{
		$data = $this->analytics_model->getuploadsbyevent();
		$colors = array('#a3e1d4', '#dedede', '#b5b8cf');
		$return_data = array();
		$counter = 0;
		$color_counter = 0;

		if ($data) {
			foreach ($data as $key => $value) {
				$color_counter = $counter;
				if($color_counter > 2)
				{
					$color_counter = 0;
				}
				$return_data[$counter]['value'] = intval($value['images']);
				$return_data[$counter]['color'] = $colors[$color_counter];
				$return_data[$counter]['label'] = $value['event_name'];
				$return_data[$counter]['hightlight'] = "#1ab394";
				$counter++;
			}
		}

		echo json_encode($return_data);
	}
}
<?php
if(!defined("BASEPATH")) exit("No direct access to the script is allowed");

/**
* 
*/
class calendar extends MY_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('calendar_model');
	}

	function load_general_calendar()
	{
		$data['content_page'] = 'calendar/general_calendar';
		$data['all_dates'] = $this->calendar_model->load_general_calendar();

		$this->template->call_admin_template($data);

	}
}
?>
<?php if (!defined("BASEPATH")) exit("No direct access to the script is allowed");

class Template extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function call_admin_template($data = NULL)
	{
		$this->load->view('admin_template', $data);
	}
}
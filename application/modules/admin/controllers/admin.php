<?php if (!defined("BASEPATH")) exit("No direct access to the script is allowed");

/**
* 
*/
class admin extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->module('upload');
		$this->load->module('template');
	}
	public function index()
	{
		$data = array();
		$this->template->call_admin_template($data);
		
	}

	public function showdashboard()
	{
		$data['error'] = '';
		$data['message'] = '';
		$data['content_view'] = 'admin/admin_view';
		$this->load->view("admin_view", $data);	
	}

}

?>
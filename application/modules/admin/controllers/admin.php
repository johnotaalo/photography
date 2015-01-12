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
	}
	public function index()
	{
		$data['error'] = '';
		$data['message'] = '';
		$this->load->view("admin_view", $data);
	}

}

?>
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
		$data['error'] = '';
		$data['message'] = '';
		$data['content_page'] = 'admin/dashboard';
		$this->template->call_admin_template($data);
		// $this->load->view("template/call_admin_template", $data);
	}

	public function gallery()
	{
		$data['content_page'] = 'admin/gallery';
		$this->template->call_admin_template($data);
	}

	public function models()
	{
		echo "This is the models section";die();
	}
	public function events()
	{
		$data['content_page'] = 'admin/events';
		$this->template->call_admin_template($data);
	}
	public function fun_stuff()
	{
		echo "This is the fun stuff area";die();
	}

}

?>
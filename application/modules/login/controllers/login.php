<?php if(!defined("BASEPATH")) exit("No direct access to scripts are allowed");
/**
* 
*/
class login extends MY_Controller
{
	function __construct()
	{
		parent:: __construct();
	}

	function index()
	{
		$data['content_page'] = 'login/login';
		$data['title'] = 'Photography | Login Page';

		$this->template->call_login_template($data);	
	}

	function sign_up()
	{
		$data['content_page'] = 'login/sign_up';
		$data['title'] = 'Photography | Sign-up Page';

		$this->template->call_login_template($data);
	}

	function user_details()
	{
		// echo $user_id;die;
		// echo "There is an id";die;
		$userdetails = $this->login_model->get_user_details();
		return $userdetails;
	}
}

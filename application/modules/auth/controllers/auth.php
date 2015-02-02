<?php
if(!defined("BASEPATH")) exit("No direct access to the script is allowed.");
/**
* 
*/
class auth extends MY_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('auth_model');
	}

	function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$hash_pass = md5($password);

		$authenticate = $this->auth_model->authenticate($username,$hash_pass);
		
		if ($authenticate) {
			$user = array(
						'userid' => $authenticate[0]['user_id'],
						'usertype' => $authenticate[0]['usertype'],
						'logged_in' => TRUE
						);
		} else {
			$user['logged_in'] = FALSE;
		}
		
		$this->session->set_userdata($user);
		$redirect = $this->session->userdata('usertype');
		// echo $redirect;die();
		redirect(base_url() . $redirect);

	}

	function sign_up()
	{
		echo "Welcome to the sign up page option...";
	}
}

?>
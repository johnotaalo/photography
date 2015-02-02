<?php if (!defined("BASEPATH")) exit("No direct access to the script is allowed");

/**
* 
*/
class Login extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		$this->logout();
		$this->load->view("login_view");
	}

	function authenticate()
	{
		$uname = $this->input->post("username");
		$upass = md5($this->input->post("password"));
		
		$verification = $this->login_model->authentication($uname,$upass);
		// echo "<pre>";print_r($verification);echo "</pre>";die();
		
		if ($verification['log'] == TRUE) {
			$userid = $verification['user_id'];
			$usertype = $verification['usertype'];

			$data = array(
				'logged_in' => TRUE,
				'userid' => $userid,
				'usertype' => $usertype
			);

			$this->session->set_userdata($data);

			$session_details = $this->session->all_userdata();
			// echo "<pre>";print_r($session_details);die();
			$usertype = $this->session->userdata('usertype');
			
			redirect(base_url().$usertype);
		} else {
			echo "The credentials you have provided are erroneous";
			// redirect(base_url().'login');
		}
		
	}

	function check_login()
	{
		$user_id = $this->session->userdata('userid');
		$logged_in = $this->session->userdata('logged_in');

		if ($logged_in == FALSE) {
			redirect(base_url('login'));
		} 
		
	}

	function signup($value=NULL)
	{
		if ($value==NULL) {
			$this->load->view('signup_view');
		} else {
			echo "Loading...";
		}
	}


	function logout()
	{
		$this->session->sess_destroy();
	}

	function user_details()
	{
		// echo $user_id;die;
		// echo "There is an id";die;
		$userdetails = $this->login_model->get_user_details();
		return $userdetails;
	}
}

?>
<?php if (!defined("BASEPATH")) exit("No direct access to the script is allowed");

/**
* 
*/
class Models extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_models');
	}

	public function modellist()
	{
		$data['content_page'] = 'models/v_models';
		$this->template->call_admin_template($data);
	}
	public function newmodel()
	{
		$data['content_page'] = 'models/addmodel';
		$this->template->call_admin_template($data);
	}

	public function addmodel()
	{
		$returned = $this->m_models->addmodel();
		if($returned)
		{
			redirect(base_url().'models');
		}
	}
}
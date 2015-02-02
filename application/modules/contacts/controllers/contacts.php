<?php
// if(!defined("BASEPTH")) exit("No direct access to the script is allowed.");
/**
* 
*/
class contacts extends MY_Controller
{
	
	function __construct()
	{
		parent:: __construct();
	}

	function load_all_contacts()
	{
		$data['content_page'] = 'contacts/contacts';
		$this->template->call_admin_template($data);
	}
}
?>
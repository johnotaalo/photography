<?php if(!defined("BASEPATH")) exit("No direct access to scripts are allowed");
/**
* 
*/
class Home extends MY_Controller
{
	function __construct()
	{
		parent:: __construct();
	}

	function index()
	{
		$this->template->call_front_end_template();
	}
}
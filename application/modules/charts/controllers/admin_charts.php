<?php
if(!defined("BASEPATH")) exit("No direct access to the script is allowed");

/**
* 
*/
class admin_charts extends MY_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->check_login();
	}

	function admin_pie_chart()
	{
		$this->load->view("admin_pie_chart");
	}
}
?>
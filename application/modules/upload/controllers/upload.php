<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends MY_Controller
{
	function __construct(){
		parent::__construct();
	}

	function index()
	{
		$this->load->view('upload');
	}

	function upload_image()
	{
		echo "<pre>";print_r($_FILES);die;
	}
}
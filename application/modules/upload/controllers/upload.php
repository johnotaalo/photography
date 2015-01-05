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
		$path = '';
		$config['upload_path'] = './image_uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);
	}
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload_model extends MY_Model{
	function __construct()
	{
		parent:: __construct();
	}

	function addimages($path, $size_id, $name, $description = NULL)
	{
		$data = array(
			'image_path' => $path,
			'size_id' => $size_id,
			'image_name' => $name,
			'description' => $description,
			'uploaded_by' => $this->session->userdata('userid')
			);

		$query = $this->db->insert('images', $data);

		if($query)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
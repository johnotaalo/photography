<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends MY_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('upload_model');
	}

	function index()
	{
		$data['error'] = '';
		$data['message'] = '';
		$this->load->view('upload', $data);
	}

	function upload_image()
	{
		$path = '';
		$config['upload_path'] = './image_uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);

		if(!$this->upload->do_upload('upload_image'))
		{
			$error = array('error' => $this->upload->display_errors());
		}
		else
		{
			$name = $this->input->post('upload_name');
			$data = array('upload_data' => $this->upload->data());
			$file_name = $data['upload_data']['file_name'];
			$width = $data['upload_data']['image_width'];
			$height = $data['upload_data']['image_height'];
			$dimensions = $width . 'x' . $height;
			$exists = $this->checkifsizeexists($dimensions);
			$description = $this->input->post('upload_description');

			if($exists)
			{
				$size_id = $exists['size_id'];
			}
			else
			{
				$size_id = $this->createnewsize($dimensions);
			}

			
			$path = base_url() . 'image_uploads/'.$file_name;

			$correct_upload = $this->upload_model->addimages($path, $size_id, $name, $description);

			if(!$correct_upload)
			{
				$data['error'] = TRUE;
				$data['message'] = 'There are some problems in the upload';
				$this->load->view('upload', $data);
			}
			else
			{
				$data['error'] = FALSE;
				$data['message'] = 'Upload was successful';
				$this->load->view('upload', $data);
			}

		}
	}

	function checkifsizeexists($size)
	{
		$query = $this->db->query("SELECT count(size_id) as counts, size_id FROM image_sizes WHERE size = '" . $size ."'");
		$result = $query->row();

		if($result->counts < 1)
		{
			return false;
		}
		else
		{
			$data['size_id'] = $result->size_id;
			return $data;
		}
	}

	function createnewsize($dimensions)
	{
		$query = $this->db->insert('image_sizes', array('size' => $dimensions));

		return mysql_insert_id();
	}

	function uploadanimage($upload, $upload_path)
	{
		$message = array();
		$path = '';
		$config['upload_path'] = './'.$upload_path;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);
		if(!$this->upload->do_upload($upload))
		{
			$message['type'] = "failed";
			$message['error'] = $this->upload->display_errors();
		}
		else
		{
			$upload_data = $this->upload->data();
			$message['type'] = "success";
			$message['path'] = base_url() . $upload_path .'/'.$upload_data['file_name'];
		}

		return $message;
	}
}
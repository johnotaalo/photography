<?php
if (!defined("BASEPATH")) exit("No direct access to this script");

/**
* 
*/
class m_models extends CI_Model
{
	function __construct()
	{
		parent:: __construct();
	}
	function deactivatemodel($model_id)
	{
		$sql = "UPDATE models SET active = 0 WHERE model_id = " . $model_id;
		$query = $this->db->query($sql);

		if ($query) {
			return true;
		}
		else
		{
			return false;
		}
	}
	function addmodel()
	{
		$insert_data = array();
		if ($this->input->post()) {
			foreach ($this->input->post() as $key => $value) {
				$insert_data[$key] = $value;
			}

			$result = $this->db->insert('models', $insert_data);

			if ($result) {
				return true;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}
	function get_model_image_count()
	{
		$model_data = array();
		$sql = "SELECT model_id, COUNT(img_id) as images FROM image_model GROUP BY model_id ORDER BY images DESC";
		$query = $this->db->query($sql);
		$result = $query->result_array();

		if ($result) {
			foreach ($result as $key => $value) {
				$model_data[$value['model_id']] = $value['images'];
			}
		}

		return $model_data;
	}

	function getallmodels()
	{
		$model_data = array();
		$sql = "SELECT * FROM models";
		$query = $this->db->query($sql);

		$result = $query->result_array();

		if($result)
		{
			foreach ($result as $key => $value) {
				$model_data[$value['model_id']] = $value;
			}
		}

		return $model_data;
	}

	function getmodelbyid($model_id)
	{
		$model_data = array();
		$sql = "SELECT m.*, COUNT(im.img_id) as imagecounts FROM models m 
		JOIN image_model im ON im.model_id = m.model_id
		WHERE m.model_id = " . $model_id. " LIMIT 1";
		$query = $this->db->query($sql);

		$result = $query->result_array();

		if($result)
		{
			foreach ($result as $key => $value) {
				$model_data[$value['model_id']] = $value;
			}
		}

		return $model_data;
	}

	function searchmodel($search_data)
	{
		$model_data = array();
		$sql = "SELECT * FROM models WHERE model_id = " . $search_data . " 
		OR first_name LIKE '%".$search_data."%'
		OR last_name LIKE '%".$search_data."%'";

		$query = $this->db->query($sql);
		$result = $query->result_array();

		if($result)
		{
			foreach ($result as $key => $value) {
				$model_data[$value['model_data']] = $value;
			}
		}

		return $model_data;
	}

	function getmodeladditiondate()
	{
		$sql = "SELECT MAX(added_on) as most FROM models";
		$query = $this->db->query($sql);

		$row = $query->row();

		if($row->most)
		{
			return $row->most;
		}
		else
		{
			return FALSE;
		}

	}

	function getmodelcount()
	{
		$sql = "SELECT count(model_id) as models FROM models WHERE active = 1";
		$query = $this->db->query($sql);

		$result = $query->row();

		return $result->models;
	}

	function activatemodel($model_id)
	{
		$sql = "UPDATE models SET active = 1 WHERE model_id = ".$model_id;
		$query = $this->db->query($sql);

		if ($query) {
			return true;
		}
		else
		{
			return false;
		}
	}

	function updatemodel($model_id)
	{
		$update_data = $this->input->post();

		if ($update_data) {
			$this->db->where('model_id', $model_id);
			$this->db->update('models', $update_data); 

			return true;
		}
		else
		{
			return false;
		}
	}

	function getmodelimages($model_id)
	{
		$sql = "SELECT i.* FROM images i JOIN image_model im ON im.img_id = i.image_id
		WHERE im.model_id = " . $model_id ." ORDER BY i.date_uploaded DESC";

		$query = $this->db->query($sql);
		$result = $query->result_array();

		if ($result) {
			return $result;
		}
		else
		{
			return false;
		}
	}

	function model_image($model_id, $image_id)
	{
		$insert_data = array('img_id' => $image_id, 'model_id' => $model_id);

		$insertion = $this->db->insert('image_model', $insert_data);

		if($insertion)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}

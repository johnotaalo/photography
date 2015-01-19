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
		$sql = "UPDATE model SET active = 0 WHERE model_id = " . $model_id;
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
		$sql = "SELECT model_id, COUNT(img_id) as images FROM image_model GROUP BY model_id";
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
		$sql = "SELECT m.*, COUNT(im.img_id) as image counts FROM models m 
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
}

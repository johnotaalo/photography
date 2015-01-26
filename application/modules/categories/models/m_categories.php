<?php
if (!defined("BASEPATH")) exit("No direct access to this script");

/**
* 
*/
class m_categories extends CI_Model
{
	function __construct()
	{
		parent:: __construct();
	}

	function get_categories()
	{
		$sql = "SELECT c.*, COUNT(ic.img_id) as image_counts FROM categories c
		LEFT JOIN image_catetgory ic ON ic.category_id = c.category_id
		GROUP BY c.category_id";

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

	function add_categories()
	{
		$insert_data = $this->input->post();

		$result = $this->db->insert('categories', $insert_data);

		if ($result) {
			return true;
		}
		else
		{
			return false;
		}
	}

	function activate_category($category_id)
	{
		$sql = "UPDATE categories SET active = 1 WHERE category_id = " . $category_id;
		$query = $this->db->query($sql);
		if ($query) {
			return true;
		}
		else
		{
			return false;
		}
	}

	function deactivate_category($category_id)
	{
		$sql = "UPDATE categories SET active = 0 WHERE category_id = " . $category_id;
		$query = $this->db->query($sql);
		if ($query) {
			return true;
		}
		else
		{
			return false;
		}
	}

	function get_category_by_id($category_id)
	{
		$sql = "SELECT * FROM categories WHERE category_id = " . $category_id . " LIMIT 1";
		$query = $this->db->query($sql);
		$result = $query->result_array();

		return $result[0];
	}

	function update_category($category_id)
	{
		$update_data = $this->input->post();

		$this->db->where('category_id', $category_id);
		$update = $this->db->update('categories', $update_data);

		if ($update) {
			return true;
		}
		else
		{
			return false;
		}
	}

	function get_active_categories()
	{
		$query = $this->db->get_where('categories', array('active'=>1));
		$result = $query->result_array();
		return $result;
	}
	
}

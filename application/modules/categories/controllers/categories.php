<?php if (!defined("BASEPATH")) exit("No direct access to the script is allowed");

/**
* 
*/
class Categories extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_categories');
	}

	function index()
	{
		$data['category_grid'] = $this->all_categories_grid();
		$data['category_listing'] = $this->category_listing();
		$data['content_page'] = 'categories/categories';
		$this->template->call_admin_template($data);
	}

	function category_listing()
	{
		$listing = '';
		$categories = $this->m_categories->get_categories();

		if ($categories) {
			foreach ($categories as $key => $value) {
				$listing .= '<li><a href="#" data-id = "'.$value['category_id'].'"><i class="fa fa-angle-double-right"></i>'.$value['category_name'].'<span class = "pull-right badge badge-primary">'.$value['image_counts'].'</span></a></li>';
			}
		}
		else
		{
			$listing .= '<li><a href = "#"><i class="fa fa-times"></i>No Categories</a></li>';
		}

		return $listing;
	}

	function all_categories_grid()
	{
		$category_grid = '';
		$categories = $this->m_categories->get_categories();

		if ($categories) {
			foreach ($categories as $key => $value) {
				$category_grid .= '<div class="file-box">
                    <div class="file">
                        <a href="#" class = "category_link" data-id = "'.$value['category_id'].'">
                            <span class="corner"></span>

                            <div class="image">
                                <img alt="'.$value['category_name'].'" class="img-responsive" src="'.$value['cover_image'].'">
                            </div>
                            <div class="file-name">
                                '.$value['category_name'].'
                                <br/>
                                <small>Added: '.date('M j, Y', strtotime($value['added_on'])).'</small>';
                if($value['active'] != 1)
                {
                	$category_grid .= '<a href = "#" class = "label label-danger pull-right activation" data-to = "activate" data-id = "'.$value['category_id'].'">Deactivated</a>';
                }
                else
                {
                	$category_grid .= '<a href = "#" class = "label label-primary pull-right activation" data-to = "deactivate" data-id = "'.$value['category_id'].'">Active</a>';
                }
                $category_grid .= '</div>
                        </a>
                    </div>
                </div>';
			}
		}
		else
		{
			$category_grid .= '<div class = "no_data"><center><div class="i-circle danger" id="message-icon-container"><center><i class="fa fa-times" id="message-icon"></i></center></div></center><center><h3><i></i>There are no categories registered. <br/><br/>Please click on the ("<i>Add a Category</i>") button on the left to add some</h3></center></div>';
		}

		return $category_grid;
	}

	function addcategory()
	{
		$upload = $this->upload->uploadanimage('cover_image', 'image_uploads/covers/categories');
		if ($upload['type'] == 'success') {
			$_POST['cover_image'] = $upload['path'];
			$addition = $this->m_categories->add_categories();
		}

		redirect(base_url() . 'categories');
	}


	//ajax calls
	function get_add_categories_form()
	{
		$this->load->view('add_category');
	}

	function update_category($todo, $category_id)
	{
		$update = '';
		$response = array();
		switch ($todo) {
			case 'activate':
				$update = $this->m_categories->activate_category($category_id);
				$message = 'Activated';
				break;
			case 'deactivate':
				$update = $this->m_categories->deactivate_category($category_id);
				$message = 'Deactivated';
				break;
			case 'update':
					$upload = $this->upload->uploadanimage('cover_image', 'image_uploads/covers/categories');
					if ($upload['type'] == 'success') {
						$_POST['cover_image'] = $upload['path'];
					}
					$update = $this->m_categories->update_category($category_id);
					$message = "Updated";
				break;
			default:
				# code...
				break;
		}

		if($update)
		{
			if($todo == 'update')
			{
				redirect(base_url().'categories');
			}
			$response['type'] = 'Success';
			$response['message'] = 'The Category has successfully been ' . $message;
		}
		else
		{
			$response['type'] = 'Fail';
			$response['message'] = 'The Category has not been ' . $message;
		}

		echo json_encode($response);
	}

	function get_category_by_id($category_id)
	{
		$response = array();
		$category_details = $this->m_categories->get_category_by_id($category_id);
		if ($category_details) {
			$response['type'] = 'Success';
			$response['data'] = $category_details;
		}
		else
		{
			$response['type'] = 'Error';
			$response['message'] = 'Cannot retrieve details at this time. Try again later';
		}

		echo json_encode($response);
	}
}
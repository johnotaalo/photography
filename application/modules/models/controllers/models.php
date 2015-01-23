<?php if (!defined("BASEPATH")) exit("No direct access to the script is allowed");

/**
* 
*/
class Models extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_models');
	}

	public function getlatestaddition()
	{
		$addeddate = $this->m_models->getmodeladditiondate();
		if($addeddate)
		{

			$addeddate = date('dS F, Y', strtotime($addeddate));
		}
		else
		{
			$addeddate = 'None';
		}
		return $addeddate;
	}
	public function modellist()
	{
		$data['display_date'] = $this->getlatestaddition();
		$data['model_count'] = $this->m_models->getmodelcount();
		$data['table'] = $this->createmodels('table');
		$data['grid'] = $this->createmodels();
		$data['content_page'] = 'models/v_models';
		// echo "<pre>";print_r($data['grid']);die();
		$this->template->call_admin_template($data);
	}
	public function newmodel()
	{
		$data['content_page'] = 'models/addmodel';
		$this->template->call_admin_template($data);
	}

	public function addmodel()
	{
		$success = FALSE;
		$upload_image = 'profile';
		$upload_path = 'image_uploads/modelprofiles';

		$uploaded = $this->upload->uploadanimage($upload_image, $upload_path);

		if($uploaded)
		{
			$path = $uploaded['path'];
			$date = $_POST['dob'];

			$new_date = strtotime($date);
			$new_date = date('Y-m-d', $new_date);
			
			$_POST['dob'] = $new_date;
			$_POST['profile'] = $path;
			$returned = $this->m_models->addmodel();

			if($returned)
			{
				$success = TRUE;
				$data['notification'] = 'success';
				$data['message'] = 'Successfully added model <br /> Check him or her below';
			}
			else
			{
				$success = FALSE;
				$data['notfication'] = 'failed';
				$data['message'] = 'There was a problem adding Model. Please Try Again';
			}
		}
		else
		{
			$success = FALSE;
			$data['notification'] = FALSE;
			$data['message'] = 'There was a problem while uploading your image. Please try again';
		}

		if($success){
			$this->modellist();
		}
		else{
			$data['content_page'] = 'models/addmodel';
			$this->template->call_admin_template($data);
		}
	}

	public function createmodels($type = 'grid')
	{
		$models_section = '';
		$models = $this->m_models->getallmodels();
		if($models)
		{
			switch ($type) {
			case 'grid':
				foreach ($models as $key => $value) {
					$display_date = date('dS F, Y', strtotime($value['dob']));
					$models_section .= '<div class="col-lg-4">
			        <div class="contact-box">
			            <a href="profile.html">
			            <div class="col-sm-4">
			                <div class="text-center">
			                    <img alt="image" class="m-t-xs img-responsive model-image" src="'.$value['profile'].'">
			                    <div class="m-t-xs font-bold">'.$value['occupation'].'</div>
			                </div>
			            </div>
			            <div class="col-sm-8">
			                <h3><strong>'.$value['first_name'].' '.$value['last_name'].'</strong></h3>
			                <p><i class="fa fa-calendar-o"></i> '.$display_date.'</p>
			                <address>
			                    <strong>'.$value['company'].'</strong><br>
			                    '.$value['address'].'
			                    <abbr title="Phone">P:</abbr> '.$value['telephone'].'
			                </address>
			            </div>
			            <div class="clearfix"></div>
			                </a>
			        </div>
			    </div>';
				}
				break;
			
			case 'table':
				$counter = 1;
				foreach ($models as $key => $value) {
					$display_date = date('dS F, Y', strtotime($value['dob']));
					$models_section .= '<tr>';
					$models_section .= '<td>'.$counter.'</td>';
					$models_section .= '<td>'.$value['first_name'].'</td>';
					$models_section .= '<td>'.$value['last_name'].'</td>';
					$models_section .= '<td>'.$value['email'].'</td>';
					$models_section .= '<td>'.$value['telephone'].'</td>';
					$models_section .= '<td>'.$display_date.'</td>';
					$models_section .= '<td><a href = "'.base_url().'models/modelprofile/'.$value['model_id'].'">View Profile</a></td>';
					$models_section .= '<td>';
					if($value['active'] == 1)
					{
						$models_section .= '<a href = "#" class = "label label-primary" id = "activation" data-what = "deactivate" data-id = "'.$value['model_id'].'">Active</a>';
					}
					else
					{
						$models_section .= '<a href = "#" class = "label label-danger" id = "activation" data-what = "activate" data-id = "'.$value['model_id'].'">Deactivate</a>';
					}
					$models_section .= '</td>';
					$models_section .= '</tr>';

					$counter++;
				}
				break;
			default:
				
				break;
			}
		}
		else
		{
			$models_section = '<div class = "empty"><center><h2>No Models Registered Yet. </h2><a class = "btn btn-primary btn-outline" href = "'.base_url().'models/newmodel">Add one Here</a></center>
			</div>';
		}

		return $models_section;
	}
}
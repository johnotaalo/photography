<?php if(!defined("BASEPATH")) exit("No direct access to scripts are allowed");
/**
* 
*/
class events extends MY_Controller
{
	var $event_details;
	// var $path = base_url().'image_uploads/eventsprofile';
	function __construct()
	{
		parent:: __construct();
		$this->load->model('events_model');
		// $this->check_login();
	}

	public function index()
	{
		$this->event_list();
	}

	public function event_list()
	{
		$data['events_count'] = $this->events_model->get_event_counts();
		$data['content_page'] = 'events/events';
		$data['events'] = $this->ss_all_events();
		
		// echo "<pre>";print_r($data);die();
		$this->template->call_admin_template($data);
	}

	public function add_event()
	{
		$data['content_page'] = 'events/add_event';

		$this->template->call_admin_template($data);
	}

	public function register_event()
	{
		$success = FALSE;
		$upload_image = 'cover';
		$upload_path = 'image_uploads/eventsprofiles';

		$uploaded = $this->upload->uploadanimage($upload_image, $upload_path);

		if($uploaded)
		{
			$path = $uploaded['path'];
			$date = $_POST['day'];

			$new_date = strtotime($date);
			$new_date = date('Y-m-d', $new_date);
			
			$_POST['day'] = $new_date;
			$_POST['cover'] = $path;
			$returned = $this->events_model->addevent();

			if($returned)
			{
				$success = TRUE;
				$data['notification'] = 'success';
				$data['message'] = 'Successfully added event <br /> Check it below';
			}
			else
			{
				$success = FALSE;
				$data['notfication'] = 'failed';
				$data['message'] = 'There was a problem adding Event. Please Try Again';
			}
		}
		else
		{
			$success = FALSE;
			$data['notification'] = FALSE;
			$data['message'] = 'There was a problem while uploading your image. Please try again';
		}

		if($success){
			$this->event_list();
		}
		else{
			$data['content_page'] = 'events/add_event';
			$this->template->call_admin_template($data);
		}
	}

	public function event_profile($event_id)
	{
		$eve_details = $this->events_model->get_events_profile($event_id);
		$data['content_page'] = 'events/event_profile';
		$data['eve_details'] = $this->events_model->get_events_profile($event_id);
		$data['months'] = $this->start_to_end($eve_details[0]['start_month']);
		$data['event_images'] = $this->ss_event_images($event_id);
		// echo "<pre>";print_r($data);die();
		$this->template->call_admin_template($data);
	}

	
public function ss_all_events()
	{
		$eve_details = $this->events_model->call_all_events();
		// echo "<pre>";print_r($eve_details);die();
		$count = 0;
		$this->event_details .= "<tbody>";
		if ($eve_details == NULL) {
				$this->event_details .= '<tr>';
				$this->event_details .= '<td colspan="5"><center>No record found in the database...</center></td>';
				$this->event_details .= '</tr>';
		} else {
			foreach ($eve_details as $key => $value) {
				$month = $this->start_to_end($value['start_month']);
				$count++;
				$this->event_details .= '<tr>';
				$this->event_details .= '<td>'.$count.'</td>';
				$this->event_details .= '<td>'.$value['event_name'].'</td>';
				$this->event_details .= '<td>'.$value['place'].'</td>';
				$this->event_details .= '<td>'.$month.' '.$value['start_Date'].' , '.$value['start_year'].'</td>';
				$this->event_details .= '<td><a href = "'.base_url().'events/event_profile/'.$value['event_id'].'">View event</a></td>';
				$this->event_details .= '</tr>';
			}
		}
		$this->event_details .= "</tbody>";

		// echo "<pre>";print_r($this->event_details);die();
		return $this->event_details;
	}

	function add_images($event_id)
	{
		$data['content_page'] = 'events/add_images';
		$this->template->call_admin_template($data);
	}

	private function ss_event_images($event_id)
	{
		$images = $this->events_model->get_events_images($event_id);
		// echo "<pre>";print_r($images);die();

		if ($images) {
			foreach ($images as $key => $value) {
				// echo "<pre>";print_r($value['image_path']);die();
				$path = $value['image_path'];
                $load_images = '<a class="fancybox" href="'.$value['image_path'].'" title="Picture 1">
		                            <img alt="image"  src="'.$path.'" />
		                        </a>';
			}
		} else {
			$load_images = '<div class = "empty"><center><h2>No Images of this event uploaded yet. </h2><a class = "btn btn-primary btn-outline" href = "'.base_url().'events/add_images/'.$event_id.'">Add Images here</a></center>
			</div>';
		}
		
		// echo "<pre>";print_r($load_div);die();
		
        return $load_images;
	}

	function ajax_event_images($event_id)
	{
		$return_data = array();
		$pictures_section = '';
		$all_pictures = '';
		$model_images = $this->events_model->geteventimages($event_id);

		if ($model_images) {
			$pictures_section .= '<div class="carousel slide" id="carousel2">
                                <ol class="carousel-indicators">';
            $counter = 0;
            $first_five = array_slice($model_images, 0, 5);
			foreach ($first_five as $key => $value) {
				if($counter == 0){
					$pictures_section .= '<li data-slide-to = "'.$counter.'" data-target = "#carousel2" class = "active"></li>';
				}
				else
				{
					$pictures_section .= '<li data-slide-to = "'.$counter.'" data-target = "#carousel2"></li>';
				}
				$counter++;
			}
			$pictures_section .='</ol>
			<div class="carousel-inner">';

			$counter = 0;
			foreach ($first_five as $key => $value) {
				if ($counter == 0) {
					$pictures_section .= '<div class = "item active">';
				}
				else
				{
					$pictures_section .= '<div class = "item">';
				}

				$pictures_section .= '<img alt="image"  class="img-responsive carousel_image" src="'.$value['image_path'].'">
				<div class = "carousel-caption">
					<p>'.$value['description'].'</p>
				</div></div>';

				$counter++;

			}
			$pictures_section .= '
                                <a data-slide="prev" href="#carousel2" class="left carousel-control">
                                    <span class="icon-prev"></span>
                                </a>
                                <a data-slide="next" href="#carousel2" class="right carousel-control">
                                    <span class="icon-next"></span>
                                </a>
                            </div></div>';
            $first_three = array_slice($model_images, 0, 3);
            $pictures_section .= '<br/><center><div class = "row">';
            foreach ($first_three as $key => $value) {
            	$pictures_section .= '<a href = "'.$value['image_path'].'" class = "fancybox" title = "'.$value['image_name'].'">
            	<img src = "'.$value['image_path'].'" alt = "'.$value['image_name'].'"
            	</a>';
			}
            $pictures_section .= '</div></center>';

            foreach ($model_images as $key => $value) {
            	$all_pictures .= '<a href = "'.$value['image_path'].'" class = "fancybox" title = "'.$value['image_name'].'">
            	<img src = "'.$value['image_path'].'" alt = "'.$value['image_name'].'"
            	</a>';
            }
		}
		else
		{
			$pictures_section .= '<div class = "no_data">
			<center><h1>No images Here!</h1>
			<a class = "btn btn-danger btn-outline upload_caller">Scroll Down to Upload Some</a></center>
			</div>';

			$all_pictures = $pictures_section;
		}

		$return_data['pictures_section'] = $pictures_section;
		$return_data['all_pictures'] = $all_pictures;

		echo json_encode($return_data);
	}

	public function start_to_end($begin)
	{

		//If statement to convert the number to names of the months for start
				if ($begin==1) {$start = 'January'; }else if($begin==2) {$start = 'February'; } else if($begin==3) {$start = 'March'; }else if($begin==4) {$start = 'April'; }else if($begin==5) {$start = 'May'; }
					else if($begin==6) {$start = 'June'; }else if($begin==7) {$start = 'July'; }else if($begin==8) {$start = 'August'; }else if($begin==9) {$start = 'September'; }
						else if($begin==10) {$start = 'October'; }else if($begin==11) {$start = 'November'; }else if($begin==12) {$start = 'December'; }

			return $start;
	}

}
?>
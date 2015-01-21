<?php if (!defined("BASEPATH")) exit("No direct access to the script is allowed");

/**
* 
*/
class admin extends MY_Controller
{
	var $event_details;
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}
	public function index()
	{
		$data['error'] = '';
		$data['message'] = '';
		$data['events'] = $this->admin_model->get_event_counts();
		$data['models'] = $this->admin_model->get_model_count();
		$data['content_page'] = 'admin/dashboard';

		// echo "<pre>";print_r($data);die();
		$this->template->call_admin_template($data);
		// $this->load->view("template/call_admin_template", $data);
	}

	public function gallery()
	{
		$data['content_page'] = 'admin/gallery';
		$this->template->call_admin_template($data);
	}

	
	public function events()
	{
		$data['events_count'] = $this->admin_model->get_event_counts();
		$data['content_page'] = 'admin/events';
		$data['events'] = $this->ss_all_events();
		// echo "<pre>";print_r($data);die();
		$this->template->call_admin_template($data);
	}

	public function event_profile($event_id)
	{
		$data['content_page'] = 'admin/event_profile';

		$this->template->call_admin_template($data);
	}

	public function email_send()
	{
		$recepient = $this->input->post('email_address');
		$subject = $this->input->post('subject');
		$message = $this->input->post('message');
		$this->email($id=NULL, $recepient, $subject, $message);
		redirect('admin');
	}

	public function ss_all_events()
	{
		$eve_details = $this->admin_model->call_all_events();
		// echo "<pre>";print_r($eve_details);die();
		
		$count = 0;
		$this->event_details .= "<tbody>";
		if ($eve_details == NULL) {
				$this->event_details .= '<tr>';
				$this->event_details .= '<td colspan="5"><center>No record found in the database...</center></td>';
				$this->event_details .= '</tr>';
		} else {
			foreach ($eve_details as $key => $value) {
				$count++;
				$this->event_details .= '<tr>';
				$this->event_details .= '<td>'.$count.'</td>';
				$this->event_details .= '<td>'.$value['event_name'].'</td>';
				$this->event_details .= '<td>'.$value['place'].'</td>';
				$this->event_details .= '<td>'.$value['date'].'</td>';
				$this->event_details .= '<td><a href = "'.base_url().'admin/event_profile/'.$value['event_id'].'">View event</a></td>';
				$this->event_details .= '</tr>';
			}
		}
		$this->event_details .= "</tbody>";

		return $this->event_details;
	}
	

}

?>
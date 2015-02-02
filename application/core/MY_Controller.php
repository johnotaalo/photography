<?php if (!defined("BASEPATH")) exit("No direct access to the script is allowed");

/**
* 
*/

// error_reporting(0);
class MY_Controller extends MX_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->module('upload');
		$this->load->module('template');
		$this->load->module('security');
		$this->load->model('upload/upload_model');
		$this->security->encryption_parameters();
		$this->load->module('login');
	}

	function get_active($table)
	{
		$data = array();
		$response = '';
		if ($table == 'category') {
			$query = $this->db->get_where($table, array('active' => 1));
		}
		else
		{
			$query = $this->db->get($table);
		}

		$result = $query->result_array();

		if ($result) {
			switch ($table) {
				case 'categories':
					foreach ($result as $key => $value) {
						// $data[$key]['id'] = $value['category_id'];
						// $data[$key]['text'] = $value['category_name'];
						$data[] = array('id' => $value['category_id'], 'text' => $value['category_name']);
					}
					break;
				
				case 'events':
					foreach ($result as $key => $value) {
						// $data[$key]['id'] = $value['event_id'];
						// $data[$key]['text'] = $value['event_name'];

						$data[] = array('id' => $value['event_id'], 'text' => $value['event_name']);
					}
					break;
				default:
					# code...
					break;
			}
		}

		echo json_encode($data);


	}

	public function email($id=NULL, $recepient, $subject, $message)  
    {
        $time=date('Y-m-d');
        
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => "chrisrichrads@gmail.com",
            'smtp_pass' => "joshuaSUN"
            );
        
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");

        $this->email->from('chrisrichrads@gmail.com', 'PHOTOGRAPHY');
        $this->email->to($recepient);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->set_mailtype("html");
        // if(!is_null($attached_file)){
        //  $this->email->attach($attached_file);
        // }
        // $this->m_admin->send_mail($id, $recepient, $subject, $message);
        if($this->email->send())
            {   

               // $this->m_admin->send_mail();
            } else 
            {
                show_error($this->email->print_debugger());
            }
        
    }

    function check_login()
    {
        $user_id = $this->session->userdata('userid');
        $logged_in = $this->session->userdata('logged_in');

        if ($logged_in == TRUE) {
        } else {
            redirect(base_url('login'));
        }
        
    }

}

?>
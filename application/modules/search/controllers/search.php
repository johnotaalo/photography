<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends MY_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('search_model');
	}

	function index()
	{
		$start = microtime(true);
		$search_parameter = $this->input->post('search');
		$results = $this->search_model->searchdatabase();
		$counts = array();
		$models_results = $events_results = $images_results = '<table class = "table table-hover">';
		
		if ($results) {
			foreach ($results[0] as $key => $value) {
				$counts[$key] = count($value);
				if($value)
				{
					if($key == 'models')
					{
						foreach ($value as $k => $v) {
							$models_results .= '<tr>';
							$models_results .= '<td class="model-image"><a href="#"><img alt="image" class="img-circle" src="'.$v['profile'].'"></td>';
							$models_results .= '<td class="project-title">'.$v['first_name'].' '. $v['last_name'].'</td>';
							$models_results .= '</tr>';
						}
					}
				}
			}
		}
		$models_results .= $events_results .= $images_results .= '</table>';
		$data['search_parameter'] = $search_parameter;
		$data['highly_rated'] = $this->create_highly_rated();
		$data['result_counts'] = $counts;
		$data['models_results'] = $models_results;
		$data['content_page'] = 'search/search_results';
		$end = microtime(true);
		$time = number_format(($end - $start), 2);

		$data['execution'] = $time;
		$this->template->call_admin_template($data);
	}

	function create_highly_rated()
	{
		$highly_rated = '';
		$data = $this->search_model->highly_rated_model();
		if ($data) {
			$profile_link = base_url() . 'models/modelprofile/' . $this->security->encrypt_data($data->model_id);
			$highly_rated .= '<div class="ibox-content no-padding border-left-right"><img alt="image" class="img-responsive" src="'.$data->profile.'"></div>';
			$highly_rated .= '<div class="ibox-content profile-content">';
			$highly_rated .= '<h4><strong>'.ucwords(strtolower($data->first_name .' '. $data->last_name)).'</strong></h4>';
			$highly_rated .= '<p><i class="fa fa-map-marker"></i>'.$data->address.'</p>';
			$highly_rated .= '<h5>About '.ucwords(strtolower($data->first_name)).'</h5>';
			$highly_rated .= '<p>'.ucwords(strtolower($data->first_name)).' has '.$data->images.' uploads to her name an is the highest rated model as of today: '.date('D d-M-Y').'</p>';
			$highly_rated .= "<a href = '{$profile_link}' class = 'btn btn-success btn-block'><i class = 'fa fa-angle-double-right'></i> ".ucwords(strtolower($data->first_name))."'s Profile</a>";
			$highly_rated .= '</div>';
		}
		else
		{

		}

		return $highly_rated;
	}
}
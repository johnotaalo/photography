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
		$models_results = $events_results = $images_results = '<table class = "table search_result">';
		
		if ($results) {
			foreach ($results[0] as $key => $value) {
				$counts[$key] = count($value);
				if($value)
				{
					if($key == 'models')
					{
						foreach ($value as $k => $v) {
							$models_results .= '<tr>';
							$models_results .= '<td><a href="#" ><img class="model-image" alt="image" class="img-circle" src="'.$v['profile'].'"></td>';
							$models_results .= '<td class="model-title"><h3><a href="#">'.ucwords(strtolower($v['first_name'].' '. $v['last_name'])).'</a></h3><br />
							<a class="search-link" href = "'.base_url() . 'models/modelprofile/' . $this->security->encrypt_data($v['model_id']).'">'.base_url() . 'models/modelprofile/' . $this->security->encrypt_data($v['model_id']).'</a><br/>
							<p>'.ucwords(strtolower($v['first_name'].' '. $v['last_name'])).' is a '.ucwords(strtolower($v['occupation'])).' at '.ucwords(strtolower($v['company'])).'</p></td>';
							$models_results .= '<td>Model Since: <br />'.date('d-M-Y', strtotime($v['added_on'])).'<br />';
							if ($v['active'] == 1) {
								$models_results .= '<a href = "" class = "label label-primary" style = "width: 100%;display:block;">Active</a>';
							}
							else
							{
								$models_results .= '<a href = "" class = "label label-danger" style = "width: 100%;display:block;">Not Active</a>';
							}
							$models_results .= '</td>';
							$models_results .= '</tr>';
						}
					}
					else if ($key == 'events') {
						foreach ($value as $k => $v) {
							$events_results .= '<tr>';
							$events_results .= '<td><a href="#" ><img class="model-image" alt="image" class="img-circle" src="'.$v['cover'].'"></td>';
							$events_results .= '</tr>';
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
		$data['events_results'] = $events_results;
		$data['images_results'] = $images_results;
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
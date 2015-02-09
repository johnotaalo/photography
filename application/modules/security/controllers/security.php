<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Security extends MY_Controller
{
	var $encryption_array = '', $limiter = '_';
	function __construct(){
		parent::__construct();
		
	}

	function encryption_parameters()
	{
		$this->encryption_array = array(
			'1' => 'lnhuyqazwsx',
			'2' => 'nhddypoknsw',
			'3' => 'hppssedcfr5',
			'4' => 'hjuukred2d8',
			'5' => 'asdasybg5hd',
			'6' => 'vghudtlc55w',
			'7' => 'ijuallckk94',
			'8' => 'pmnhycjck89',
			'9' => 'rixdojcm94t',
			'0' => 'poopcud52lo'
			);

		return $this->encryption_array;

	}
	function encrypt_data($str)
	{
		$values = str_split($str);
		
		if(count($values) > 1)
		{
			$encryptions = array();
			foreach ($values as $key => $value) {
				$encryptions[] = $this->encryption_array[$value];
			}
			$encrypted_value = implode('_', $encryptions);
		}
		else
		{
			$encrypted_value = $this->encryption_array[$values[0]];
		}

		return $encrypted_value;
	}

	function decrypt_data($encrypted_str)
	{
		$real_number = '';
		// echo "<pre>";print_r($this->encryption_array);die;
		$str_array = explode('_', $encrypted_str);
		if (count($str_array) > 1) {
			foreach ($str_array as $key => $value) {
				foreach ($this->encryption_array as $k => $v) {
					if ($v == $value) {
						$real_number .= $k; 
					}
				}
			}
		}
		else
		{
			foreach ($this->encryption_array as $key => $value) {
				if($value == $encrypted_str)
				{
					$real_number = $key;
				}
			}
		}


		return $real_number;
	}

	function getexecutiontime()
	{
		$start = microtime(true);
		$end = microtime(true);

		$time = number_format(($end - $start), 2);
		

		return $time;
	}


}
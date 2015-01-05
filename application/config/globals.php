<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

$config['copyrights']				=	"&copy ".date('Y')." All Rights Reserved";


$config["login_timeout_max"]		=	30;		//minutes
$config["default_password"]         =   123456;

$config['starting_year']			=	2014;

/*Security Policy*/
$config['attemplimit'] = 4;
$config['normal_expiry'] = 30;
$config['temp_expiry'] = 14;
$config['password_min_length'] = 8;

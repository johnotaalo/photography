<!DOCTYPE html>
<html class="fullscreen">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/frontend/img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/frontend/img/apple_icons_57x57.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>assets/frontend/img/apple_icons_72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>assets/frontend/img/apple_icons_114x114.png">
<title>Diamond | Photography</title>
<link href="http://fonts.googleapis.com/css?family=Roboto:400,700,400italic" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Muli" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/theme.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/responsive.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/custom.css" type="text/css" media="all" />
</head>
<body>
	
 			<?php 
 				$this->load->view("front_end_header");
 			?>
           
    
	<a href="javascript:void(0)" class="control_toggle"></a>
    
    	<?php
    		$this->load->view($content_page);
    	?>
</body>
</html>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<title>Photography | Login Page</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="<?php echo base_url('assets/plugins/jquery-ui-1.10.4/themes/base/minified/jquery-ui.min.css') ?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/plugins/bootstrap-3.2.0/css/bootstrap.min.css') ?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/plugins/font-awesome-4.2.0/css/font-awesome.min.css') ?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/css/animate.min.css') ?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/css/style.min.css') ?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/css/style-responsive.min.css') ?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/css/theme/default.css') ?>" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<div class="login-cover">
	    <div class="login-cover-image"><img src="<?php echo base_url('assets/img/login-bg/bg-3.jpg') ?>" data-id="login-cover-image" alt="" /></div>
	    <div class="login-cover-bg"></div>
	</div>
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
	    <!-- begin login -->
        <div class="login login-v2" data-pageload-addclass="animated flipInX">
            <!-- begin brand -->
            <div class="login-header">
                <div class="brand">
                    <span class="logo"></span> Photography
                    <small>Best photography you can get</small>
                </div>
                <!-- <div class="icon">
                    <i class="fa fa-sign-in"></i>
                </div> -->
            </div>
            <!-- end brand -->
            <div class="login-content">
                <?php echo form_open(base_url().'login/authenticate'); ?>
                    <div class="form-group m-b-20">
                        <input type="text" class="form-control input-lg" placeholder="Username" name="username" id="username" />
                    </div>
                    <div class="form-group m-b-20">
                        <input type="password" class="form-control input-lg" placeholder="Password" name="password" id="password"/>
                    </div>
                    <div class="checkbox m-b-20">
                        <label>
                            <input type="checkbox" /> Remember Me
                        </label>
                    </div>
                    <div class="login-buttons">
                        <button type="submit" class="btn btn-success btn-block btn-lg">Login</button>
                    </div>
                    <div class="m-t-20">
                        Not a member yet? Click <a href="<?php echo base_url().'login/signup'; ?>">here</a> to register.
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
        <!-- end login -->
        
       
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url('assets/plugins/jquery-1.8.2/jquery-1.8.2.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/plugins/jquery-ui-1.10.4/ui/minified/jquery-ui.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/plugins/bootstrap-3.2.0/js/bootstrap.min.js') ?>"></script>
	<!--[if lt IE 9]>
		<script src="<?php echo base_url('assets/crossbrowserjs/html5shiv.js') ?>"></script>
		<script src="<?php echo base_url('assets/crossbrowserjs/respond.min.js') ?>"></script>
		<script src="<?php echo base_url('assets/crossbrowserjs/excanvas.min.js') ?>"></script>
	<![endif]-->
	<script src="<?php echo base_url('assets/plugins/slimscroll/jquery.slimscroll.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/plugins/jquery-cookie/jquery.cookie.js') ?>"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?php echo base_url('assets/js/login-v2.demo.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/apps.min.js') ?>"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
			LoginV2.init();
		});
	</script>
	
</body>

</html>

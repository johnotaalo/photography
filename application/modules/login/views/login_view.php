<!-- <!-- <!DOCTYPE html-->
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
	
	<!-- ================== BEGIN CSS STYLE ================== -->
	   <!--css files go here-->
	<!-- ================== END CSS STYLE ================== -->
</head>
<body>

    <div class="login-form">
    	<?php echo form_open(base_url().'login/authenticate'); ?>
            <div>
                <div>Username</div>
                <div><input class="" id="username" name="username" type="text" /></div>
            </div>
            <div>
                <div>Password</div>
                <div><input class="" id="password" name="password" type="password" /></div>
            </div>
            <div>
                <div>
                    <button type="submit">Login</button>
                </div>
            </div>
        <?php echo form_close(); ?>
    </div>
    
</body>
</html>

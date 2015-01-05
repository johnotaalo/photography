<!DOCTYPE html>
<html>
<head>
	<title>Administrator - Upload</title>
	<style type="text/css">
	form
	{
		width: 40%;
	}

	input[type = "text"], input[type = "file"]
	{
		width: 100%;
		padding: 10px;
	}

	textarea
	{
		padding: 10px;
		width: 100%;
		height: 100px;
	}

	button, input[type = "submit"], input[type = "reset"]
	{
		padding: 5px;
		width: 90px;
	}
	</style>
</head>
<body>
	<form method = "POST" name = "image_uploader" enctype="multipart/form-data" action = "<?php echo base_url(); ?>upload/upload_image">
		<input type = "file" name = "upload_image" /><br/>
		<input type = "text" name = "upload_name" /><br/>
		<textarea name = 'upload_description'></textarea><br/>

		<button type = 'submit' name = "upload_button">Upload</button>
		<input type = 'reset' />
	</form>
</body>
</html>
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
		width: 80%;
		padding: 10px;
	}

	textarea
	{
		padding: 10px;
		width: 80%;
		height: 100px;
	}

	button, input[type = "submit"], input[type = "reset"]
	{
		padding: 5px;
		width: 90px;
	}

	.form_element
	{
		width: 100%;
	}
	.description
	{
		width: 20%;
	}

	span.error p
	{
		color: red;
	}

	span.success p
	{
		color: green;
	}
	</style>
</head>
<body>
	<form method = "POST" name = "image_uploader" enctype="multipart/form-data" action = "<?php echo base_url(); ?>upload/upload_image">
		<div class = "form_element"><span class = "description">Image:</span> <input type = "file" name = "upload_image" required/></div>
		<div class = "form_element"><span class = "description">Name:</span> <input type = "text" name = "upload_name" required/></div>
		<div class = "form_element"><span class = "description">Description:</span> <textarea name = 'upload_description' required></textarea></div>

		<button type = 'submit' name = "upload_button">Upload</button>
		<input type = 'reset' />

		<div class = "message_box"><span class = "<?php if($error){ echo 'error';}else echo 'success' ?>"><p><?php echo $message; ?></p></span></div>
	</form>
</body>
</html>
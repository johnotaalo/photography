	<style type="text/css">
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

	.sub-item
	{
		/*margin: .5px;*/
		color: #fff;
		cursor: pointer;
		height: 200px;
		background-color: #fff;
		background-repeat: no-repeat;
		background-position: center;
		/*background-attachment: fixed;*/
		background-size: cover;
	}
	</style>
	<div class="wrapper wrapper-content animated fadeInRight">
	<div class = "row col-md-8">
		<div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Uploading Images <small>Upload Images per category or per event</small></h5>
            </div>
            <div class="ibox-content">
				<form method = "POST" name = "image_uploader" enctype="multipart/form-data" action = "<?php echo base_url(); ?>upload/upload_image" class = "form-horizontal">
					<div class="form-group"><label class="col-sm-3 control-label">Upload To:</label>
						<div class="col-sm-9">
							<select name = "upload_to" data-placeholder="Choose what to upload to..." class="form-control chosen-select">
								<option value = "categories">Categories</option>
								<option value = "events">Events</option>
							</select>
						</div>
					</div>

					<div id = "information"><h4></h4></div>
					<div class="form-group"><label class="col-sm-3 control-label">Image:</label><div class="col-sm-9"><input type = "file" name = "upload_image" class = "form-control" multiple = "multiple" required/></div></div>
					<div class="form-group"><label class="col-sm-3 control-label">Name:</label><div class="col-sm-9"><input type = "text" name = "upload_name" class = "form-control" required/></div></div>
					<div class="form-group"><label class="col-sm-3 control-label">Description:</label><div class="col-sm-9"><textarea name = 'upload_description' required class = "form-control"></textarea></div></div>
					<div class = "form-group">
						<button type = 'submit' name = "upload_button" class = "btn btn-primary pull-right">Upload Files</button>
					</div>
					<input type = "hidden" value = "" name = "item_id" />
					<input type = "hidden" value = "" name = "item" />
					<div class = "message_box"><span class = "<?php if($error){ echo 'error';}else echo 'success' ?>"><p><?php echo $message; ?></p></span></div>
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		object = $(document).find('div.sub-item');
		$('.sub-item').click(function(){
			id = $(this).attr('data-id');
			type = $(this).attr('data-item');

			console.log($('#message-body'));
			$('input[name="item_id"]').val(id);
			$('input[name="item"]').val(type);

			$('#information h4').html('Uploading to: ' + type);
			$('#messageModal').modal('hide');
		});

		$('.sub-item').click(function(){
			id = $(this).attr('data-id');
			type = $(this).attr('data-item');

			console.log($('#message-body'));
			$('input[name="item_id"]').val(id);
			$('input[name="item"]').val(type);

			$('#information h4').html('Uploading to: ' + type);
			$('#messageModal').modal('hide');
		});
	});


	$('select[name="upload_to"]').change(function(){
		value = $(this).val();
		$('#messageModal .modal-dialog').addClass('modal-lg');
		if(value === 'events')
		{
			$('#messageModal .modal-title').text('Select an Event');
		}
		else
		{
			$('#messageModal .modal-title').text('Select a Category');
		}

		$.get('<?php echo base_url(); ?>upload/get_display_div/'+value, function(data){
			$('#message-body').html(jQuery.parseHTML(data));
		});

		$('#messageModal').modal('show');
	});

	function passDataAttribute(that)
	{
		id = $(that).attr('data-id');
		type = $(that).attr('data-item');
		$('input[name="item_id"]').val(id);
		$('input[name="item"]').val(type);

		$('#information h4').html('Uploading to: ' + type);
		$('#messageModal').modal('hide');
	}
</script>
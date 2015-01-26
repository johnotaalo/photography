<style type="text/css">
	.image-holder
	{
		width: 100%;
		padding: 40px;
	}

	#imagePreview
	{
		margin: 0 10px 0 100px;
		background-position: center center;
		background-size: cover;
		-webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
		display: inline-block;
		background-color: #6BD7ED;
		background-image: url('<?php echo base_url(); ?>assets/avatar/avatar-male.png');
	}
</style>

<div class="wrapper wrapper-content animated fadeInRight">
	<div class = "row">
		<div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Events <small>Add More events here</small></h5>
            </div>
            <div class="ibox-content">
                <form method="POST" class="form-horizontal" action = "<?php echo base_url(); ?>events/register_event" enctype="multipart/form-data">
	                <div class = "row">
	                	<div class = "col-md-6">
		                    <div class="form-group"><label class="col-sm-3 control-label">Event Name: </label>

		                        <div class="col-sm-9"><input type="text" class="form-control" name = "event_name" placeholder="Event Name" required></div>
		                    </div>

		                    <div class="hr-line-dashed"></div>

		                    <div class="form-group" id="data_1">
	                            <label class="col-sm-3 control-label">Day: </label>
	                            <div class = "col-sm-9">
		                            <div class="input-group date">
		                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control dob" name = "day" required >
		                            </div>
	                            </div>
	                        </div>

		                    <div class="hr-line-dashed"></div>

		                    <div class="form-group"><label class="col-sm-3 control-label">Place: </label>
		                    	<div class="col-sm-9"> <div class="input-group m-b"><span class="input-group-addon"><i class = "fa fa-map-marker"></i></span> <input  required type="text" placeholder="Location" class="form-control" name = "place"></div></div>
		                    </div>

		                    <div class="hr-line-dashed"></div>

		                    <div class="form-group"><label class="col-sm-3 control-label">Description: </label>
								<div class="col-sm-9"><textarea class="form-control" name = "Description" placeholder="Type Description here..." required></textarea></div>
		                    </div>

		                    <div class = "buttons">
		                    	<button type = "submit" class = "btn btn-success">Save</button>
		                    </div>
		                    </div>

		                    <div class = "col-md-6">
		                    	<div class = "image-holder" id = 'imagePreview' style = ""></div>
								<div class="form-group"><label class="col-sm-3 control-label">Cover Image: </label>

									<div class="col-sm-9"><input type = "file" class = "form-control" name = "cover" id = "uploadImage" required/></div>
								</div>
		                    </div>
	                    </div>
                </form>
            </div>
        </div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function () {
		width = $('.image-holder').width();
		height = width - 150;
		width = height;
		$('.image-holder').height(height);
		$('.image-holder').width(width);
		$('#data_1 .input-group.date .dob').datepicker({
            todayBtn: "linked",
            forceParse: false,
            calendarWeeks: true,
            autoclose: true
        });

		$(function() {
			$("#uploadImage").on("change", function()
			{
				var files = !!this.files ? this.files : [];
				if (!files.length || !window.FileReader)  return; // no file selected, or no FileReader support

				if (/^image/.test( files[0].type)){ // only image file
					var reader = new FileReader(); // instance of the FileReader
					reader.readAsDataURL(files[0]); // read the local file

					reader.onloadstart = function(){
						$("#imagePreview").text('Please Wait...');
						$("#imagePreview").css("background-color", "rgba(0,0,0,0.8)");
					}
					reader.onloadend = function(){ // set image data as background of div
						$("#imagePreview").css("background-image", "url("+this.result+")");
						$("#imagePreview").text('');
					}
				}
			});
		});
	});
</script>
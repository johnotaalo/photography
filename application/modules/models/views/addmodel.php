<style type="text/css">
	.image-holder
	{
		height: 150px;
		width: 150px;
		padding: 40px;
		background-color: #f3f3f3;
		border: 1px solid #123;
	}
</style>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class = "row">
		<div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Model Registration <small>Add Models Here</small></h5>
            </div>
            <div class="ibox-content">
                <form method="POST" class="form-horizontal" action = "<?php echo base_url(); ?>models/addmodel">
                <div class = "row">
                	<div class = "col-md-6">
	                    <div class="form-group"><label class="col-sm-3 control-label">First Name: </label>

	                        <div class="col-sm-9"><input type="text" class="form-control" name = "first_name" required></div>
	                    </div>
	                    <div class="form-group"><label class="col-sm-3 control-label">Last Name: </label>

	                        <div class="col-sm-9"><input type="text" class="form-control" name = "last_name" required></div>
	                    </div>

	                    <div class="form-group" id="data_1">
                                <label class="col-sm-3 control-label">Date of Birth: </label>
                                <div class = "col-sm-9">
	                                <div class="input-group date">
	                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control dob" name = "dob" required >
	                                </div>
                                </div>
                            </div>
	                    <div class="hr-line-dashed"></div>
	                    <div class="form-group"><label class="col-sm-3 control-label">Telephone: </label>

	                        <div class="col-sm-9"> <div class="input-group m-b"><span class="input-group-addon"><i class = "fa fa-phone"></i></span> <input  required type="text" placeholder="Telephone" class="form-control" name = "telephone"></div></div>
	                    </div>

	                    <div class="form-group"><label class="col-sm-3 control-label">Email: </label>

	                        <div class="col-sm-9"> <div class="input-group m-b"><span class="input-group-addon">@</span> <input required type="email" placeholder="Email Address" class="form-control" name = "email"></div></div>
	                    </div>
	                   <div class="form-group"><label class="col-sm-3 control-label">Address: </label>

	                        <div class="col-sm-9"><textarea class="form-control" name = "address" required></textarea></div>
	                    </div>
	                    <div class="hr-line-dashed"></div>
	                    <div class="form-group"><label class="col-sm-3 control-label">Occupation: </label>

	                        <div class="col-sm-9"><input type="text" class="form-control" name = "occupation" required></div>
	                    </div>
	                     <div class="form-group"><label class="col-sm-3 control-label">Company: </label>

	                        <div class="col-sm-9"><input type="text" class="form-control" name = "company" required ></div>
	                    </div>

	                    <div class="form-group"><label class="col-sm-3 control-label">Profile Picture: </label>

	                        <div class="col-sm-9"><input type = "file" class = "form-control" name = "profile" required/></div>
	                    </div>

	                    <div class = "buttons">
	                    	<button type = "submit" class = "btn btn-success">Save</button>
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
		$('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });
	});
</script>
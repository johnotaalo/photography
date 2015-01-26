<?php if(isset($notification)){?>
<script type="text/javascript">
	$.gritter.add({
		title: 'Suceess',
		text: '<?php echo $message; ?>',
		time: 2000
	});
	</script>
<?php } ?>

<!--<script type="text/javascript" src = '<?php echo base_url(); ?>assets/datatables/media/js/jquery.js'></script>
<script type="text/javascript" src = '<?php echo base_url(); ?>assets/datatables/media/js/jquery.dataTables.min.js'></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/datatables/media/css/jquery.dataTables.min.css"> -->

<style type="text/css">
	.contact-box
	{
		padding: 10px 0 !important;
	}
	.model-image
	{
		width: 96px;
		height: 80px;
	}

	.description
	{
		width: 64px;
		height: 64px;
	}

	.widget a, a.btn
	{
		color: #fff;
	}

	.icon-green
	{
		background-color: #18a689;
	}

	h4#message-header
	{
		margin-top: 20px;
		font-size: 20px;
		font-weight: 400;
	}
</style>
<div class="wrapper wrapper-content">
<div class = "row">

	<div class="col-lg-3">
		<div class="widget style1 lazur-bg">
			<a href = "newmodel">
				<div class="row">
					<div class="col-xs-4 text-center">
						<i class="fa fa-plus fa-5x"></i>
					</div>
					<div class="col-xs-8 text-right">
						<span> Add Models </span>
						<span>Last Added on: <?php echo $display_date; ?></span>
					</div>
				</div>
			</a>
		</div>
	</div>

	<div class="col-lg-3">
		<div class="widget style1 yellow-bg">
			<a href = "#">
				<div class="row">
					<div class="col-xs-4 text-center">
						<i class="fa fa-users fa-5x"></i>
					</div>
					<div class="col-xs-8 text-right">
						<span>Activate Models</span>
						<h2 class="font-bold" id = "model_counts">0</h2>
					</div>
				</div>
			</a>
		</div>
	</div>

	<div class="col-lg-3">
		<div class="widget style1 navy-bg">
			<a href = "#">
				<div class="row">
					<div class="col-xs-4 text-center">
						<img alt="image" class="description" src="<?php echo base_url(); ?>image_uploads/16302_10152448030667713_4043170001011201714_n.jpg">
					</div>
					<div class="col-xs-8 text-right">
						<span> Most model uploads</span>
						<h2 class="font-bold">0</h2>
					</div>
				</div>
			</a>
		</div>
	</div>

	<div class="col-lg-3">
		<div class="widget style1 red-bg">
			<a href = "#" id = "toggler" data-toggle = 'table'>
				<div class="row">
					<div class="col-xs-4 text-center">
						<i class = "fa fa-table fa-5x" id = "toggle-icon"></i>
					</div>
					<div class="col-xs-8 text-right">
						<span>Toggle view to</span>
						<h4 class="font-bold" id = "navigation-to">Table</h4>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class = "row" id = "models-container">
		<div class="ibox float-e-margins"  id = 'model-table'>
			<div class="ibox-title">
				<h5>Models</h5> <span class="label label-primary">P+</span>
			<div class="ibox-tools">
				<a class="collapse-link">
					<i class="fa fa-chevron-up"></i>
				</a>
			</div>
			</div>
		<div class="ibox-content">
		<div>
			<div>
				<table class = "table table-hover table-bordered" id = "modelstable"><thead>
					<tr>
						<th>#</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email</th>
						<th>Phone Number</th>
						<th>Birthday</th>
						<th>Profile</th>
						<th>Activation</th>
					</tr>
					</thead>
					<tbody>
						<?php echo $table;?>
					</tbody>
				</table>
			</div>
		</div>
		</div>
		</div>

		<div id = "model-grid">
			<?php echo $grid; ?>
		</div>
	</div>


</div>


<!-- modals -->
<div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content animated bounceInDown">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<div id = "image"></div>
				<i class="fa modal-icon" id = "from-icon"></i>
				<i class = "fa fa-arrow-right modal-icon"></i>
				<i class="fa modal-icon" id = "to-icon"></i>
				<h4 class="modal-title">WARNING</h4>
				<center>
					<h3>You are about to <span id = "action"></span> <strong><span id = "model_name"></span>'s Profile!</strong> Are you Sure?</h3>
					<a href="#" class = "btn btn-outline btn-primary" id = "proceed" data-dismiss = 'modal'>Proceed</a>
					<a href="#" class = "btn btn-outline btn-danger" id = "cancel" data-dismiss = 'modal'>Cancel</a>
				</center>

			</div>
		</div>
	</div>
</div>
</div>
<div class="modal inmodal" id="messageModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content animated bounceInDown">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<div class = "i-circle" id = "message-icon-container"><i class="fa" id = "message-icon"></i></div>
				<h4 id = "message-header"></h4>
				<center>
					<p id = "message"></p>
					<button type="button" class="btn btn-success btn-outline" data-dismiss="modal">Got it</button>
				</center>

			</div>
		</div>
	</div>
</div>
<!-- modals -->

<script>
        $(document).ready(function(){
        	getmodelcounts();
        	$('table').dataTable();
            $('.contact-box').each(function() {
                animationHover(this, 'pulse');
            });

            $('#model-table').hide();
            $('#model-grid').show();
           // getpagemodels('grid');

            $('#toggler').click(function(){
            	type = $(this).attr('data-toggle');
            	if(type == 'table')
            	{
            		$(this).attr('data-toggle', 'grid');
            		$('#toggle-icon').removeClass('fa-table');
            		$('#toggle-icon').addClass('fa-th');
            		$('#navigation-to').text('Grid');
            		$('#model-table').show();
            		$('#model-grid').hide();	
            	}
            	else
            	{
            		$(this).attr('data-toggle', 'table');
            		$('#toggle-icon').removeClass('fa-th');
            		$('#toggle-icon').addClass('fa-table');
            		$('#navigation-to').text('Table');
            		$('#model-table').hide();
            		$('#model-grid').show();	
            	}
            	//getpagemodels(type);
            	
            });

            $('.activator').click(function(){
            	modelonmodal($(this).attr('data-id'), $(this).attr('data-crypt'));
            });

            $('#proceed').click(function(){
            	update_model($(this).attr('data-model_id'), $(this).attr('data-to'));
            });
        });

        function getpagemodels(type)
        {
        	$.get('<?php echo base_url(); ?>models/createmodels/'+type, function(data){
        		//$('#models-container').text('Please Wait...');
        		$('#models-container').append(data);
        	});
        }

        function modelonmodal(model_id, model_crypt)
        {
        	$.get('<?php echo base_url(); ?>models/get_ajax_model/'+model_id, function(data){
        		obj = jQuery.parseJSON(data);
        		$('#model_name').text(obj[model_id].first_name +' ' + obj[model_id].last_name);
        		$('#proceed').attr('data-model_id', model_crypt);
        		if((obj[model_id].active) === "1")
        		{
        			$('#from-icon').removeClass('fa-times ');
        			$('#from-icon').css('color', '#18a689 !important');
        			$('#to-icon').css('color', '#ed5565 !important');
        			$('#to-icon').removeClass('fa-check');
        			$('#from-icon').addClass('fa-check');
        			$('#to-icon').addClass('fa-times ');
        			$('#action').text('dectivate');
        			$('#proceed').attr('data-to', 'deactivate');
        		}
        		else
        		{
        			$('#from-icon').removeClass('fa-check');
        			$('#to-icon').removeClass('fa-times ');
        			$('#from-icon').addClass('fa-times ');
        			$('#to-icon').addClass('fa-check');
        			$('#to-icon').css('color', '#18a689 !important');
        			$('#from-icon').css('color', '#ed5565 !important');
        			$('#action').text('activate');
        			$('#proceed').attr('data-to', 'activate');
        		}


        	});
        }

        function update_model(model_id, to_do)
        {
        	$.get('<?php echo base_url(); ?>models/ajax_update_model/'+model_id + '/' + to_do, function(data){
        		obj = jQuery.parseJSON(data);
        		if(obj.type === 'Success')
        		{
        			getmodelcounts();
        			update_link(model_id, to_do);
        		}

        		message_modal(obj.type, obj.message);
        	});
        }

        function getmodelcounts()
        {
        	$.get('<?php echo base_url(); ?>models/ajax_model_counts', function(data){
        		$('#model_counts').text(data);
        	});
        }

        function message_modal(type, message)
        {
        	if (type === 'Success') 
        	{
        		$('#message-icon-container').removeClass('danger');
        		$('#message-icon-container').addClass('success');
        		$('#message-icon').removeClass('fa-times');
        		$('#message-icon').addClass('fa-check');
        		$('#message-header').text('SUCCESS');
        		$('#message').text(message);
        	}
        	else
        	{
        		$('#message-icon-container').removeClass('success');
        		$('#message-icon-container').addClass('danger');
        		$('#message-icon').removeClass('fa-check');
        		$('#message-icon').addClass('fa-times');
        		$('#message-header').text('ERROR');
        		$('#message').text(message);
        	}
        	$('#messageModal').modal('show');
        }

        function update_link(model_id, to_do)
        {
        	grid_link = $('a.btn[data-crypt='+model_id+']');
        	table_link = $('a.label[data-crypt='+model_id+']');

        	if (to_do === 'activate'){
        		grid_link.removeClass('btn-danger');
				table_link.removeClass('label-danger');
				grid_link.addClass('btn-primary');
				table_link.addClass('label-primary');
				grid_link.html('<i class = "fa fa-check"></i> Active');
				table_link.text('Active');
        	}
        	else
        	{
        		grid_link.removeClass('btn-primary');
				table_link.removeClass('label-primary');
				grid_link.addClass('btn-danger');
				table_link.addClass('label-danger');
				grid_link.html('<i class = "fa fa-times"></i> Deactivated');
				table_link.text('Deactivated');
        	}
        }

    </script>

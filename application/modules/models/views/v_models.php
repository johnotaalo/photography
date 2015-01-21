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

	.widget a
	{
		color: #fff;
	}
</style>
<div class = "row">

	<div class="col-lg-3">
		<div class="widget style1 lazur-bg">
			<a href = "#">
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
						<span> No of Models</span>
						<h2 class="font-bold"><?php echo $model_count; ?></h2>
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



<script>
        $(document).ready(function(){
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
        });

        function getpagemodels(type)
        {
        	$.get('<?php echo base_url(); ?>models/createmodels/'+type, function(data){
        		//$('#models-container').text('Please Wait...');
        		$('#models-container').append(data);
        	});
        }

    </script>

<style type="text/css">
	.model-image
	{
		width: 120px;
	}
	.model-title h3 {
		margin-bottom: 0;
		color: #1E0FBE;
	}

	.model-title h3 a
	{
		color: #428bca;
		text-decoration: none;
	}

	.model-title h3 a:hover
	{
		color: #428bca;
	}

	.search-link {
		color: #006621;
	}

	.search-link:hover
	{
		color: #006621;
		text-decoration: underline;
	}

	.model-title p {
		font-size: 12px;
		margin-top: 5px;
	}
</style>
<div class="wrapper wrapper-content">
	<div class = "row">
		<div class = "col-md-9 animated fadeInRight">
			<div class = "ibox float-e-margins">
				<div class="ibox-content">
					<h2><span><?php echo array_sum($result_counts);?></span> results found for: <span class="text-navy">"<?php echo $search_parameter; ?>"</span></h2>
					<small>Request time  (<?php echo $execution; ?> seconds)</small>
					<form method="POST" action="<?php echo base_url();?>search">
						<div class="input-group">
							<input type="text" class="form-control input-lg" name = "search"> <span class="input-group-btn"><button type="submit" class="btn btn-success btn-lg">Search</button></span>
						</div>
					</form>

					<div class = "hr-line-dashed"></div>

					<div class="panel blank-panel">

						<div class="panel-heading">
							<div class="panel-options">

								<ul class="nav nav-tabs">
									<li id = "models"><a data-toggle="tab" href="#tab-4">Models <span class = "badge badge-primary" id = "model_count" data-value = "<?php echo $result_counts['models']; ?>"><?php echo $result_counts['models']; ?></span></a></li>
									<li id = "events"><a data-toggle="tab" href="#tab-5">Events <span class = "badge badge-primary" id = "events_count" data-value = "<?php echo $result_counts['events']; ?>"><?php echo $result_counts['events']; ?></span></a></li>
									<li id = "images"><a data-toggle="tab" href="#tab-6">Images <span class = "badge badge-primary" id = "images_count" data-value = "<?php echo $result_counts['images']; ?>"><?php echo $result_counts['images']; ?></span></a></li>
								</ul>
							</div>
						</div>

						<div class="panel-body">

							<div class="tab-content">
								<div id="tab-4" class="tab-pane">
									<?php echo $models_results; ?>
								</div>

								<div id="tab-5" class="tab-pane">
									<?php echo $events_results; ?>
								</div>
								<div id="tab-6" class="tab-pane">
									<?php echo $images_results; ?>
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>
		</div>

		<div class = "col-md-3">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Highly Rated Model</h5>
				</div>
				<div>
					<?php echo $highly_rated?>
				</div>
			</div>
		</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		model_counts = parseInt($('#model_count').attr('data-value'));
		events_count = parseInt($('#events_count').attr('data-value'));
		images_count = parseInt($('#images_count').attr('data-value'));

		if (model_counts > 0)
		{
			$('#models').addClass('active');
			$('#tab-4').addClass('active');
		}
		else if (events_count > 0) 
		{
			$('#events').addClass('active');
			$('#tab-5').addClass('active');
		}
		else if(images_count > 0)
		{
			$('#images').addClass('active');
			$('#tab-6').addClass('active');
		}
		else
		{
			$('#models').addClass('active');
			$('#tab-4').addClass('active');
		}
	});
</script>
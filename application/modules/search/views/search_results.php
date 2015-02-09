<style type="text/css">
	.model-image
	{
		width: 120px;
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
							<input type="text" class="form-control input-lg"> <span class="input-group-btn"><button type="button" class="btn btn-success btn-lg">Search</button></span>
						</div>
					</form>

					<div class = "hr-line-dashed"></div>

					<div class="panel blank-panel">

						<div class="panel-heading">
							<div class="panel-title m-b-md"><h4>Blank Panel with icons tabs</h4></div>
							<div class="panel-options">

								<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#tab-4">Models <span class = "badge badge-primary"><?php echo $result_counts['models']; ?></span></a></li>
								<li class=""><a data-toggle="tab" href="#tab-5">Events <span class = "badge badge-primary"><?php echo $result_counts['events']; ?></span></a></li>
								<li class=""><a data-toggle="tab" href="#tab-6">Images <span class = "badge badge-primary"><?php echo $result_counts['images']; ?></span></a></li>
								</ul>
							</div>
						</div>

						<div class="panel-body">

							<div class="tab-content">
								<div id="tab-4" class="tab-pane active">
									<?php echo $models_results; ?>
								</div>

								<div id="tab-5" class="tab-pane">
									<strong>One morning, when Gregor Samsa.</strong>

									<p>Quick zephyrs blow, vexing daft Jim. Sex-charged fop blew my junk TV quiz. How quickly daft jumping zebras vex. Two driven jocks help fax my big quiz. Quick, Baz, get my woven flax jodhpurs! "Now fax quiz Jack!" my brave ghost pled. Five quacking zephyrs jolt my wax bed. Flummoxed by job, kvetching W. zaps Iraq. Cozy sphinx waves quart jug of bad milk. </p>
									<p>The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy veldt fox. Bright vixens jump; dozy fowl quack. Quick wafting zephyrs vex bold Jim. Quick zephyrs blow, vexing daft Jim. Sex-charged fop blew my junk TV quiz. How quickly daft jumping zebras vex. </p>
								</div>
								<div id="tab-6" class="tab-pane">
									<strong>Lorem ipsum dolor sit</strong>

									<p>Quick brown dogs jump over the lazy fox. The jay, pig, fox, zebra, and my wolves quack! Blowzy red vixens fight for a quick jump. Joaquin Phoenix was gazed by MTV for luck. A wizard’s job is to vex chumps quickly in fog. Watch "Jeopardy!", Alex Trebek's fun TV quiz game. Woven silk pyjamas exchanged for blue quartz. Brawny gods just </p>

									<p>Who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee </p>
								</div>
								<div id="tab-7" class="tab-pane">
									<strong>Aenean imperdiet</strong>

									<p>The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy veldt fox. Bright vixens jump; dozy fowl quack. Quick wafting zephyrs vex bold Jim. Quick zephyrs blow, vexing daft Jim. Sex-charged fop blew my junk TV quiz. How quickly daft jumping zebras vex. </p>

									<p>Quick zephyrs blow, vexing daft Jim. Sex-charged fop blew my junk TV quiz. How quickly daft jumping zebras vex. Two driven jocks help fax my big quiz. Quick, Baz, get my woven flax jodhpurs! "Now fax quiz Jack!" my brave ghost pled. Five quacking zephyrs jolt my wax bed. Flummoxed by job, kvetching W. zaps Iraq. Cozy sphinx waves quart jug of bad milk. </p>
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
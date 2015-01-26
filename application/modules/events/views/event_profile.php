<div>
	<div class="wrapper wrapper-content">
		<div class="row animated fadeInRight">
            <div class="row">
                <div class="col-md-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Event Profile</h5>
                        </div>
                        <div>
                            <div class="ibox-content no-padding border-left-right">
                                <img alt="image" class="img-responsive" src="<?php echo $eve_details[0]['cover']; ?>">
                            </div>
                            <div class="ibox-content profile-content">
                                <h4><strong><?php echo $eve_details[0]["event_name"]; ?></strong></h4>
                                <p><i class="fa fa-map-marker"></i><?php echo $eve_details[0]["place"]; ?></p>
                                <p>
                                    <?php echo $eve_details[0]["Description"];?>
                                </p>
                                <h5>
                                    FROM: <?php echo $months.' , '.$eve_details[0]["start_year"];?>
                                </h5>
                                <div>
                                <button class = "btn btn-success" type="button"><a href="<?php echo base_url(); ?>events/add_images/<?php echo $eve_details[0]['event_id']; ?>" style="color:white;">Add Images</a></button>
                            </div>
                            </div>
                            
                    </div>
                </div>
                    </div>
                <div class="col-lg-8 animated fadeInRight">
                    <div class="row">
                 
                        <div class="col-lg-12">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>Basic Table <small>Images</small></h5>
                                    <div class="ibox-tools">
                                        <a class="collapse-link">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="ibox-content">

                                    <?php
                                        echo $event_images;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
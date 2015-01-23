<div>
	<div class="wrapper wrapper-content">
         <div class="row">
                <div class="col-lg-3">
                    <div class="widget style1 red-bg ">
                            <div class="row">
                                <a href="<?php echo base_url('admin/events')?>">
                                    <div class="col-xs-4 text-center">
                                        <i class="fa fa-trophy fa-5x"></i>
                                    </div>
                                    <div class="col-xs-8 text-right">
                                        <span> Add Event </span>
                                        <h2 class="font">0</h2>
                                    </div>
                                </a>
                            </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget style1 lazur-bg">
                        <div class="row">
                            <a href="<?php echo base_url('admin/events')?>">
                                <div class="col-xs-4">
                                    <!-- <i class="fa fa-calendar fa-5x"></i> -->
                                </div>
                                <div class="col-xs-8 text-right">
                                    <span> Total Events </span>
                                    <h2 class="font"><?php echo $events_count[0]['Events'];?></h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget style1 navy-bg">
                        <div class="row">
                            <a href="<?php echo base_url('admin/events')?>">
                                <div class="col-xs-4">
                                    <!-- <i class="fa fa-group fa-5x"></i> -->
                                </div>
                                <div class="col-xs-8 text-right">
                                    <span> Highest Photos in an event</span>
                                    <h2 class="font">0</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3">
                    <div class="widget style1 yellow-bg">
                        <div class="row">
                            <a href="<?php echo base_url('admin/events')?>">
                                <div class="col-xs-4">
                                    <!-- <i class="fa fa-child fa-5x"></i> -->
                                </div>
                                <div class="col-xs-8 text-right">
                                    <span> Lowest Number of events </span>
                                    <h2 class="font">0</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Events Covered</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                           
                        </div>
                    </div>
                    <div class="ibox-content">

                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Event Name</th>
                        <th>Place occured</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                        <?php
                            echo $events;
                        ?>
                    </table>

                    </div>
                </div>
            </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <form action="<?php echo base_url();?>events/upload_file" id="dz" class="dropzone"></form>
                </div>
                
            </div>
    </div>
</div>
<script>

            Dropzone.options.dz = {
            paramName: "file", 
            maxFilesize: 10, 
            accept: function(file, done) {
                if ((file.name.substring((file.name.length-4),file.name.length) != ".jpg")&&(file.name.substring((file.name.length-4),file.name.length) != ".jpeg")&&(file.name.substring((file.name.length-4),file.name.length) != ".JPG")&&(file.name.substring((file.name.length-4),file.name.length) != ".JPEG")) {
                    done("Wrong File Type");
                }
                else { done(); }
            }
            };

    </script>
<style type="text/css">
    #widgets {
        color: white;
    }
</style>
<div>
	<div class="wrapper wrapper-content">
         <div class="row">
                <div class="col-lg-3">
                    <div class="widget style1 red-bg ">
                            <div class="row">
                                <a href="<?php echo base_url('events/add_event')?>" id="widgets">
                                    <div class="col-xs-4 text-center">
                                        <i class="fa fa-plus fa-5x"></i>
                                    </div>
                                    <div class="col-xs-8 text-right">
                                        <span>Add Event: </span>
                                        <h2 class="font"></h2>
                                    </div>
                                </a>
                            </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget style1 lazur-bg">
                        <div class="row">
                            <a href="<?php echo base_url('events')?>" id="widgets">
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
                            <a href="<?php echo base_url('events')?>" id="widgets">
                                <div class="col-xs-4">
                                    <i class="fa fa-arrow-up fa-5x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <span> Highest event Photos</span>
                                    <h2 class="font">0</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3">
                    <div class="widget style1 yellow-bg">
                        <div class="row">
                            <a href="<?php echo base_url('events')?>" id="widgets">
                                <div class="col-xs-4">
                                    <i class="fa fa-arrow-down fa-5x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <span> Toggle View to: </span>
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
                        <th>Date</th>
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

    </div>
</div>

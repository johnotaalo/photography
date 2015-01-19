<div>
	<!-- <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Dashboard</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php //echo base_url('admin') ?>">Home</a>
                        </li>
                        <li class="active">
                            <a>Dashboard</a>
                        </li>
                        
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
 -->
	<div class="wrapper wrapper-content">
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-3">
                    <div class="widget style1 red-bg ">
                            <div class="row">
                                <a href="<?php echo base_url('admin/gallery')?>">
                                    <div class="col-xs-4 text-center">
                                        <i class="fa fa-trophy fa-5x"></i>
                                    </div>
                                    <div class="col-xs-8 text-right">
                                        <span> Pick of the Day </span>
                                        <h2 class="font">$ 4,232</h2>
                                    </div>
                                </a>
                            </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget style1 navy-bg">
                        <div class="row">
                            <a href="<?php echo base_url('admin')?>">
                                <div class="col-xs-4">
                                    <i class="fa fa-group fa-5x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <span> Models </span>
                                    <h2 class="font"><?php echo $models[0]['Models']?></h2>
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
                                    <i class="fa fa-calendar fa-5x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <span> Events </span>
                                    <h2 class="font"><?php echo $events[0]['Events'];?></h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget style1 yellow-bg">
                        <div class="row">
                            <a href="<?php echo base_url('admin')?>">
                                <div class="col-xs-4">
                                    <i class="fa fa-child fa-5x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <span> Fun Stuff </span>
                                    <h2 class="font">12</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hr-line-dashed"></div>
            
            <div class="row">
                <div class="col-lg-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Transactions worldwide</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                                </a>
                                
                            </div>
                        </div>
                        <div class="ibox-content">

                            
                                    <table class="table table-hover margin bottom">
                                        <thead>
                                            <tr>
                                                <th style="width: 1%" class="text-center">No.</th>
                                                <th class="text-center">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td class="text-center"><span class="label label-primary">$483.00</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td class="text-center"><span class="label label-primary">$327.00</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3</td>
                                               <td class="text-center"><span class="label label-warning">$125.00</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">4</td>
                                                <td class="text-center"><span class="label label-primary">$344.00</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">5</td>
                                                <td class="text-center"><span class="label label-primary">$235.00</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">6</td>
                                               <td class="text-center"><span class="label label-primary">$100.00</span></td>
                                                </tr>
                                        </tbody>
                                    </table>
                                
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Quick Upload</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                                </a>
                                
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method = "POST" class="form-horizontal" name = "image_uploader" enctype="multipart/form-data" action = "<?php echo base_url(); ?>upload/upload_image">
                               
                                <div class = "form-group">
                                    <input class="form-control" type="text" name="upload_name" placeholder="Name of Image" required/>
                                </div>
                                <div class = "form-group">
                                    <textarea class="form-control" name='upload_description' placeholder="Enter Description..." required></textarea>
                                </div>
                                 <div class = "form-group">
                                    <input type = "file" name = "upload_image" required/>
                                </div>

                                <div class="form-group">
                                    <button name = "upload_button" class="btn btn-success " type="submit"><i class="fa fa-upload"></i>&nbsp;&nbsp;<span class="bold">Upload</span></button>
                                </div>
                               
                                <div class = "message_box"><span class = "<?php if($error){ echo 'error';}else echo 'success' ?>"><p><?php echo $message; ?></p></span></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Percentage Hires</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content text-center h-200">
                            <span id="sparkline7"></span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div class="ibox-content">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Uploads per month
                                <small></small>
                                </h5>
                                <div ibox-tools></div>
                            </div>
                            <div class="ibox-content">
                                <div>
                                    <canvas id="lineChart" height="140"></canvas>
                                </div>
                            </div>
                        </div>                                    
                    </div>
                    
                </div>

                <div class="col-lg-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Quick Email</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                                </a>
                                
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="post" class="form-horizontal" action="">
                                <div class="form-group">
                                    <div class=""><input type="text" class="form-control" name="email_address" id="email_address" placeholder="Email Address"></div>
                                </div>
                                
                                <div class="form-group">
                                    <div class=""><input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="">
                                        <textarea class="form-control" name="message" id="message" placeholder="Type Message Here..." rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <button class="btn btn-primary " type="button"><i class="fa fa-send"></i>&nbsp;Send Mail</button>
                            </form>
                        </div>
                    </div>
                </div>           
            </div>
        </div>
    </div>
</div>
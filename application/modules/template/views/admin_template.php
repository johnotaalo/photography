<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v1.6/dashboard_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Dec 2014 12:00:36 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Photography</title>

    <link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/css/plugins/datapicker/datepicker3.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Morris -->
    <link href="<?php echo base_url(); ?>assets/admin/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="<?php echo base_url(); ?>assets/admin/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/admin/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/css/style.css" rel="stylesheet">

     <!-- Data Tables -->
    <link href="<?php echo base_url(); ?>assets/admin/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
     <style type="text/css">
    /*a {
        text-decoration: none;
        color: white;
    }
    a:hover {
        text-decoration: none;
        color: white;
    }*/
    </style>
    <script src="<?php echo base_url(); ?>assets/admin/js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/datapicker/bootstrap-datepicker.js"></script>

</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="logo-element">
                            P+
                        </div>
                    </li>
                   <li>
                        <a href="<?php echo base_url('admin');?>"><i class="fa fa-dashboard"></i> <span class="nav-label">Home</span> </a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-align-right"></i> <span class="nav-label">Categories</span> </a>
                    </li>
                   <li>
                        <a href="#"><i class="fa fa-upload"></i> <span class="nav-label">Uploads</span> </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>models/modellist"><i class="fa fa-user"></i> <span class="nav-label">Models</span> </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-phone"></i> <span class="nav-label">Phone Book</span> </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-calendar"></i> <span class="nav-label">Calendar</span> </a>
                    </li>
                   <li>
                        <a href="#"><i class="fa fa-calendar"></i> <span class="nav-label">Events</span> </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-lock"></i> <span class="nav-label">Log Out</span> </a>
                    </li>
                    
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" method="post" action="http://webapplayers.com/inspinia_admin-v1.6/search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                </li>


                <li>
                    <a href="login.html">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>
        <!--Content Page begins here-->
        <?php
            $this->load->view($content_page);
        ?>
        <!--End of content page-->


    <!-- Mainly scripts -->
    
    <script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/flot/jquery.flot.symbol.js"></script>

    <!-- Peity -->
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url(); ?>assets/admin/js/inspinia.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Jvectormap -->
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- EayPIE -->
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/easypiechart/jquery.easypiechart.js"></script>

    <!-- Sparkline -->
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="<?php echo base_url(); ?>assets/admin/js/demo/sparkline-demo.js"></script>

     <!-- ChartJS-->
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/chartJs/Chart.min.js"></script>
    <!-- // <scri/pt src="<?php echo base_url(); ?>assets/admin/js/demo/chartjs-demo.js"></script> -->

    <!-- Data Tables -->
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins/dataTables/dataTables.responsive.js"></script>

</body>

<!-- Mirrored from webapplayers.com/inspinia_admin-v1.6/dashboard_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Dec 2014 12:00:37 GMT -->
</html>

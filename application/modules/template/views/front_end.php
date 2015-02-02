<!DOCTYPE html>
<html class="fullscreen">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/frontend/img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/frontend/img/apple_icons_57x57.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>assets/frontend/img/apple_icons_72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>assets/frontend/img/apple_icons_114x114.png">
<title>Diamond | Photography</title>
<link href="http://fonts.googleapis.com/css?family=Roboto:400,700,400italic" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Muli" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/theme.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/responsive.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/custom.css" type="text/css" media="all" />
</head>
<body>
	<header class="main_header">
    	<div class="header_scroll">
            <div class="header_wrapper">
            	<a href="" class="logo"><img src="<?php echo base_url(); ?>assets/frontend/img/logo.png" alt="" class="logo_def"><img src="<?php echo base_url(); ?>assets/frontend/img/retina/logo.png" alt="" class="logo_retina"></a>                
                <nav>
                	<div class="menu-main-menu-container">
                    	<ul id="menu-main-menu" class="menu">
                        	<li class="current-menu-parent menu-item-has-children">
                            	<a href="#"><span>Home</span></a>                     
                            </li>
                            <li><a href=""><span>About</span></a></li>
                            <li>
                            	<a href="#"><span>Galleries</span></a>
                            </li>
                            <li>
                            	<a href="#"><span>Works</span></a>                                
                            </li> 
                            <li>
                            	<a href="#"><span>News</span></a>
                            </li>
                            <li>
                            	<a href="#"><span>Features</span></a>                         
                            </li>
                            <li>
                            	<a href="#"><span>Contact</span></a>
                            </li>
                            <li>
                                <a href = "<?php echo base_url();?>login"><span>Login</span></a>
                            </li>
                        </ul>                    
                    </div>
                </nav>                
                <div class="widget_area">                	
                    <div class="span12">
                    	<div class="sidepanel widget_text">
                        	<div class="textwidget">
                            	<div class="center_text">
                                	<img src="<?php echo base_url(); ?>assets/frontend/img/imgs/widget.jpg" alt="" class="header_widget" />
                                    <h6>Hello And Welcome</h6>
                                    to Black Diamond photo studio! Glad to see you here!
                                </div>
                            </div>		
                        </div>
                    </div>        		
                </div>            
            </div><!-- Header Wrapper -->
            <div class="footer_wrapper">            
                <div class="socials_wrapper">
                    <ul class="socials_list">
                    	<li><a class="ico_social_facebook" target="_blank" href="http://facebook.com/" title="Facebook"></a></li>
                        <li><a class="ico_social_pinterest" target="_blank" href="http://pinterest.com/" title="Pinterest"></a></li>
                        <li><a class="ico_social_instagram" target="_blank" href="http://instagram.com/" title="Instagram"></a></li>
                        <li><a class="ico_social_flickr" target="_blank" href="http://flickr.com/" title="Flickr"></a></li>
                    </ul>
                </div>
                <div class="copyright">Copyright &copy; Black Diamond.<br>All Rights Reserved</div>
            </div><!-- footer_wrapper -->
    	</div>
	</header>
    
	<a href="javascript:void(0)" class="control_toggle"></a>
    
    <div class="custom_bg img_bg def_bg"></div>
    
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/jquery-ui.min.js"></script>    
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/modules.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/theme.js"></script>
    <script>
    	gallery_set = [
			{type: "image", image: "<?php echo base_url(); ?>assets/frontend/img/gallery/slider/1.jpg", thmb: "<?php echo base_url(); ?>assets/frontend/img/gallery/slider/thumbs/1.jpg", alt: "Rice and Beef",titleColor: "#ffffff", descriptionColor: "#ffffff"},
			{type: "image", image: "<?php echo base_url(); ?>assets/frontend/img/gallery/slider/2.jpg", thmb: "<?php echo base_url(); ?>assets/frontend/img/gallery/slider/thumbs/2.jpg", alt: "", title: "Sarah Brown", description: "Gorgeous Models from above and beyond.", titleColor: "#ffffff", descriptionColor: "#ffffff"},
			{type: "image", image: "<?php echo base_url(); ?>assets/frontend/img/gallery/slider/3.jpg", thmb: "<?php echo base_url(); ?>assets/frontend/img/gallery/slider/thumbs/3.jpg", alt: "Sport",titleColor: "#ffffff", descriptionColor: "#ffffff"},
			{type: "image", image: "<?php echo base_url(); ?>assets/frontend/img/gallery/slider/4.jpg", thmb: "<?php echo base_url(); ?>assets/frontend/img/gallery/slider/thumbs/4.jpg", alt: "Jessica Black", title: "Families", description: "Awesome family photos.", titleColor: "#ffffff", descriptionColor: "#ffffff"},
			{type: "image", image: "<?php echo base_url(); ?>assets/frontend/img/gallery/slider/5.jpg", thmb: "<?php echo base_url(); ?>assets/frontend/img/gallery/slider/thumbs/5.jpg", alt: "", title: "", description: "", titleColor: "#000000", descriptionColor: "#000000"},
			{type: "image", image: "<?php echo base_url(); ?>assets/frontend/img/gallery/slider/6.jpg", thmb: "<?php echo base_url(); ?>assets/frontend/img/gallery/slider/thumbs/6.jpg", alt: "Anna White", title: "Anna White", description: "Gothic Photography with the aim of conversion.", titleColor: "#ffffff", descriptionColor: "#ffffff"},
			{type: "image", image: "<?php echo base_url(); ?>assets/frontend/img/gallery/slider/7.jpg", thmb: "<?php echo base_url(); ?>assets/frontend/img/gallery/slider/thumbs/7.jpg", alt: "Sarah Brown", title: "Eileen Brown", description: "Kenyans also haven't been left behind.", titleColor: "#000000", descriptionColor: "#000000"},
			{type: "image", image: "<?php echo base_url(); ?>assets/frontend/img/gallery/slider/8.jpg", thmb: "<?php echo base_url(); ?>assets/frontend/img/gallery/slider/thumbs/8.jpg", alt: "Jessica Black", title: "Jessica Black", description: "Nature photography at its best.", titleColor: "#ffffff", descriptionColor: "#ffffff"}
		]
		
		jQuery(document).ready(function(){
			"use strict";
			jQuery('html').addClass('hasPag');
			jQuery('.custom_bg').remove();
			jQuery('body').fs_gallery({
				fx: 'fade', /*fade, zoom, slide_left, slide_right, slide_top, slide_bottom*/
				fit: 'no_fit',
				slide_time: 3300, /*This time must be < then time in css*/
				autoplay: 1,
				show_controls: 1,
				slides: gallery_set
			});
			jQuery('.fs_share').click(function(){
				jQuery('.fs_fadder').removeClass('hided');
				jQuery('.fs_sharing_wrapper').removeClass('hided');
				jQuery('.fs_share_close').removeClass('hided');
			});
			jQuery('.fs_share_close').click(function(){
				jQuery('.fs_fadder').addClass('hided');
				jQuery('.fs_sharing_wrapper').addClass('hided');
				jQuery('.fs_share_close').addClass('hided');
			});
			jQuery('.fs_fadder').click(function(){
				jQuery('.fs_fadder').addClass('hided');
				jQuery('.fs_sharing_wrapper').addClass('hided');
				jQuery('.fs_share_close').addClass('hided');
			});
	
			jQuery('.fs_controls').addClass('up_me');
			jQuery('.fs_title_wrapper ').addClass('up_me');
		
			jQuery('.close_controls').click(function(){
				if (jQuery(this).hasClass('open_controls')) {
					jQuery('.fs_controls').removeClass('hide_me');
					jQuery('.fs_title_wrapper ').removeClass('hide_me');
					jQuery('.fs_thmb_viewport').removeClass('hide_me');
					jQuery('header.main_header').removeClass('hide_me');
					jQuery(this).removeClass('open_controls');
				} else {		
					jQuery('header.main_header').addClass('hide_me');
					jQuery('.fs_controls').addClass('hide_me');
					jQuery('.fs_title_wrapper ').addClass('hide_me');
					jQuery('.fs_thmb_viewport').addClass('hide_me');
					jQuery(this).addClass('open_controls');
				}
			});
			
			jQuery('.main_header').removeClass('hided');
			jQuery('html').addClass('single-gallery');
			jQuery('.control_toggle').click(function(){
				jQuery('html').toggleClass('hide_controls');
			});			
		});
	</script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/js/fs_gallery.js"></script>
</body>
</html>
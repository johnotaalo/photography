    <div class="site_wrapper">
	    <div class="main_wrapper">
            <div class="content_wrapper">
                <div class="container">
                    <div class="content_block row no-sidebar">
                        <div class="fl-container">
                            <div class="row">
                                <div class="posts-block">                                                    
                                    <div class="contentarea">
                                        <div class="row">
                                        	<div class="span6 first-module module_number_1 module_cont pb0 module_text_area">
                                                <div class="module_content">
                                                    <p><img src="<?php echo base_url(); ?>assets/frontend/img/imgs/about-picture.jpg" alt="" width="460" height="344" /></p>
                                                </div>
                                            </div><!-- .module_cont -->                            
                                            <div class="span6 module_number_2 module_cont no_margin module_text_area pb0">
                                                <div class="bg_title"><h1 class="headInModule">About Our Studio</h1></div>
                                                <div class="module_content">
                                                    <p>We do awesome photography for all kinds of events and occasions be it individual or cooperate according to our customers preferences.</p>
                                                    <p>We aim at providing quality service delivery to our customeres since they are our greatest assets. Our services are well affordable according to the package of our customers choice.</p>
                                                    <p>&nbsp;</p>
                                                    <p><a href="<?php echo base_url();?>home/contact_us" class=" shortcode_button btn_small btn_type1">Contact Us</a></p>
                                                </div>
                                            </div><!-- .module_cont -->
                                        </div>							
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div><!-- .main_wrapper -->
	</div>
    
    
	<div class="custom_bg img_bg bg_about"></div>
    
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/jquery-ui.min.js"></script>    
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/modules.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/theme.js"></script>
    <script>
    	jQuery(document).ready(function(){
			"use strict";
			centerWindow();
			body.addClass('centered_page');		
		});
		jQuery(window).load(function(){
			"use strict";
			centerWindow();
		});
		jQuery(window).resize(function(){
			"use strict";
			centerWindow();
			setTimeout('centerWindow()',500);
			setTimeout('centerWindow()',1000);
		});
		function centerWindow() {
			"use strict";
			var setTop = (window_h - site_wrapper.height() - parseInt(site_wrapper.css('padding-top')) - parseInt(site_wrapper.css('padding-bottom')))/2;
			var setLeft = (window_w - header_w - site_wrapper.width() - parseInt(site_wrapper.css('padding-right')) - parseInt(site_wrapper.css('padding-left')))/2 + header_w;
			if (setTop < 0) {
				site_wrapper.addClass('fixed');
				site_wrapper.css({'top' : 0+'px', 'margin-left' : setLeft+'px'});
			} else {
				site_wrapper.css({'top' : setTop +'px', 'margin-left' : setLeft+'px'});
				site_wrapper.removeClass('fixed');
				jQuery('body').removeClass('addPadding');
			}
		}		
	</script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/js/fs_gallery.js"></script>
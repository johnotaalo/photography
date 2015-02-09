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
                                        	<div class="span12 first-module module_number_1 module_cont pb20 module_content">
                                            	<div class="module_content">
                                                	<h1>Got a Question? We're Here to Help!</h1>
                                                </div>
                                            </div><!-- .module_cont -->
                                        </div>                                        
                                        <div class="row">
                                        	<div class="span8 module_number_2 module_cont pb0 module_html">                                            	
                                                <div class="module_content contact_form">
                                                	<div id="note"></div>
                                                    <div id="fields"> 
                                                        <form id="ajax-contact-form" method="post" action="<?php echo base_url();?>home/contact_notification">                                
                                                            <input type="text" name="name" id="name" value="" placeholder="Name *" />
                                                            <input type="text" name="email" id="email" value="" placeholder="Email *" />
                                                            <input type="text" name="subject" id="subject" value="" placeholder="Subject" />                            
                                                            <textarea name="message" id="message" placeholder="Message *"></textarea> 
                                                            <input type="submit" value="Send message!"> 
                                                        </form> 
                                                    </div>                                                   
                                                </div>                
                                            </div>
                                            <div class="span4 module_number_3 module_cont pb0 no_bg module_contact_info">
                                            	<ul class="contact_info_list">
                                                	<li class="contact_info_item">
                                                    	<div class="contact_info_wrapper">
                                                        	<span class="contact_info_icon"><i class="icon-home"></i></span>
                                                            <div class="contact_info_text">5512 Lorem Vestibulum 666/13</div>
                                                        </div>
                                                    </li>
                                                    <li class="contact_info_item">
                                                    	<div class="contact_info_wrapper">
                                                        	<span class="contact_info_icon"><i class="icon-phone"></i></span>
                                                            <div class="contact_info_text">+1 800 789 50 12</div>
                                                        </div>
                                                    </li>
                                                    <li class="contact_info_item">
                                                    	<div class="contact_info_wrapper">
                                                        	<span class="contact_info_icon"><i class="icon-envelope"></i></span>
                                                            <div class="contact_info_text"><a href="mailto:#">mail@diamond.com</a></div>
                                                        </div>
                                                    </li>
                                                    <li class="contact_info_item">
                                                    	<div class="contact_info_wrapper">
                                                        	<span class="contact_info_icon"><i class="icon-skype"></i></span>
                                                            <div class="contact_info_text">Skype</div>
                                                        </div>
                                                    </li>
                                                    <li class="contact_info_item">
                                                    	<div class="contact_info_wrapper">
                                                        	<span class="contact_info_icon"><i class="icon-twitter"></i></span>
                                                            <div class="contact_info_text"><a href="javascript:void(0);">Twitter</a></div>
                                                        </div>
                                                    </li>
                                                    <li class="contact_info_item">
                                                    	<div class="contact_info_wrapper">
                                                        	<span class="contact_info_icon"><i class="icon-facebook-square"></i></span>
                                                            <div class="contact_info_text"><a href="javascript:void(0);">Facebook</a></div>
                                                        </div>
                                                    </li>
                                                    <li class="contact_info_item">
                                                    	<div class="contact_info_wrapper">
                                                        	<span class="contact_info_icon"><i class="icon-dribbble"></i></span>
                                                            <div class="contact_info_text"><a href="javascript:void(0);">Dribbble</a></div>
                                                        </div>
                                                    </li>
                                                    <li class="contact_info_item">
                                                    	<div class="contact_info_wrapper">
                                                        	<span class="contact_info_icon"><i class="icon-flickr"></i></span>
                                                            <div class="contact_info_text"><a href="#">Flickr</a></div>
                                                        </div>
                                                    </li>
                                                    <li class="contact_info_item">
                                                    	<div class="contact_info_wrapper">
                                                        	<span class="contact_info_icon"><i class="icon-youtube-play"></i></span>
                                                            <div class="contact_info_text"><a href="#">YouTube</a></div>
                                                        </div>
                                                    </li>
                                                    <li class="contact_info_item">
                                                    	<div class="contact_info_wrapper">
                                                        	<span class="contact_info_icon"><i class="icon-pinterest"></i></span>
                                                            <div class="contact_info_text"><a href="#">Pinterest</a></div>
                                                        </div>
                                                    </li>
                                                    <li class="contact_info_item">
                                                    	<div class="contact_info_wrapper">
                                                        	<span class="contact_info_icon"><i class="icon-tumblr-square"></i></span>
                                                            <div class="contact_info_text"><a href="#">Tumblr</a></div>
                                                        </div>
                                                    </li>
                                                </ul>                                            
                                            </div>                                        
                                        </div>                          							
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
    </div>
    
    <div class="custom_bg img_bg map_bg"></div>
    
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
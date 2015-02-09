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
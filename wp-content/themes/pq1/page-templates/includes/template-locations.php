<div id="location_info">
		
		<div class="location_col">
			
			<div class="location_tablet_layout">
			
				<span class="location_contact_title"><?php the_field( 'footer_contact_us_title','option'); ?></span><!-- footer_contact_title -->
				
				<a class="location_phone" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_field('footer_phone', 'option')); ?>"><?php the_field( 'footer_phone','option'); ?></a>
			
			</div><!-- location_contact -->
			
			<div class="social_media">
				
				<?php get_template_part('page-templates/includes/template','social-media'); ?>
				
			</div><!-- social_media -->
			
		</div><!-- location_col -->
		
		<div class="location_col">
			
			<span class="location_title"><?php the_field( 'main_location_title_footer','option'); ?></span><!-- footer_location_title -->
			
			<span class="address"><?php the_field( 'main_location_address_footer','option'); ?></span><!-- address -->
			
			<a class="get_directions" href="<?php the_field( 'main_location_get_directions_link','option'); ?>" target="_blank" rel="noopener"><?php the_field( 'main_location_get_directions_title','option'); ?></a><!-- get_directions -->
			
			<div class="location_phone_wrapper">
				
				<span class="location_phone_title">Phone</span>
				
				<a class="location_phone_small" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_field('main_location_phone_footer', 'option')); ?>"><?php the_field( 'main_location_phone_footer','option'); ?></a><!-- location_phone -->
				
			</div><!-- location_phone_wrapper -->
			
		</div><!-- location_col -->
		
		<div class="location_col">
			
			<span class="location_title"><?php the_field( 'other_locations_title','option'); ?></span><!-- location_title -->
			
			<span class="address info"><?php the_field( 'other_locations_content','option'); ?></span><!-- address -->
			
			<?php if(get_field('other_locations_link','option')) { ?>
			
				<a class="get_directions complete_list" href="<?php the_field( 'other_locations_link','option'); ?>"><?php the_field( 'see_other_locations_verbiage','option'); ?></a><!-- get_directions -->
			
			<?php } ?>
			
		</div><!-- location_col -->
		
	</div><!-- location_info -->
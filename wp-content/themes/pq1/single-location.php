<?php get_header(); ?>

<div id="internal_main">
	
		<div id="internal_banner">
		
		<div class="internal_banner_content">
			
			<?php if(get_field('banner_title')) : ?>
			
				<?php if(get_field('banner_h1') == "Yes") : ?>
			
					<h1 class="banner_title"><?php the_field( 'banner_title' ); ?></h1><!-- banner_title -->
				
					<?php else: ?>
				
					<span class="banner_title"><?php the_field( 'banner_title' ); ?></span><!-- banner_title -->
				
				<?php endif;?>
			
			<?php else:?>
			
			<?php if(get_field('banner_h1') == "Yes") : ?>
			
				<h1 class="banner_title"><?php the_field( 'global_internal_banner_title','option'); ?></h1><!-- banner_title -->

				<?php else: ?>
			
				<span class="banner_title"><?php the_field( 'global_internal_banner_title','option'); ?></span><!-- banner_title -->

			<?php endif;?>
			
			<?php endif;?>
			
			<?php if(get_field('turn_off_button') == "Yes") : ?>
			
			<?php else: ?>
			
				<a class="button internal_button" href="#consultation">
				
					<span><?php the_field( 'global_internal_banner_button_verbiage','option'); ?></span>
			
				</a>
			
			<?php endif;?>
			
		</div><!-- internal_banner_content -->
		
		<?php $global_internal_banner_image = get_field( 'global_internal_banner_image','option'); ?>
	
		<img id="internal_hero" src="<?php echo $global_internal_banner_image['url']; ?>" alt="<?php echo $global_internal_banner_image['alt']; ?>"/><!-- internal_hero -->
		
		
		
	</div><!-- internal_banner -->
		
	<div class="page_container">
		
		<?php get_sidebar(); ?>
		
		<div class="page_content content">
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
				<div class="single_location">
				
					<h1 class="banner_title"><?php the_title(); ?></h1><!-- banner_title -->
					
					<a class="single_map_phone" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_field('map_phone')); ?>">Phone <?php the_field('map_phone');?></a><!-- single_map_phone -->
					
					<?php if(get_field('map_phone_spanish')) {?>
					
						<a class="single_map_phone" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_field('map_phone_spanish')); ?>">Spanish Phone <?php the_field('map_phone_spanish');?></a><!-- single_map_phone -->
					
					<?php } ?>
					
					<?php 
							
										$get_directions = get_field('map_street_address') . ' ' . get_field('map_city') . ' ' . get_field('map_state') . ' ' . get_field('map_zip_code');
						
										$get_directions_url = str_replace(' ', '%20', $get_directions); 
						
									?>
									
									<?php if(get_field('get_directions_google_maps')) : ?>
									
									<a class="mobile_get_directions" href="<?php the_field('get_directions_google_maps');?>" target="_blank" rel="noopener">Get Directions</a><!-- mobile_get_directions -->
									
									<?php else:?>
						
										<a class="mobile_get_directions" href="https://www.google.com/maps/search/?api=1&query=<?php echo $get_directions_url;?>" target="_blank" rel="noopener">Get Directions</a><!-- mobile_get_directions -->
									
									<?php endif;?>
									
									<div class="single_location_content">
										
										<?php the_content();?>
										
									</div><!-- single_location_content -->
				
									<?php edit_post_link( __( 'Edit'), '', '' ); ?>	
			
				</div><!-- single_location -->
			
			<?php endwhile; // end of loop ?>

			<?php endif; ?>
			
		</div><!-- page_content -->
		
	</div><!-- page_container -->
	
	
</div><!-- internal_main -->


<?php get_footer(); ?>





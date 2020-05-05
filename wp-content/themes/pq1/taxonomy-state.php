<?php get_header(); ?>


<div id="internal_main">
	
	<div id="internal_banner">
		
		<div class="internal_banner_content">
			
					
		<?php if (have_posts())the_post();?>

			
			<span class="banner_title"><?php single_term_title(); ?></span><!-- banner_title -->

			<?php rewind_posts(); ?>
			
			<a class="button internal_button" href="#consultation">
				
				<span><?php the_field( 'global_internal_banner_button_verbiage','option'); ?></span>
			
			</a>
			
		</div><!-- internal_banner_content -->
		
		<img id="internal_hero" src="<?php bloginfo('template_directory');?>/images/internal-banner.jpg"/><!-- internal_hero -->
		
	</div><!-- internal_banner -->
	
	<div class="page_container">
		
		<?php get_sidebar('blog'); ?>
		
		<div class="page_content content">
			
			<?php $term = get_term_by( 'slug', get_query_var('term'), get_query_var('taxonomy') );?>

			<?php $mymain_query = new WP_Query( 
				array(
					'post_type' => 'location',
					'posts_per_page' => -1, 
					'meta_key'	=> 'map_city',
					'orderby'	=> 'meta_value', 
					'order' => 'ASC',
					'tax_query' => array(
						array(
          		'taxonomy' => 'state',
							'field' => 'slug',
							'terms' => array( $term->slug),
							'operator' => 'IN'
						)
					)
				) 
			); 
				while($mymain_query->have_posts()) : $mymain_query->the_post(); ?>
      
					<div class="blog_post">
				
					<h2 class="blog_header"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
					
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
			
				</div><!-- blog_post -->
      
      <?php endwhile; ?>
      <?php wp_reset_postdata(); // reset the query ?>

			
		</div><!-- page_content -->
		
	</div><!-- page_container -->
	
</div><!-- internal_main -->


<?php get_footer(); ?>


		





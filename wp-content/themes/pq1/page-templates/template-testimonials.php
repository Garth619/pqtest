<?php 

/* Template Name: Testimonials */

get_header(); ?>

<div id="internal_main" class="no_banner">
	
	<div class="internal_container">
		
		<h1 class="internal_header"><?php the_title();?></h1><!-- internal_header -->
		
		<div class="testi_feature inner_container">
			
			<div class="testi_feature_inner">
			
				<?php echo file_get_contents( get_template_directory() . "/images/stars.svg"); ?>
			
				<div class="testi_intro">
					
					<?php if(get_field('featured_testimonial_intro')) { 
				
						the_field( 'featured_testimonial_intro' );
					
					} ?>
			
				</div><!-- testi_intro -->
			
				<div class="testi_description">
					
					<?php 
						
						if(get_field('extended_review') == "No") {
				
							echo "<p>" . get_field( 'featured_testimonial_description' ) . "</p>";
						
						}
					
						elseif(get_field('extended_review') == "Yes") {
					
							$post_object = get_field( 'review_post_selection_featured' );
						
							if ( $post_object ) {
						
								$post = $post_object; 
						
								setup_postdata( $post );  
		
									echo "<p>" . wp_trim_words( get_the_content(), 50, '...' ) . "</p><a class='testi_read_more' href='" . get_permalink() . "'>Read More</a>"; 
						
								wp_reset_postdata();
							
							} 
						
						}
					
					?>
					
					</div><!-- testi_description -->
				
				<span class="testi_name"><?php the_field( 'featured_testimonial_name' ); ?></span><!-- testi_name -->
			
			</div><!-- testi_feature_inner -->
			
		</div><!-- testi_feature -->
		
		<div class="testi_bottom inner_container">
			
			<div class="testi_col">
				
				<?php if(get_field('testi_column_one_new')): ?>
				 
					<?php while(has_sub_field('testi_column_one_new')): ?>
				 
						<div class="single_testi">
					
							<?php echo file_get_contents( get_template_directory() . "/images/stars.svg"); ?>
					
							<div class="testi_intro">
								
								<?php if(get_sub_field('intro')) { 
						
									the_sub_field( 'intro' ); 
								
								} ?>
						
							</div><!-- testi_intro -->
					
							<div class="testi_description">
								
								<?php 
						
						if(get_sub_field('extended_review') == "No") {
				
							echo "<p>" . get_sub_field( 'description' ) . "</p>";
						
						}
					
						elseif(get_sub_field('extended_review') == "Yes") {
					
							$post_object = get_sub_field( 'review_post_selection' );
						
							if ( $post_object ) {
						
								$post = $post_object; 
						
								setup_postdata( $post );  
		
									echo "<p>" . wp_trim_words( get_the_content(), 50, '...' ) . "</p><a class='testi_read_more' href='" . get_permalink() . "'>Read More</a>"; 
						
								wp_reset_postdata();
							
							} 
						
						}
					
					?>
						
							</div><!-- testi_description -->
					
							<span class="testi_name"><?php the_sub_field( 'name' ); ?></span><!-- testi_name -->
					
						</div><!-- single_testi -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
			</div><!-- testi_col -->
			
			<div class="testi_col">
				
				<?php if(get_field('testi_column_two_new')): ?>
				 
					<?php while(has_sub_field('testi_column_two_new')): ?>
				 
						<div class="single_testi">
					
							<?php echo file_get_contents( get_template_directory() . "/images/stars.svg"); ?>
					
							<div class="testi_intro">
								
								<?php if(get_sub_field('intro')) { 
						
									the_sub_field( 'intro' ); 
								
								} ?>
						
							</div><!-- testi_intro -->
					
							<div class="testi_description">
								
								<?php 
						
						if(get_sub_field('extended_review') == "No") {
				
							echo "<p>" . get_sub_field( 'description' ) . "</p>";
						
						}
					
						elseif(get_sub_field('extended_review') == "Yes") {
					
							$post_object = get_sub_field( 'review_post_selection' );
						
							if ( $post_object ) {
						
								$post = $post_object; 
						
								setup_postdata( $post );  
		
									echo "<p>" . wp_trim_words( get_the_content(), 50, '...' ) . "</p><a class='testi_read_more' href='" . get_permalink() . "'>Read More</a>"; 
						
								wp_reset_postdata();
							
							} 
						
						}
					
					?>
						
							</div><!-- testi_description -->
					
							<span class="testi_name"><?php the_sub_field( 'name' ); ?></span><!-- testi_name -->
					
						</div><!-- single_testi -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
			</div><!-- testi_col -->
			
		</div><!-- testi_bottom -->
				
	</div><!-- internal_container -->
	
	
</div><!-- internal_main -->


<?php get_footer(); ?>

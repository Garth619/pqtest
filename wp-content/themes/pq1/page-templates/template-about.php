<?php 

/* Template Name: About */

get_header(); ?>


<div id="internal_main" class="no_banner">

	<div id="about_top">
		
		<div class="about_top_inner">
		
			<div class="about_top_left">
			
				<div class="about_inner_left">
				
					<h1 class="about_header"><?php the_field( 'about_title' ); ?></h1><!-- internal_header -->
					
					<div class="about_left_intro">
						
						<?php the_field( 'intro' ); ?>
						
					</div><!-- about_left_intro -->
				
				</div><!-- about_inner_left -->
			
			</div><!-- about_top_left -->
		
			<div class="about_top_right">
				
				<div class="about_img_wrapper">
					
					<?php if(get_field('about_images')): ?>
					 
						<?php while(has_sub_field('about_images')): ?>
					 
							<?php $image = get_sub_field( 'image' ); ?>
							
							<?php if ( $image ) { ?>
								
								<div>
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								</div>
							
							<?php } ?>
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>
					
				</div><!-- about_img_wrapper -->
				
			</div><!-- about_top_right -->
		
		</div><!-- about_top_inner -->
		
	</div><!-- about_top -->
	
	<div id="about_bottom">
		
		<div class="about_bottom_inner content">
			
			<?php get_template_part( 'loop', 'page' ); ?>
		
		</div><!-- about_bottom_inner -->
		
	</div><!-- about_bottom -->
		
</div><!-- internal_main -->


<?php get_footer(); ?>

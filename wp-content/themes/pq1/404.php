<?php get_header(); ?>

<div id="internal_main" class="no_banner">
	
	<div class="internal_container">
		
		<h1 class="internal_header"><?php the_field( 'not_found_title','option'); ?></h1>
		
		<div class="not_found inner_container">
		
			<span class="error"><?php the_field( 'not_found_subtitle','option'); ?></span><!-- error -->
			
			<div class="not_found_content content">
		
				<?php the_field( 'not_found_content','option'); ?>
			
			</div><!-- not_found_content -->

		</div><!-- video_wrapper -->
	
	</div><!-- internal_main -->


<?php get_footer(); ?>
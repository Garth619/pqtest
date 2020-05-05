<?php get_header(); ?>


<div id="internal_main">
	
	<div id="internal_banner" class="banner_with_page_title">
		
		<div class="internal_banner_content">
			
					
		<?php if (have_posts())the_post();?>

			<h1 class="internal_header"><?php if ( is_day() ) : ?>
				
				<?php printf( __( '<span>%s</span>', 'twentyten' ), get_the_date() ); ?>
					
					<?php elseif ( is_month() ) : ?>
				
				<?php printf( __( '<span>%s</span>', 'twentyten' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyten' ) ) ); ?>
					
					<?php elseif ( is_year() ) : ?>
				<?php printf( __( '<span>%s</span>', 'twentyten' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentyten' ) ) ); ?>
				
				<?php else : ?>
				
				<?php _e( 'Blog Archives', 'twentyten' ); ?>
				
				<?php endif; ?></h1><!-- banner_title -->

			<?php rewind_posts(); ?>
		
		</div><!-- internal_banner_content -->
		
		<?php $global_internal_banner_image = get_field( 'global_internal_banner_image','option'); ?>
		<?php $internal_banner_blog_image = get_field( 'internal_banner_blog_image','option'); ?>
		
		<?php if($internal_banner_blog_image) : ?>
		
			<img id="internal_hero" src="<?php echo $internal_banner_blog_image['url']; ?>" alt="<?php echo $internal_banner_blog_image['alt']; ?>"/><!-- internal_hero -->
		
		<?php else: ?>
		
			<img id="internal_hero" src="<?php echo $global_internal_banner_image['url']; ?>" alt="<?php echo $global_internal_banner_image['alt']; ?>"/><!-- internal_hero -->
		
		<?php endif;?>
		
	</div><!-- internal_banner -->
	
	<div class="page_container">
		
		<?php get_sidebar('blog'); ?>
		
		<div class="page_content content">
			
			<?php get_template_part( 'loop', 'index' ); ?>
			
		</div><!-- page_content -->
		
	</div><!-- page_container -->
	
</div><!-- internal_main -->


<?php get_footer(); ?>


		





<?php get_header(); ?>

<div id="internal_main">
	
	<div id="internal_banner" class="banner_with_page_title">
		
		<div class="internal_banner_content">
			
			<h1 class="internal_header"><?php the_field( 'internal_banner_blog_title','option'); ?></h1><!-- banner_title -->
			
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
			
			<?php get_template_part( 'loop', 'single' ); ?>
			
		</div><!-- page_content -->
		
	</div><!-- page_container -->
	
	
</div><!-- internal_main -->


<?php get_footer(); ?>





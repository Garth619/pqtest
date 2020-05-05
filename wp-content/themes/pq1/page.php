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
		<?php $banner_image = get_field( 'banner_image' ); ?>
		
		<?php if($banner_image) : ?>
		
			<img id="internal_hero" src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>"/><!-- internal_hero -->
		
		<?php else: ?>
		
			<img id="internal_hero" src="<?php echo $global_internal_banner_image['url']; ?>" alt="<?php echo $global_internal_banner_image['alt']; ?>"/><!-- internal_hero -->
		
		<?php endif;?>
		
	</div><!-- internal_banner -->
	
	<div class="page_container">
		
		<?php get_sidebar(); ?>
		
		<div class="page_content content">
			
			<?php if(get_field('banner_h1') == "Yes") : ?>
			
				<h2 class="page_header"><?php the_title();?></h2><!-- page_header -->
			
			<?php else:?>
			
				<h1 class="page_header"><?php the_title();?></h1><!-- page_header -->
			
			<?php endif;?>
			
			<?php get_template_part( 'loop', 'page' ); ?>
			
		</div><!-- page_content -->
		
	</div><!-- page_container -->
	
	
</div><!-- internal_main -->
		

<?php get_footer(); ?>

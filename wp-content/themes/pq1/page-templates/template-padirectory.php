<?php 

/* Template Name: PA Directory */

get_header(); ?>

<div id="internal_main">
	
	<div id="internal_banner" class="banner_with_page_title">
		
		<div class="internal_banner_content">
			
			<h1 class="internal_header"><?php the_title();?></h1><!-- banner_title -->
			
		</div><!-- internal_banner_content -->
		
		<?php $global_internal_banner_image = get_field( 'global_internal_banner_image','option'); ?>
		<?php $pa_directory_internal_banner = get_field( 'pa_directory_internal_banner' ); ?>
		
		<?php if($pa_directory_internal_banner) : ?>
		
			<img id="internal_hero" src="<?php echo $pa_directory_internal_banner['url']; ?>" alt="<?php echo $pa_directory_internal_banner['alt']; ?>"/><!-- internal_hero -->
		
		<?php else: ?>
		
			<img id="internal_hero" src="<?php echo $global_internal_banner_image['url']; ?>" alt="<?php echo $global_internal_banner_image['alt']; ?>"/><!-- internal_hero -->
		
		<?php endif;?>
		
	</div><!-- internal_banner -->
	
	<div class="pa_directory">
		
		<?php if(get_field('practice_area_directory')): ?>
		
			<ul class="pa_directory_top_menu">
				
				<?php while(has_sub_field('practice_area_directory')): ?>
		 
					<li>
						
						<a><?php the_sub_field( 'title' ); ?></a>
					
						<?php $obj = get_sub_field('pa_nav_menu'); ?>
				
						<?php wp_nav_menu( array( 'menu' => $obj->name) ); ?>
					 
					 </li>
					
				<?php endwhile; ?>
			
			</ul><!-- pa_directory_top_menu -->
		 
		<?php endif; ?>
		
	</div><!-- pa_directory -->
	
</div><!-- internal_main -->
		
<?php get_footer(); ?>

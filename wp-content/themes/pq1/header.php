<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


<style>
	
	<?php if(get_field('fonts','option')): ?>
	 
		<?php while(has_sub_field('fonts','option')): ?>
	 
			@import url(<?php the_sub_field( 'font_url' ); ?>);
	    
		<?php endwhile; ?>
	 
	<?php endif; ?>



<?php the_field( 'review_css','option'); ?>

</style>

<?php wp_head(); ?>

<?php the_field('schema_code', 'option'); ?>

<?php the_field('analytics_code', 'option'); ?>

</head>

<body <?php body_class(); ?>>
	
	
	<?php $mobilebar = get_field('mobile_header_layout','option') == "Double Bar";?>
	
	
	<header class="<?php $mobilebar_class = $mobilebar ? 'double_bar' : 'single_bar';echo $mobilebar_class?>">
		
		<?php 
			
			if($mobilebar) { ?>
		
				<div class="mobile_logo">
			
					<a href="<?php bloginfo('url');?>">
				
						<?php $mobile_logo = get_field( 'mobile_logo','option');?>
				
						<img src="<?php echo $mobile_logo['url']; ?>" alt="<?php echo $mobile_logo['alt']; ?>" />
				
					</a>
			
				</div><!-- mobile_logo -->
		
		<?php } ?>
		
		<div class="header_top">
			
			<div class="header_top_inner">
			
			<div class="header_left">
				
				<a href="<?php bloginfo('url');?>">
					
					<picture>
					
						<?php 
							
							$logo = get_field( 'logo','option'); 
							$mobile_logo = get_field( 'mobile_logo','option');
						
						?>
					
						<source media="(max-width: 767px)" srcset="<?php echo $mobile_logo['url']; ?>">
						
						<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
					
					</picture>
					
				</a>
				
			</div><!-- header_left -->
			
			<div id="fixed_menu" class="header_right">
				
				<div class="free_consultaton_phone">
					
					<div class="free_consultation">
						
						<?php if(get_field('header_text','option')): ?>
						 
							<?php while(has_sub_field('header_text','option')): ?>
						 
								<span><?php the_sub_field( 'header_text_line' ); ?></span>
						    
							<?php endwhile; ?>
						 
						<?php endif; ?>
					
					</div><!-- free_consultation -->
					
					<a class="phone" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_field('main_phone', 'option')); ?>"><?php the_field( 'main_phone','option'); ?></a>
					
				</div><!-- free_consultaton -->
				
				<div class="menu_wrapper">
					
					<div class="menu_inner">
					
						<div class="menu_bars">
					
							<span></span>
							<span></span>
							<span></span>
						
						</div><!-- menu_bars -->
						
					</div><!-- menu_inner -->
					
					<div class="menu_inner">
						
						<div class="menu_close close"></div><!-- menu_close -->
					
					</div><!-- menu_inner -->
					
				</div><!-- menu_wrapper -->
				
			</div><!-- header_right -->
			
			</div><!-- header_top_inner -->
			
		</div><!-- header_top -->
		
		<div class="header_bottom">
			
			<div class="header_bottom_inner">
			
				<nav class="nav_desktop"><?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?></nav>
			
			</div><!-- header_bottom_inner -->
			
		</div><!-- header_bottom -->
		
	</header>
				


			
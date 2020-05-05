<section id="section_one" class="<?php $mobilebar = get_field('mobile_header_layout','option') == "Double Bar"; $mobilebar_class = $mobilebar ? 'double_bar' : 'single_bar';echo $mobilebar_class?>">
	
	<?php if(get_field('video_option_sec_one') == "Yes") { 
	
		get_template_part( '/page-templates/includes/homepage_template_parts/section_one/template', 'sec-one-video-layout' );
	
	} 
	
	elseif(get_field('video_option_sec_one') == "No") {
	
		get_template_part( '/page-templates/includes/homepage_template_parts/section_one/template', 'sec-one-regular-layout' ); 
	
	}
	
	$hero_desktop_image = get_field( 'hero_desktop_image' );
	$hero_small_laptop_image = get_field( 'hero_small_laptop_image' );
	$hero_image_tablet = get_field( 'hero_image_tablet' );
	$hero_image_mobile = get_field( 'hero_image_mobile' ); 
	
	?>
	
	<picture>
		
		<source media="(max-width: 450px)" srcset="<?php echo $hero_image_mobile['url']; ?>">

		<source media="(max-width: 1066px)" srcset="<?php echo $hero_image_tablet['url']; ?>">

		<source media="(max-width: 1270px)" srcset="<?php echo $hero_small_laptop_image['url']; ?>">
	
		<img id="hero_img" src="<?php echo $hero_desktop_image['url']; ?>" alt="<?php echo $hero_desktop_image['alt']; ?>"  />

	</picture>
	
</section><!-- section_one -->


<section id="section_six">
	
	<div class="sec_six_inner">
		
		<div class="sec_six_left">
			
			<div class="sec_six_left_inner">
				
				<span><?php the_field( 'sec_six_title' ); ?></span>
				
				<a class="button" href="<?php the_field( 'view_all_button_page_link' ); ?>"><?php the_field( 'view_all_button_verbiage' ); ?></a>
				
			</div><!-- sec_six_left_inner -->
			
			<picture>
				
				<?php $sec_six_image_background_desktop = get_field( 'sec_six_image_background_desktop' ); ?>
				<?php $sec_six_image_background_large_desktop = get_field( 'sec_six_image_background_large_desktop' ); ?>
				<?php $sec_six_image_background_small_desktop = get_field( 'sec_six_image_background_small_desktop' ); ?>
				<?php $sec_six_image_background_tablet = get_field( 'sec_six_image_background_tablet' ); ?>
				<?php $sec_six_image_background_mobile = get_field( 'sec_six_image_background_mobile' ); ?>
				
				<?php if($sec_six_image_background_mobile) { ?>
				
					<source media="(max-width: 767px)" srcset="<?php echo $sec_six_image_background_mobile['url']; ?>">
				
				<?php } ?>
			
				<?php if($sec_six_image_background_tablet) { ?>
				
					<source media="(max-width: 1180px)" srcset="<?php echo $sec_six_image_background_tablet['url']; ?>">
				
				<?php } ?>
				
				<?php if($sec_six_image_background_small_desktop) { ?>
				
					<source media="(max-width: 1270px)" srcset="<?php echo $sec_six_image_background_small_desktop['url']; ?>">
				
				<?php } ?>
				
				<?php if($sec_six_image_background_large_desktop) { ?>
				
					<source media="(max-width: 1450px)" srcset="<?php echo $sec_six_image_background_large_desktop['url']; ?>">
				
				<?php } ?>
				
				<img data-src="<?php echo $sec_six_image_background_desktop['url']; ?>" alt="<?php echo $sec_six_image_background_desktop['alt']; ?>" />
			
			</picture>
			
		</div><!-- sec_six_left -->
		
		<div class="sec_six_right">
			
			<?php if(get_field('sec_six_practice_areas')): ?>
				
				<ul>
			 
				<?php while(has_sub_field('sec_six_practice_areas')): ?>
			 
					<li><a href="<?php the_sub_field( 'practice_area_page_link' ); ?>"><?php the_sub_field( 'practice_area_title' ); ?></a></li>		
			    
				<?php endwhile; ?>
				
				</ul>
			 
			<?php endif; ?>
			
		</div><!-- sec_six_right -->
		
	</div><!-- sec_six_inner -->
	
</section><!-- section_six -->
<section id="section_four">
	
	<div class="sec_four_inner">
		
		<div id="sec_four_testi">
			
			<span class="testi_title"><?php the_field( 'testimonials_title' ); ?></span><!-- testi_title -->
			
			<div class="testi_inner">
			
				<div class="sec_four_arrow sec_four_arrow_left">
					
					<?php echo file_get_contents( get_template_directory() . "/images/arrow.svg"); ?>
					
				</div><!-- sec_four_arrow -->
				
				<div class="sec_four_test_slider">
					
					<?php if(get_field('sec_four_testimonials')): ?>
					 
						<?php while(has_sub_field('sec_four_testimonials')): ?>
					 
							<div class="sec_four_single_testi">
					
								<span class="testi_intro"><?php the_sub_field( 'intro' ); ?></span><!-- testi_intro -->
	
							<span class="testi_description"><?php the_sub_field( 'description' ); ?></span><!-- testi_description -->
						
							<span class="testi_name"><?php the_sub_field( 'name' ); ?></span><!-- testi_name -->
					
						</div><!-- sec_four_single_testi -->
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>
				
				</div><!-- sec_four_test_slider -->
				
				<div class="sec_four_arrow sec_four_arrow_right">
					
					<?php echo file_get_contents( get_template_directory() . "/images/arrow.svg"); ?>
					
				</div><!-- sec_four_arrow -->
			
			</div><!-- testi_inner -->
			
		</div><!-- sec_four_testi -->
		
		<div class="testimonial_bg">
			
			<div class="testimonial_bg_inner">
				
				<picture>
				
					<?php $sec_four_background_desktop = get_field( 'sec_four_background_desktop' ); ?>
					<?php $sec_four_background_large_laptop = get_field( 'sec_four_background_large_laptop' ); ?>
					<?php $sec_four_background_small_laptop = get_field( 'sec_four_background_small_laptop' ); ?>
					<?php $sec_four_background_tablet = get_field( 'sec_four_background_tablet' ); ?>
					
					<?php if($sec_four_background_tablet) { ?>
					
						<source media="(max-width: 995px)" srcset="<?php echo $sec_four_background_tablet['url']; ?>">
					
					<?php }?>
					
					<?php if($sec_four_background_small_laptop) { ?>
					
						<source media="(max-width: 1380px)" srcset="<?php echo $sec_four_background_small_laptop['url']; ?>">
					
					<?php }?>
					
					<?php if($sec_four_background_large_laptop) { ?>
					
						<source media="(max-width: 1450px)" srcset="<?php echo $sec_four_background_large_laptop['url']; ?>">
					
					<?php }?>
				
					<img data-src="<?php echo $sec_four_background_desktop['url']; ?>" alt="<?php echo $sec_four_background_desktop['alt']; ?>" />
				
				</picture>
				
			</div><!-- testimonial_bg_inner -->
			
		</div><!-- testimonial_bg -->
		
	</div><!-- sec_four_inner -->
	
</section><!-- section_four -->
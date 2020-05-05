<section id="section_three">
	
	<h1 id="sec_three_header"><?php the_field( 'sec_three_large_header' ); ?></h1><!-- sec_three_header -->
	
	<div class="sec_three_inner">
		
		<div id="sec_three_left_trigger" class="sec_three_left">
			
			<?php if(get_field('image_options_sec_three') == "One Image" ) { ?>
			
				<div class="sec_three_img_wrapper">
				
					<picture>
				
						<?php $sec_three_image = get_field( 'sec_three_image' ); ?>
						<?php $sec_three_image_large_laptop = get_field( 'sec_three_image_large_laptop' ); ?>
						<?php $sec_three_image_small_laptop = get_field( 'sec_three_image_small_laptop' ); ?>
						<?php $sec_three_image_tablet = get_field( 'sec_three_image_tablet' ); ?>
						<?php $sec_three_image_mobile = get_field( 'sec_three_image_mobile' ); ?>
						
						<?php if($sec_three_image_mobile) {?>
						
							<source media="(max-width: 767px)" srcset="<?php echo $sec_three_image_mobile['url']; ?>">
						
						<?php } ?>
						
						<?php if($sec_three_image_tablet) {?>
					
							<source media="(max-width: 1180px)" srcset="<?php echo $sec_three_image_tablet['url']; ?>">
						
						<?php } ?>
						
						<?php if($sec_three_image_small_laptop) {?>
						
							<source media="(max-width: 1380px)" srcset="<?php echo $sec_three_image_small_laptop['url']; ?>">
						
						<?php } ?>
						
						<?php if($sec_three_image_large_laptop) {?>
						
							<source media="(max-width: 1450px)" srcset="<?php echo $sec_three_image_large_laptop['url']; ?>">
						
						<?php } ?>
					
						<img class="one" data-src="<?php echo $sec_three_image['url']; ?>" alt="<?php echo $sec_three_image['alt']; ?>" />
				
						</picture>
			
				</div><!-- sec_three_img_wrapper -->
			
			<?php } else { ?>
			
			
			
			<div class="sec_three_multi_img_wrapper">
				
				<div class="sec_three_img sec_three_img_one">
					
					<?php $image_one_sec_three = get_field( 'image_one_sec_three' ); ?>
					
					<?php if ( $image_one_sec_three ) { ?>
						
						<img data-src="<?php echo $image_one_sec_three['url']; ?>" alt="<?php echo $image_one_sec_three['alt']; ?>" />
					
					<?php } ?>	
									
				</div><!-- sec_three_img -->
				
				<div class="sec_three_img sec_three_img_two">
					
					<?php $image_two_sec_three = get_field( 'image_two_sec_three' ); ?>
					
					<?php if ( $image_two_sec_three ) { ?>
						
						<img data-src="<?php echo $image_two_sec_three['url']; ?>" alt="<?php echo $image_two_sec_three['alt']; ?>" />
					
					<?php } ?>
					
				</div><!-- sec_three_img -->
				
				<div class="sec_three_img sec_three_img_three">
					
					<?php $image_three_sec_three = get_field( 'image_three_sec_three' ); ?>
					
					<?php if ( $image_three_sec_three ) { ?>
						
						<img data-src="<?php echo $image_three_sec_three['url']; ?>" alt="<?php echo $image_three_sec_three['alt']; ?>" />
					
					<?php } ?>
					
				</div><!-- sec_three_img -->
				
			</div><!-- sec_three_multi_img_wrapper -->
			
			<?php } ?>
			
			<div class="sec_three_quote">
				
				<div class="sec_three_quote_inner">
				
					<?php the_field( 'sec_three_quote' ); ?>
					
					<?php if(get_field('sec_three_quote_name')) { ?>
					
						<span class="quote_name"><?php the_field( 'sec_three_quote_name' ); ?></span><!-- quote_name -->
					
					<?php } ?>
			
					<a class="sec_three_button button button_with_arrow" href="<?php the_field( 'meet_attorney_button_page_link' ); ?>">
						
						<div class="arrow_inner">
						
							<span><?php the_field( 'meet_attorney_button_verbiage' ); ?></span>
						
							<?php echo file_get_contents( get_template_directory() . "/images/arrow.svg"); ?>
						
						</div><!-- arrow_inner -->
					
					</a>
			
			</div><!-- sec_three_quote_inner -->
				
			</div><!-- sec_three_quote -->
			
		</div><!-- sec_three_left -->
		
		<div class="sec_three_right content">
			
			<?php the_field( 'sec_three_content' ); ?>
			
		</div><!-- sec_three_right -->
		
	</div><!-- sec_three_inner -->
	
</section><!-- section_three -->
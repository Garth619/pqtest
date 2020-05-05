	<div class="sec_one_inner">
	
	<div class="sec_one_left">
			
			<div class="sec_one_video desktop">
					
					<a href="https://www.youtube.com/embed/<?php the_field( 'sec_one_youtube_id' ); ?>" data-lity>
					
					<div class="video_inner">
						
						<div class="video_thumb">
							
							<?php get_template_part( '/page-templates/includes/homepage_template_parts/section_one/template', 'sec-one-video' ); ?>
	
							<div class="video_overlay">
								
								<span class="play_button"></span><!-- play_button -->
								
							</div><!-- video_overlay -->
							
						</div><!-- video_thumb -->
						
						<span class="video_title"><?php the_field( 'video_title' ); ?></span><!-- video_title -->
						
					</div><!-- video_inner -->
					
					</a>
					
				</div><!-- sec_one_video -->
			
				<div id="sec_one_awards">
						
				<div class="sec_one_awards_slider">
					
					<?php if(get_field('featured_on_logos')): ?>
					 
						<?php while(has_sub_field('featured_on_logos')): ?>
						
							<?php $image = get_sub_field( 'image' ); ?>
					 
							<div class="sec_one_awards_slide">
						
								<div class="sec_one_awards_inner">
							
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							
								</div><!-- sec_one_awards_inner -->
						
							</div><!-- sec_one_awards_slide -->
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>
					
				</div><!-- sec_one_awards_slider -->
						
				<span class="featured_on"><?php the_field( 'featured_on_verbiage' ); ?></span><!-- featured_on -->
						
			</div><!-- sec_one_awards -->
			
		
			
			</div><!-- sec_left -->
		
		<div class="sec_one_right">
			
			<div class="sec_one_video mobile">
				
					<a href="https://www.youtube.com/embed/<?php the_field( 'sec_one_youtube_id' ); ?>" data-lity>
				
					<div class="video_inner">
					
						<div class="video_thumb">
							
							<?php get_template_part( '/page-templates/includes/homepage_template_parts/section_one/template', 'sec-one-video' ); ?>
						
							<div class="video_overlay">
							
								<span class="play_button"></span><!-- play_button -->
							
							</div><!-- video_overlay -->
						
					</div><!-- video_thumb -->
					
					<span class="video_title"><?php the_field( 'video_title' ); ?></span><!-- video_title -->
					
				</div><!-- video_inner -->
				
				</a>
				
			</div><!-- sec_one_video -->
			
			<?php if(get_field('section_one_selling_points')): ?>
			 	
			 	<ul class="sec_one_selling_points">
			 
				<?php while(has_sub_field('section_one_selling_points')): ?>
			 
					<li><?php the_sub_field( 'selling_point' ); ?></li>
			    
				<?php endwhile; ?>
				
			 	</ul>
			 
			<?php endif; ?>
						
			<div class="tablet_layout">
				
				<div class="sec_one_video tablet">
					
					<a href="https://www.youtube.com/embed/<?php the_field( 'sec_one_youtube_id' ); ?>" data-lity>
				
					<div class="video_inner">
					
						<div class="video_thumb">
							
							<?php get_template_part( '/page-templates/includes/homepage_template_parts/section_one/template', 'sec-one-video' ); ?>

							<div class="video_overlay">
							
								<span class="play_button"></span><!-- play_button -->
							
							</div><!-- video_overlay -->
						
					</div><!-- video_thumb -->
					
					<span class="video_title"><?php the_field( 'video_title' ); ?></span><!-- video_title -->
					
				</div><!-- video_inner -->
				
				</a>
				
			</div><!-- sec_one_video -->
			
			<div class="tablet_title_layout">
			
				<span class="sec_one_title"><?php the_field( 'section_one_large_header' ); ?></span><!-- sec_one_title -->
			
				<a class="button free_consultation_button" href="#consultation"><?php the_field( 'request_button_verbiage' ); ?></a>
			
				</div><!-- tablet_title_layout -->
			
			</div><!-- tablet_layout -->
			
		</div><!-- sec_one_right -->
		
	</div><!-- sec_one_inner -->
		
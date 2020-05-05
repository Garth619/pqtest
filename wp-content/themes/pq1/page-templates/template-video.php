<?php 

/* Template Name: Video Center */

get_header(); ?>

<div id="internal_main" class="no_banner">
	
	<div class="internal_container">
		
		<h1 class="internal_header"><?php the_title();?></h1><!-- internal_header -->
		
		<div class="inner_container">
		
			<div class="video_wrapper">
				
				<?php if(get_field('video_center')): ?>
				 
					<?php while(has_sub_field('video_center')): ?>
					
						<?php if(get_field('wistia_or_youtube') == "Youtube") { ?>
				 
							<div class="single_video">
					
								<a href="https://www.youtube.com/embed/<?php the_sub_field( 'youtube_id' ); ?>" data-lity>
					
									<div class="video_thumb">
						
										<img class="youtube" src="https://img.youtube.com/vi/<?php the_sub_field( 'youtube_id' ); ?>/0.jpg"/>
						
										<div class="video_overlay">
							
											<span class="play_button"></span><!-- play_button -->
							
										</div><!-- video_overlay -->
						
									</div><!-- video_thumb -->
					
									<span class="video_title"><?php the_sub_field( 'video_title' ); ?></span><!-- video_title -->
					
								</a>
					
							</div><!-- single_video -->
						
						<?php }?>
						
						<?php if(get_field('wistia_or_youtube') == "Wistia") { ?>
						
							<div class="single_video">
					
								<div class="video_thumb">
						
									<div class="video_overlay">
							
										<span class="play_button"></span><!-- play_button -->
							
									</div><!-- video_overlay -->
										
									<div class="mywistia wistia_embed wistia_async_<?php the_sub_field('wistia_id'); ?> popover=true popoverContent=thumbnail">
																						
									</div><!-- mywistia -->
						
								</div><!-- video_thumb -->
					
								<span class="video_title wistia_embed wistia_async_<?php the_sub_field( 'wistia_id' ); ?> popover=true popoverContent=html"><?php the_sub_field( 'video_title' ); ?></span><!-- video_title -->
					
							</div><!-- single_video -->
						
						<?php }?>
				    
					<?php endwhile; ?>
					
					<script src="https://fast.wistia.com/embed/medias/waichudc62.jsonp" async></script>
					<script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
				 
				<?php endif; ?>
				
			</div><!-- video_wrapper -->
				
		</div><!-- inner_container -->
	
	</div><!-- internal_main -->

<?php get_footer(); ?>

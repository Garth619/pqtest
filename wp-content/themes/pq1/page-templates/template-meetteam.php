<?php 

/* Template Name: Meet the Team */

get_header(); ?>

<div id="internal_main" class="no_banner">
	
	<div class="internal_container">
		
		<h1 class="internal_header"><?php the_title();?></h1><!-- internal_header -->
		
		<div class="inner_container">
			
			<div id="meet_team">
				
				<?php $our_team = get_field( 'our_team' ); ?>
				
				<?php if ( $our_team ): ?>
					
					<?php foreach ( $our_team as $post ):  ?>
						<?php setup_postdata ( $post ); ?>
							
							
							<div class="single_att">
					
								<a href="<?php the_permalink();?>">
						
									<div class="att_img">
							
										<?php $attorney_profile = get_field( 'attorney_profile' ); ?>
										
										<?php if ( $attorney_profile ) { ?>
											
											<img src="<?php echo $attorney_profile['url']; ?>" alt="<?php echo $attorney_profile['alt']; ?>" />
										
										<?php } else { ?>
						
											<img src="<?php bloginfo('template_directory');?>/images/placeholder.jpg"/>
							
											<span class="att_placeholder"></span><!-- att_placeholder -->
						
										<?php } ?>
							
									</div><!-- att_img -->
						
									<div class="att_info_wrapper">
							
										<div class="att_info">
								
											<span class="att_name"><?php the_title();?></span>
								
											<span class="att_position"><?php the_field( 'position' ); ?></span>
								
										</div><!-- att_info -->
							
										<div class="att_arrow">
								
											<div class="att_arrow_inner">
												
												<div class="view_profile">
													
													<span>View Profile</span>
												
												</div><!-- view_profile -->
												
											</div><!-- att_arrow -->
								
										</div><!-- att_arrow -->
							
									</div><!-- att_info -->
						
								</a>
					
							</div><!-- single_att -->
							
							
						<?php endforeach; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
								
			</div><!-- meet_team -->
		
		</div><!-- meet_team -->
				
	</div><!-- internal_container -->
	
	
</div><!-- internal_main -->					 
					 	
<?php get_footer(); ?>

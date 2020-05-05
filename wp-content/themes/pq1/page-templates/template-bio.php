<?php 

/* Template Name: Att Bio */

get_header(); ?>

<div id="internal_main">
	
	<div class="att_bio_wrapper">
		
		<div class="att_bio_left">
			
			<h1 class="att_header"><?php the_title();?></h1><!-- internal_header -->
			
			<span class="position"><?php the_field( 'position' ); ?></span><!-- position -->
			
			<div class="att_bio_image mobile">
				
					<?php $attorney_profile = get_field( 'attorney_profile' ); ?>
					
					<?php if ( $attorney_profile ) { ?>
						
						<img src="<?php echo $attorney_profile['url']; ?>" alt="<?php echo $attorney_profile['alt']; ?>" />
					
					<?php } else { ?>
						
						<img src="<?php bloginfo('template_directory');?>/images/placeholder.jpg"/>
							
						<span class="att_placeholder"></span><!-- att_placeholder -->
							
					<?php } ?>
					
				</div><!-- att_bio_image -->
			
			<div class="att_bio_content content">
				
				<?php get_template_part( 'loop', 'page' ); ?>
				
			</div><!-- att_bio_content -->
			
		</div><!-- att_bio_left -->
				
		<div class="att_bio_right">
			
			<div class="att_bio_right_inner">
				
				<div class="att_bio_image desktop">
					
					<?php if ( $attorney_profile ) { ?>
						
						<img src="<?php echo $attorney_profile['url']; ?>" alt="<?php echo $attorney_profile['alt']; ?>" />
					
					<?php } else { ?>
						
						<img src="<?php bloginfo('template_directory');?>/images/placeholder.jpg"/>
							
						<span class="att_placeholder"></span><!-- att_placeholder -->
							
					<?php } ?>
					
				</div><!-- att_bio_image -->
				
				
				<?php if(get_field('attorney_accolades')): ?>
				
					<?php while(has_sub_field('attorney_accolades')): ?>
					
						<div class="att_meta">
				 
						<h3><?php the_sub_field( 'title' ); ?></h3>
						
							<?php if(get_sub_field('list_items')): ?>
								
								<ul>
							 
								<?php while(has_sub_field('list_items')): ?>
							 
									<li><?php the_sub_field( 'list_item' ); ?></li>
							    
								<?php endwhile; ?>
								
								</ul>
							 
							<?php endif; ?>
							
							</div><!-- att_meta -->
		
						<?php endwhile; ?>
					
				<?php endif; ?>
				
				<div class="att_bio_media">
					
					<?php if(get_field('att_linkedin')) { ?>
					
						<a class="" href="<?php the_field( 'att_linkedin' ); ?>">
						
							<?php echo file_get_contents( get_template_directory() . "/images/footer_icon-03.svg"); ?>
						
						</a>
					
					<?php } ?>
					
				</div><!-- att_bio_media --<>
				
			</div><!-- att_bio_right_inner -->
			
		</div><!-- att_bio_right -->
		
	</div><!-- att_bio_wrapper -->
		
				
	</div><!-- internal_main -->
					 
					 	
<?php get_footer(); ?>

<?php 

/* Template Name: Case Results */

get_header(); ?>

<div id="internal_main">
	
	<div class="internal_container">
				
		<h1 class="internal_header"><?php the_title();?></h1><!-- internal_header -->
		
		<div class="case_results_wrapper">
			
			<?php if(get_field('case_results_page')): ?>
	 
				<?php while(has_sub_field('case_results_page')): ?>
	 
					<div class="single_cr">
			
						<span class="cr_amount"><?php the_sub_field( 'amount' ); ?></span><!-- cr_amount -->
			
						<span class="cr_type"><?php the_sub_field( 'type' ); ?></span><!-- cr_type -->
				
						<span class="cr_description"><?php the_sub_field( 'description' ); ?></span><!-- cr_description -->
						
						<?php if(get_sub_field('extended_review') == "Yes") { ?>
						
							<a class="cr_read_more" href="<?php the_sub_field( 'case_results_post_selection' ); ?>">Read More</a>
								
						<?php } ?>

					</div><!-- single_cr -->
	    
				<?php endwhile; ?>
	 
			<?php endif; ?>		
						
		</div><!-- case_results_wrapper -->
				
	</div><!-- internal_container -->
		
	</div><!-- internal_main -->
						
<?php get_footer(); ?>

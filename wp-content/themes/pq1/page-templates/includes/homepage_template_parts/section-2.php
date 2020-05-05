<section id="section_two">
	
	<div class="sec_two_inner">
	
		<div id="sec_two_cr">
			
			<?php if(get_field('sec_two_case_results')): ?>
			 
				<?php while(has_sub_field('sec_two_case_results')): ?>
			 
					<div class="sec_two_cr_single">
						
						<?php $icon = get_sub_field( 'icon' ); ?>
				
						<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
				
						<span class="cr_amount"><?php the_sub_field( 'amount' ); ?></span><!-- cr_amount -->
				
						<span class="cr_type"><?php the_sub_field( 'refinery_explosion' ); ?></span><!-- cr_type -->
				
					</div><!-- sec_two_cr_single -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
		</div><!-- sec_two_cr -->
		
		<div class="sec_two_arrows">
			
			<div class="sec_two_arrow sec_two_arrow_left">
				
				<?php echo file_get_contents( get_template_directory() . "/images/arrow.svg" ) ?>
				
			</div><!-- sec_two_arrow_left -->
			
			<div class="sec_two_arrow sec_two_arrow_right">
				
				<?php echo file_get_contents( get_template_directory() . "/images/arrow.svg"); ?>
				
			</div><!-- sec_two_arrow_right -->
			
		</div><!-- sec_two_arrows -->
	
	</div><!-- sec_two_inner -->
	
</section><!-- section_two -->
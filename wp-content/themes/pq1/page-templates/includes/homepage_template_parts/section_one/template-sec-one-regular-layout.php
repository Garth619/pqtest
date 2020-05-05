
<div class="sec_one_reg_inner">

	<div class="sec_one_reg_right">
	
		<?php if(get_field('section_one_selling_points')): ?>
			 	
			<ul class="sec_one_selling_points">
			 
				<?php while(has_sub_field('section_one_selling_points')): ?>
			 
					<li><?php the_sub_field( 'selling_point' ); ?></li>
			    
				<?php endwhile; ?>
				
			</ul>
			 
		<?php endif; ?>
			
		<span class="sec_one_title"><?php the_field( 'section_one_large_header' ); ?></span><!-- sec_one_title -->
			
		<a class="button free_consultation_button" href="#consultation"><?php the_field( 'request_button_verbiage' ); ?></a>
	
	</div><!-- sec_one_reg_right -->

</div><!-- sec_one_reg_inner -->
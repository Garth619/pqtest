<?php if(get_field('social_media','option')): ?>
				 
	<?php while(has_sub_field('social_media','option')): ?>
	
		<a href="<?php the_sub_field( 'link' ); ?>" target="_blank" rel="nopener">
			
		<?php 
			
			if(get_sub_field('icon') == "Facebook" ) { 
				echo file_get_contents( get_template_directory() . "/images/footer_icon-01.svg");
			} 
			elseif(get_sub_field('icon') == "Twitter" ) { 
				echo file_get_contents( get_template_directory() . "/images/footer_icon-02.svg");
			}
			elseif(get_sub_field('icon') == "LinkedIn" ) { 
				echo file_get_contents( get_template_directory() . "/images/footer_icon-03.svg");
			}
			elseif(get_sub_field('icon') == "Youtube" ) { 
				echo file_get_contents( get_template_directory() . "/images/footer_icon-04.svg");
			}
		
		?>
	
		</a>
	  
	<?php endwhile; ?>
	
	<?php endif; ?>
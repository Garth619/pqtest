<footer id="footer_trigger">
	
	<div id="consultation">
		
		<div class="footer_titles">
		
			<span class="form_subtitle"><?php the_field( 'form_subtitle', 'option'); ?></span><!-- form_subtitle -->
		
			<span class="form_largeheader"><?php the_field( 'form_largeheader', 'option'); ?></span><!-- form_largeheader -->
		
		</div><!-- footer_titles -->
		
		<?php gravity_form(1, false, false, false, '', true, 12); ?>
		
		<span class="required"><?php the_field( 'required_field_verbiage', 'option'); ?></span><!-- required -->
		
	</div><!-- consultation -->
	
	<?php if(!is_page_template('page-templates/template-contact.php')) { 
	
		get_template_part('page-templates/includes/template','locations');
	
 } ?>
	
	<div class="copyright">
		
		<div class="copyright_inner">
			
			<div class="copyright_left">
			
				<ul>
					<li>Copyright &copy; <?php echo date("Y"); ?> <?php the_field( 'copyright_law_firm_name','option'); ?></li>
					<?php if(get_field('disclaimer','option')) { ?>
					<li><a href="<?php the_field( 'disclaimer','option'); ?>"><?php the_field( 'disclaimer_title','option'); ?></a></li>
					<?php } ?>
					<?php if(get_field('privacy_policy','option')) { ?>
					<li><a href="<?php the_field( 'privacy_policy','option'); ?>"><?php the_field( 'privacy_policy_title','option'); ?></a></li>
					<?php } ?>
				</ul>
				
				<?php the_field( 'copyright_content','option'); ?>
			
			</div><!-- copyright_left -->
			
			<a class="ilawyer" href="//ilawyermarketing.com" target="_blank" rel="noopener">
				
				<?php echo file_get_contents( get_template_directory() . "/images/footer-01.svg" ) ?>
				
			</a><!-- ilawyer -->
			
		</div><!-- copyright_inner -->
		
	</div><!-- copyright -->
		
</footer>


<?php wp_footer();?>



</body>
</html>

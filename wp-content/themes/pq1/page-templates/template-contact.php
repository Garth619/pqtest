<?php
	
	/* Template Name: Contact */
	
	get_header();
	
	if(get_field('map_locator') == "Yes") {
		get_template_part( 'page-templates/includes/contact_page/template', 'contact-map' );
	}else {
		get_template_part( 'page-templates/includes/contact_page/template', 'contact-reg' );
	}

	get_footer(); ?>
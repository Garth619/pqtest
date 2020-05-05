<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


		
		<h2 class="blog_header"><?php the_title();?></h2>
		
		<div class="blog_meta">
		
			<span class="date">Posted on <?php $pfx_date = get_the_date(); echo $pfx_date ?> in</span>
			
			<?php echo get_the_category_list();?>
		
		</div><!-- blog_meta -->
		
		<div class="blog_content">
			
			<?php the_content();?>
		
		</div><!-- blog_content -->
			
		<?php edit_post_link( __( 'Edit'), '', '' ); ?>
	


<?php endwhile; // end of loop ?>

<?php endif; ?>
<picture>
							
	<?php $video_thumbnail_desktop = get_field( 'video_thumbnail_desktop' ); ?>
	<?php $video_thumbnail_tablet = get_field( 'video_thumbnail_tablet' ); ?>
	<?php $video_thumbnail_mobile = get_field( 'video_thumbnail_mobile' ); ?>
	<?php $video_thumbnail_mobile_webp = get_field( 'video_thumbnail_mobile_webp' ); ?>
	
	<source media="(max-width: 767px)" srcset="<?php echo $video_thumbnail_mobile_webp['url']; ?>" type="image/webp">
							
	<source media="(max-width: 767px)" srcset="<?php echo $video_thumbnail_mobile['url']; ?>">
								
	<source media="(max-width: 1170px)" srcset="<?php echo $video_thumbnail_tablet['url']; ?>">
								
	<img src="<?php echo $video_thumbnail_desktop['url']; ?>" alt="<?php echo $video_thumbnail_desktop['alt']; ?>" />
							
</picture>
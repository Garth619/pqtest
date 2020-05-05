<div id="internal_main" class="no_banner">
	
	<div id="contact_map_top">
		
		<h1 class="internal_header"><?php the_title();?></h1><!-- internal_header -->
		
		<div class="contact_phone_wrapper">
			
			<div class="contact_phone">
				
				<span class="phone_title"><?php the_field( 'toll_free_title' ); ?></span><!-- phone_title -->
				
				<a class="phone_number" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_field('toll_free_phone')); ?>"><?php the_field( 'toll_free_phone' ); ?></a><!-- phone_number -->
						
			</div><!-- contact_phone -->
			
			<div class="contact_phone">
				
				<span class="phone_title"><?php the_field( 'main_location_title' ); ?></span><!-- phone_title -->
				
				<a class="phone_number" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_field('main_location_phone')); ?>"><?php the_field( 'main_location_phone' ); ?></a><!-- phone_number -->
						
			</div><!-- contact_phone -->
			
		</div><!-- contact_phone_wrapper -->
		
		<div id="contact_social_media">
		
			<?php get_template_part('page-templates/includes/template','social-media'); ?>
			
		</div><!-- contact_social_media -->
		
		<div id="contact_top_content" class="content">
			
			<?php get_template_part( 'loop', 'page' ); ?>
						
		</div><!-- contact_top_content -->
		
	</div><!-- contact_map_top -->
	
	<div id="contact_bottom">
		
		<div id="map"></div>
		
		<div id="mobile_locations_wrapper">
			
			<div class="locations_select_wrapper">
				
				<div class="locations_select">
					
					<div class="selection">
						
						<span>Choose your state</span>
						
					</div><!-- selection -->
					
					<div class="selection_arrow"></div><!-- selection_arrow -->
					
				</div><!-- locations_select -->
				
				<div class="selection_dropdown">
					
					<?php $terms = get_terms( 'state' );
							
							if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
							
							echo '<ul>';
								
								foreach ( $terms as $term ) {
									
									echo '<li data-filter="' . $term->slug . '">' . $term->name . '</li>';
	    					}
	    					
							echo '<li data-filter="view-all">View All +</li></ul>';
						
						} ?>
					
				</div><!-- selection_dropdown -->
				
			</div><!-- locations_select_wrapper -->
			
			<div class="dynamic_height_wrapper">
			
			<div class="mobile_locations">
				
				<?php 
					
						$member_group_terms = get_terms( 'state' );
					
						foreach ( $member_group_terms as $member_group_term ) {
					
						$mymain_query = new WP_Query( array(
							'post_type' => 'location',
							'posts_per_page' => -1, 
							'meta_key'	=> 'map_city',
							'orderby'	=> 'meta_value', 
							'order' => 'ASC',
							'tax_query' => array(
								array(
            			'taxonomy' => 'state',
									'field' => 'slug',
									'terms' => array( $member_group_term->slug),
									'operator' => 'IN'
									)
								)
					
							)); while($mymain_query->have_posts()) : $mymain_query->the_post(); 
					

							$terms = get_the_terms( get_the_ID(), 'state' );
	                         
								if ( $terms && ! is_wp_error( $terms ) ) : 
	 
									$caseresult_links = array();
							
									foreach ( $terms as $term ) {
							
										$caseresult_links[] = $term->slug;
								
									}
	                         
									$caseresult_class = join( " ", $caseresult_links );
							
								endif; ?>

								<div class="single_mobile_location <?php echo $caseresult_class;?> view-all">
					
									<h2><?php the_field( 'map_city' ); ?></h2>
					
									<span class="mobile_address"><?php the_field( 'map_street_address' ); ?><br/> <?php the_field( 'map_city' ); ?>, <?php the_field( 'map_state' ); ?> <?php the_field( 'map_zip_code' ); ?></span><!-- mobile_address -->
					
									<?php 
							
										$get_directions = get_field('map_street_address') . ' ' . get_field('map_city') . ' ' . get_field('map_state') . ' ' . get_field('map_zip_code');
						
										$get_directions_url = str_replace(' ', '%20', $get_directions); 
						
									?>
									
									<?php if(get_field('get_directions_google_maps')) : ?>
									
									<a class="mobile_get_directions" href="<?php the_field('get_directions_google_maps');?>" target="_blank" rel="noopener">Get Directions</a><!-- mobile_get_directions -->
									
									<?php else:?>
						
										<a class="mobile_get_directions" href="https://www.google.com/maps/search/?api=1&query=<?php echo $get_directions_url;?>" target="_blank" rel="noopener">Get Directions</a><!-- mobile_get_directions -->
									
									<?php endif;?>
						
									<a class="mobile_phone" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_field('map_phone')); ?>">Phone <?php the_field( 'map_phone' ); ?></a><!-- mobile_phone -->
						
									<?php if(get_field('map_phone_spanish')) {?>
						
										<a class="mobile_phone spanish_mobile_phone" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_field('map_phone_spanish')); ?>">Spanish Phone <?php the_field( 'map_phone_spanish' ); ?></a><!-- mobile_phone -->
						
									<?php } ?>
					
								</div><!-- single_mobile_location -->
					
								<?php endwhile; 
	      
								wp_reset_postdata(); // reset the query
		      
							} ?>
		
				
			</div><!-- mobile_locations -->
			
		</div><!-- mobile_locations_wrapper -->
		
		</div><!-- dynamic_height_wrapper -->
		
	</div><!-- contact_bottom -->

</div><!-- internal_main -->

<script>

var map;

function initMap() {
	
	var styledMapType = new google.maps.StyledMapType(
        [{
            "featureType": "administrative",
            "elementType": "all",
            "stylers": [{
                "visibility": "on"
            }, {
                "hue": "#ff0000"
            }]
        }, {
            "featureType": "administrative",
            "elementType": "labels",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "administrative",
            "elementType": "labels.text",
            "stylers": [{
                "color": "#5100ff"
            }]
        }, {
            "featureType": "administrative",
            "elementType": "labels.text.fill",
            "stylers": [{
                "visibility": "on"
            }, {
                "color": "#18146a"
            }]
        }, {
            "featureType": "administrative",
            "elementType": "labels.text.stroke",
            "stylers": [{
                "visibility": "on"
            }, {
                "color": "#ffffff"
            }]
        }, {
            "featureType": "landscape",
            "elementType": "all",
            "stylers": [{
                "visibility": "on"
            }, {
                "color": "#f1f1f1"
            }]
        }, {
            "featureType": "landscape",
            "elementType": "labels",
            "stylers": [{
                "visibility": "on"
            }]
        }, {
            "featureType": "poi",
            "elementType": "all",
            "stylers": [{
                "visibility": "on"
            }, {
                "color": "#f1f1f1"
            }]
        }, {
            "featureType": "poi",
            "elementType": "labels",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "road",
            "elementType": "all",
            "stylers": [{
                "visibility": "on"
            }, {
                "color": "#ffffff"
            }]
        }, {
            "featureType": "road",
            "elementType": "geometry",
            "stylers": [{
                "lightness": 50
            }, {
                "visibility": "simplified"
            }]
        }, {
            "featureType": "road",
            "elementType": "labels",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "transit",
            "elementType": "all",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "water",
            "elementType": "all",
            "stylers": [{
                "visibility": "on"
            }, {
                "color": "#c6dbf7"
            }]
        }], {
            name: 'Styled Map'
      });
  
  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 4,
    center: new google.maps.LatLng(37.0902,-95.7129),
    mapTypeId: 'roadmap'
  });

  
  
  var script = document.createElement('script');
  
  var mydomain = window.location.hostname;
  
  script.src = '//'+mydomain+'/wp-json/wp/v2/location?&per_page=100&_jsonp=eqfeed_callback';
  document.getElementsByTagName('head')[0].appendChild(script);

	map.mapTypes.set('styled_map', styledMapType);
  map.setMapTypeId('styled_map');

}


window.eqfeed_callback = function(myJsonFile) {
    for (var i = 0; i < myJsonFile.length; i++) {
	    
	  var lawfirm = myJsonFile[i].acf.lawfirmlocation_name;
	    
	  // address
	    
	  var street_address = myJsonFile[i].acf.map_street_address;
	  
		var city = myJsonFile[i].acf.map_city;
	  
	  var state = myJsonFile[i].acf.map_state;
	  
		var zip = myJsonFile[i].acf.map_zip_code;
	  
	  var phone = myJsonFile[i].acf.map_phone;
	  
	  // remove characters from phone for tel:"
	  	  
	  var tel = phone.replace(/\./g, '').replace(/\(/g, '').replace(/\)/g, '').replace(/-/g, '').replace(/ /g, '');
	  
	  // spanish phone
	  
	  var spanish_phone = myJsonFile[i].acf.map_phone_spanish;
	  
	  
		var span_tel = spanish_phone.replace(/\./g, '').replace(/\(/g, '').replace(/\)/g, '').replace(/-/g, '').replace(/ /g, '');
	  
		// Long, Lat
	  
	  var coords_string = myJsonFile[i].acf.map_latlng;
	  
	  var split = coords_string.split(",");
	  
	  var coords = split.map(Number);
    
    var latLng = new google.maps.LatLng(coords[1],coords[0]);
    
    // get directions
    
    var google_street_address = ''+street_address+' '+city+' '+state+' '+zip+'';
    
    var google_url = google_street_address.replace(/ /g, '%20');
    
		var get_directions = 'https://www.google.com/maps/search/?api=1&query='+google_url+'';
		
		var get_directions_acf = myJsonFile[i].acf.get_directions_google_maps;
    
    var contentString = '<div id="map_content">'+
			'<div class="map_inner_content">'+
			'<h2>'+
			city+
			'</h2>'+
			'<span class="map_address">'+
			street_address+', <br/> '+
			city+', '+
			state+', '+
			zip+
			'</span>'+
			'<a class="map_phone" href="tel:'+tel+'"> Phone '+
			phone+
			'<a>'+
			(spanish_phone !== "" ? '<a class="map_phone span_phone" href="tel:'+span_tel+'"> Spanish Phone '+spanish_phone+'<a>':"")+
			'<a class="map_get_directions" href="'+
			(get_directions_acf !== "" ? get_directions_acf : get_directions)+
			'" target="_blank" rel="noopener">Get Directions'+
			'</a>'+
			'</div>'+
      '</div>';

			var infowindow = new google.maps.InfoWindow();
			
			var mydomain = window.location.hostname;
			
			var displayImg = '//'+mydomain+'/wp-content/themes/tillman/images/pin.png';
    
			var marker = new google.maps.Marker({
      	position: latLng,
				map: map,
				icon: {url:displayImg, scaledSize: new google.maps.Size(25, 35)}
    	});
    	
    	google.maps.event.addListener(marker, 'click', (function(marker) {
         var content = contentString;
            return function() {
                infowindow.setContent(content);
                infowindow.open(map, marker);
                //toggleBounce;
            }
        })(marker));
  
  }
}

</script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=<?php the_field( 'google_maps_api' ); ?>&callback=initMap">
    </script>

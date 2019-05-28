<?php
/**
 * The template part for displaying slider
 *
 * @package VW School Education
 * @subpackage vw-school-education
 * @since VW School Education 1.0
 */


get_header();
?>
<!-- This image is used for showing when sharing on FaceBook -->
<meta name='og:image' content='<?php echo get_field("headerimage")['url']; ?>'>
<meta property="og:title" content="<?php echo get_field("headertitle");?>">
<meta property="og:description" content="<?php echo get_field("headersubtitle");?>">
<meta name="twitter:card" content="summary">
<meta name="twitter:image" content="<?php echo get_field("headerimage")['url']; ?>">


<?php if(get_field("headertitle") != ""){?>
<section class="home_banner_area headerBlock pb-2">
		<div class="container">
			<div class="banner_content">
				<div class="image-container">
				    <img src="<?php echo get_field("headerimage")['url']; ?>" class="full-width-image" />
				    <div class="after"></div>
				</div>
			</div>
			<?php if(get_field("headertitle") != ""){?>
			<center class="text-center col-12 upper_text issue-page-image-title pr-5">
					<?php echo get_field("headertitle");?>
			</center>
			<?php }?>
			<?php if(get_field("headersubtitle") != ""){?>
			<center class="text-center col-12 issue-page-image-subtitle pr-5">
					<?php echo get_field("headersubtitle");?>
			</center>
			<?php }?>
		</div>
	</section>	
<?php }?>	
<?php /*Create the header bar used for showing the section after scroll*/?>
<div id="story-navigation-bar" class="d-none" style="width: 95%;padding:1rem 2rem;margin-left: 2.5%;background-color: #00F;position:fixed;top:40px;z-index:200">
<?php for($block_counter = 1 ; $block_counter < 6 ; $block_counter++){?>
	<?php if(get_field("block".$block_counter."label") != ""){?>
		<span style="color: #FFF" class="mr-4"><?php echo get_field("block".$block_counter."label");?></span>
	<?php }?>
<?php }?>
</div>

<?php for($block_counter = 1 ; $block_counter < 6 ; $block_counter++){?>	
<?php if(get_field("block".$block_counter."label") != ""){
	if(get_field("block".$block_counter."type") == "text"){?>
		<section class="text_block row block".$block_counter." pb-2">
		<div class="row"><?php echo get_field("block".$block_counter."text");?></div>
		</section>
	<?php }
	else if(get_field("block".$block_counter."type") == "embed"){?>
		<section class="embedd_html row block<?php echo $block_counter;?> pb-2">
		<div id="customHtml<?php echo $block_counter;?>Title" class="ml-5 block_title"><?php echo get_field("block".$block_counter."customhtmltitle");?></div>
		<div class="row"><?php echo get_field("block".$block_counter."customhtml");?></div>
		</section>
	<?php }
	else if(get_field("block".$block_counter."type") == "image"){
	?>
	<section class="home_banner_area block<?php echo $block_counter;?> pb-2" style="position: relative;">
		<div class="container">
			<div class="banner_content">
				<div class="image-container">
				    <img src="<?php echo get_field("block".$block_counter."image")['url']; ?>" class="full-width-image" />
				    <div class="after"></div>
				</div>
			</div>
			<?php if(get_field("block".$block_counter."imagetitle") != ""){?>
			<center class="text-center col-12 upper_text issue-page-image-title pr-5">
					<?php echo get_field("block".$block_counter."imagetitle");?>
			</center>
			<?php }?>
			<?php if(get_field("block".$block_counter."imagesubtitle") != ""){?>
			<center class="text-center col-12 issue-page-image-subtitle pr-5">
					<?php echo get_field("block".$block_counter."imagesubtitle");?>
			</center>
			<?php }?>
		</div>
	</section>
	<?php }
	else if(get_field("block".$block_counter."type") == "video"){
		?>
		<section class="embedd_video block<?php echo $block_counter;?> pb-2">
			<div id="video1Title" class="ml-5 block_title"><?php echo get_field("block".$block_counter."videotitle");?></div>
			<div class="ml-3"><?php echo get_field("block".$block_counter."video");?></div>
		</section>
		<?php 
	}
	else if(get_field("block".$block_counter."type") == "map"){
		?>
		<section class="map_block block<?php echo $block_counter;?> pb-2">
			<div id="map1Title" class="ml-5 block_title"><?php echo get_field("block".$block_counter."maptitle");?></div>
			<div id="map1" class="mapElement" mapTypeId="<?php echo get_field("block".$block_counter."maptype");?>" style="width:100%;height:500px;"></div>
			
		</section>		
	<?php }
	else if(get_field("block".$block_counter."type") == "image-text"){
	?>
	<section class="home_banner_area block<?php echo $block_counter;?> pb-2">
		<div class="row ml-2">
			<div class="col-6">
				<?php if(get_field("block".$block_counter."combimagetext_firstelement") == "image"){?>
				<div class="image-container">
				    <img src="<?php echo get_field("block".$block_counter."combimagetext_image")['url']; ?>" class="full-width-image" />
				    <div class="after"></div>
				</div>
				<?php }else{?>
					<div class="row"><?php echo get_field("block".$block_counter."combimagetext_text");?></div>
				<?php }?>
			</div>
			<div class="col-6 pl-2">
				<?php if(get_field("block".$block_counter."combimagetext_firstelement") == "image"){?>
					<div class="row"><?php echo get_field("block".$block_counter."combimagetext_text");?></div>
				<?php }else{?>
					<div class="image-container">
					    <img src="<?php echo get_field("block".$block_counter."combimagetext_image")['url']; ?>" class="full-width-image" />
					    <div class="after"></div>
					</div>	
				<?php }?>
			</div>
		</div>
	</section>
	<?php }
	else if(get_field("block".$block_counter."type") == "image-image"){
	?>
	<section class="home_banner_area block<?php echo $block_counter;?> pb-2">
		<div class="row ml-2">
			<div class="col-6">
				<div class="image-container">
				    <img src="<?php echo get_field("block".$block_counter."combimageimage_image1")['url']; ?>" class="full-width-image" />
				    <div class="after"></div>
				</div>
			</div>
			<div class="col-6 pl-2">
				<div class="image-container">
				    <img src="<?php echo get_field("block".$block_counter."combimageimage_image2")['url']; ?>" class="full-width-image" />
				    <div class="after"></div>
				</div>	
			</div>
		</div>
	</section>
	<?php }
	else if(get_field("block1type") == "image-video"){
	?>
	<section class="home_banner_area block<?php echo $block_counter;?> pb-2">
		<div class="row ml-2">
			<div class="col-6">
				<?php if(get_field("block".$block_counter."combimagevideo_firstelement") == "image"){?>
				<div class="image-container">
				    <img src="<?php echo get_field("block".$block_counter."combimagevideo_image")['url']; ?>" class="full-width-image" />
				    <div class="after"></div>
				</div>
				<?php }else{?>
					<div class="row"><?php echo get_field("block".$block_counter."combimagevideo_video");?></div>
				<?php }?>
			</div>
			<div class="col-6 pl-2">
				<?php if(get_field("block".$block_counter."combimagevideo_firstelement") == "image"){?>
					<div class="row"><?php echo get_field("block".$block_counter."combimagevideo_video");?></div>
				<?php }else{?>
					<div class="image-container">
					    <img src="<?php echo get_field("block".$block_counter."combimagevideo_image")['url']; ?>" class="full-width-image" />
					    <div class="after"></div>
					</div>	
				<?php }?>
			</div>
		</div>
	</section>
	<?php }
	else if(get_field("block".$block_counter."type") == "image-map"){
	?>
	<section class=" pb-2">
		<div class="row ml-2">
			<div class="col-6">
				<?php if(get_field("block".$block_counter."combimagemap_firstelement") == "image"){?>
				<div class="image-container">
				    <img src="<?php echo get_field("block".$block_counter."combimagemaptype_image")['url']; ?>" class="full-width-image" />
				    <div class="after"></div>
				</div>
				<?php }else{?>
					<div id="map1_image" class="mapElement" mapTypeId="<?php echo get_field("block".$block_counter."combimagemaptype_maptype");?>" style="width:100%;height:500px;"></div>
				<?php }?>
			</div>
			<div class="col-6 pl-2">
				<?php if(get_field("block".$block_counter."combimagemap_firstelement") == "image"){?>
					<div id="map<?php echo $block_counter;?>_image" class="mapElement" mapTypeId="<?php echo get_field("block".$block_counter."combimagemaptype_maptype");?>" style="width:100%;height:500px;"></div>
				<?php }else{?>
					<div class="image-container">
					    <img src="<?php echo get_field("block".$block_counter."combimagemaptype_image")['url']; ?>" class="full-width-image" />
					    <div class="after"></div>
					</div>	
				<?php }?>
			</div>
		</div>
	</section>
	<?php }
	else if(get_field("block".$block_counter."type") == "image-embed"){
	?>
	<section class=" pb-2">
		<div class="row ml-2">
			<div class="col-6">
				<?php if(get_field("block".$block_counter."combimagecusthtml_firstelement") == "image"){?>
				<div class="image-container">
				    <img src="<?php echo get_field("block".$block_counter."combimagecusthtml_image")['url']; ?>" class="full-width-image" />
				    <div class="after"></div>
				</div>
				<?php }else{?>
					<div class="row"><?php echo get_field("block".$block_counter."combimagecusthtml_custhtml");?></div>
				<?php }?>
			</div>
			<div class="col-6 pl-2">
				<?php if(get_field("block".$block_counter."combimagemap_firstelement") == "image"){?>
					<div class="row"><?php echo get_field("block".$block_counter."combimagecusthtml_custhtml");?></div>
				<?php }else{?>
					<div class="image-container">
					    <img src="<?php echo get_field("block".$block_counter."combimagemaptype_image")['url']; ?>" class="full-width-image" />
					    <div class="after"></div>
					</div>	
				<?php }?>
			</div>
		</div>
	</section>
	<?php }
	else if(get_field("block".$block_counter."type") == "video-text"){
	?>
	<section class=" pb-2">
		<div class="row ml-2">
			<div class="col-6">
				<?php if(get_field("block".$block_counter."combvideotext_firstelement") == "video"){?>
				<div class="row"><?php echo get_field("block".$block_counter."combvideotext_video");?></div>
				<?php }else{?>
					<div class="row"><?php echo get_field("block".$block_counter."combvideotext_text");?></div>
				<?php }?>
			</div>
			<div class="col-6 pl-2">
				<?php if(get_field("block".$block_counter."combvideotext_firstelement") == "video"){?>
				<div class="row"><?php echo get_field("block".$block_counter."combvideotext_text");?></div>
				<?php }else{?>
					<div class="row"><?php echo get_field("block".$block_counter."combvideotext_video");?></div>
				<?php }?>
			</div>
		</div>
	</section>
	<?php }
	else if(get_field("block".$block_counter."type") == "video-video"){
	?>
	<section class="home_banner_area block<?php echo $block_counter;?> pb-2">
		<div class="row ml-2">
			<div class="col-6">
				<div class="row"><?php echo get_field("block".$block_counter."combvideovideo_video1");?></div>
			</div>
			<div class="col-6 pl-2">
				<div class="row"><?php echo get_field("block".$block_counter."combvideovideo_video2");?></div>	
			</div>
		</div>
	</section>
	<?php }
	else if(get_field("block".$block_counter."type") == "video-map"){
	?>
	<section class=" pb-2">
		<div class="row ml-2">
			<div class="col-6">
				<?php if(get_field("block".$block_counter."combvideomap_firstelement") == "image"){?>
					<div class="row"><?php echo get_field("block".$block_counter."combvideomaptype_video");?></div>
				<?php }else{?>
					<div id="map<?php echo $block_counter;?>_video" class="mapElement" mapTypeId="<?php echo get_field("block".$block_counter."combvideomaptype_maptype");?>" style="width:100%;height:500px;"></div>
				<?php }?>
			</div>
			<div class="col-6 pl-2">
				<?php if(get_field("block".$block_counter."combvideomap_firstelement") == "image"){?>
					<div id="map<?php echo $block_counter;?>_video" class="mapElement" mapTypeId="<?php echo get_field("block".$block_counter."combvideomaptype_maptype");?>" style="width:100%;height:500px;"></div>
				<?php }else{?>
					<div class="row"><?php echo get_field("block".$block_counter."combvideomaptype_video");?></div>	
				<?php }?>
			</div>
		</div>
	</section>
	<?php }
	else if(get_field("block".$block_counter."type") == "map-text"){
	?>
	<section class="home_banner_area block<?php echo $block_counter;?> pb-2">
		<div class="row ml-2">
			<div class="col-6">
				<?php if(get_field("block".$block_counter."combmaptext_firstelement") == "map"){?>
					<div id="map<?php echo $block_counter;?>_text" class="mapElement" mapTypeId="<?php echo get_field("block".$block_counter."combmaptypetext_maptype");?>" style="width:100%;height:500px;"></div>
				<?php }else{?>
					<div class="row"><?php echo get_field("block".$block_counter."combmaptypetext_text");?></div>
				<?php }?>
			</div>
			<div class="col-6 pl-2">
				<?php if(get_field("block".$block_counter."combmaptext_firstelement") == "map"){?>
					<div class="row"><?php echo get_field("block".$block_counter."combmaptypetext_text");?></div>
				<?php }else{?>
					<div id="map<?php echo $block_counter;?>_text" class="mapElement" mapTypeId="<?php echo get_field("block".$block_counter."combmaptypetext_maptype");?>" style="width:100%;height:500px;"></div>	
				<?php }?>
			</div>
		</div>
	</section>	
	<?php }
	else if(get_field("block".$block_counter."type") == "map-map"){
	?>
	<section class="home_banner_area block<?php echo $block_counter;?> pb-2">
		<div class="row ml-2">
			<div class="col-6">
				<div id="map<?php echo $block_counter;?>_text" class="mapElement" mapTypeId="<?php echo get_field("block".$block_counter."combmaptypemaptype_maptype1");?>" style="width:100%;height:500px;"></div>
			</div>
			<div class="col-6 pl-2">
				<div id="map<?php echo $block_counter;?>_text" class="mapElement" mapTypeId="<?php echo get_field("block".$block_counter."combmaptypemaptype_maptype2");?>" style="width:100%;height:500px;"></div>
			</div>
		</div>
	</section>
	<?php }
	else if(get_field("block".$block_counter."type") == "embed-text"){
	?>
	<section class="home_banner_area block<?php echo $block_counter;?> pb-2">
		<div class="row ml-2">
			<div class="col-6">
				<div id="map<?php echo $block_counter;?>_text" class="mapElement" mapTypeId="<?php echo get_field("block".$block_counter."combcustomhtmlcustomhtml_customhtml1");?>" style="width:100%;height:500px;"></div>
			</div>
			<div class="col-6 pl-2">
				<div id="map<?php echo $block_counter;?>_text" class="mapElement" mapTypeId="<?php echo get_field("block".$block_counter."combcustomhtmlcustomhtml_customhtml2");?>" style="width:100%;height:500px;"></div>
			</div>
		</div>
	</section>			
<?php 
}	
}
?>

<?php }  /*End of the block_counter for loop*/?>


<script>
  
	var icon_data;
    var blueIcon = L.icon({
                    iconUrl: 'http://maps.gstatic.com/mapfiles/ridefinder-images/mm_20_blue.png',
                    //iconSize: [38, 95],
                    // iconAnchor: [22, 94],
                    // popupAnchor: [-3, -76]
                  });

            var greenIcon = L.icon({
                    iconUrl: 'http://maps.gstatic.com/mapfiles/ridefinder-images/mm_20_green.png',
                    //iconSize: [38, 95],
                    // iconAnchor: [22, 94],
                    // popupAnchor: [-3, -76]
                  });

            var yellowIcon = L.icon({
                    iconUrl: 'http://maps.gstatic.com/mapfiles/ridefinder-images/mm_20_yellow.png',
                    //iconSize: [38, 95],
                    // iconAnchor: [22, 94],
                    // popupAnchor: [-3, -76]
                  });
  	function renderallMaps(){
			$("[mapTypeId]").each(function(index, element){
				var mapTypeId = $(element).attr("mapTypeId");
				var mapElement = $(element).attr("id");
				getMapData(mapElement, mapTypeId);
	  	  	});
	}
	 	
  	$(document).ready(function(){
  		renderallMaps();
  	});
  	       
    function getMapData(mapElement, mapTypeId) {
        var index_names =[];
		    var cities = L.layerGroup();
        $.ajax({
          url: "<?php echo site_url();?>/sample_map_web.php",
          async: true,
          data: { map_id : mapTypeId , flag:1},
            dataType: 'json',
            success: function (data) {
        	  var mymap = L.map(mapElement).setView([17.387140, 78.491684], 11);

        	    // var roadMutant = L.gridLayer.googleMutant({
        	    //     maxZoom: 20,
        	    //     type:'roadmap'
        	    //   }).addTo(mymap);

              var CartoDB_Positron = L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
              attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">Positron</a>',
              subdomains: 'abcd',
              maxZoom: 19
              }).addTo(mymap);

        	    icon_data = [blueIcon, greenIcon, yellowIcon];
        	    var j = data.length-1;
        	    L.geoJSON(data[j]['features']).addTo(mymap);

        	    for (var i=0;i<j;i++){
        	      loadData(data[i], icon_data[i], mymap, cities, index_names);
        	    }
              
              var mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                    '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                  mbUrl = 'https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

              var grayscale   = L.tileLayer(mbUrl, {id: 'mapbox.light', attribution: mbAttr}),
                  streets  = L.tileLayer(mbUrl, {id: 'mapbox.streets',   attribution: mbAttr});

              var roadMutant_layer_1 = L.gridLayer.googleMutant({
                  maxZoom: 20,
                  minZoom:10,
                  type:'terrain'
                });

            var baseLayers = {
                "Grayscale": CartoDB_Positron,
                "Streets": streets
            };
          var overlays= {};
          var count=0;
          for(var obj in cities){
            if(cities.hasOwnProperty(obj)){
              for(var prop in cities[obj]){
                if(cities[obj].hasOwnProperty(prop)){
                  overlays[index_names[count]] = cities[obj][prop];
                  count = count + 1;
                }
              }
            }
        }
         

          L.control.layers(baseLayers,overlays).addTo(mymap);
          }
        });  
        
    };

    function loadData(indexData, icon_details, mymap, cities, index_names){
    layerdata = L.geoJSON(indexData, {
        pointToLayer: function (feature, latlng) {
            return L.marker(latlng, {icon:icon_details});
        }
    }).addTo(cities);

    index_names.push(indexData['features'][0].basic_details.type);
    layerdata.addTo(mymap);

    };

    
	/*var scrollTo = "";
	var isBlock1 = false, isBlock2 = false, isBlock3 = false, isBlock4 = false, isBlock5 = false, isBlock6 = false, isBlock7 = false, isBlock8 = false;
	$(window).scroll(function() {
		   var hT = $('.block1').offset().top,
		       hH = $('.block1').outerHeight(),
		       wH = $(window).height(),
		       wS = $(this).scrollTop();
		   if (wS > (hT+hH-wH)){
			   isBlock1 = true;
		   }
		   else{
			   isBlock1 = false;
		   }

		   var hT2 = $('.block2').offset().top,
	       hH2 = $('.block2').outerHeight(),
	       wH2 = $(window).height(),
	       wS2 = $(this).scrollTop();
		   if (wS2 > (hT2+hH2-wH2)){
			   isBlock2 = true;
		   }
		   else{
			   isBlock2 = false;
		   }

		   	if(isBlock1){
			   	console.log("In block 1");
		   	}
		   	else if(isBlock2){
		   		console.log("In block 2");
		   	} 	
		});*/
	
</script>
<?php the_content(); ?>

<br/><br/>	
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAbeQUWgEz3eFMgeJeI4isomnGCq8CrMYs&libraries=geometry,drawing"></script>
    <?php
		
        // If comments are open or we have at least one comment, load up the comment template
        if ( comments_open() || '0' != get_comments_number() )
        comments_template();
    ?>
<?php get_footer(); ?>
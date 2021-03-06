<?php
/**
 * The template part for displaying slider
 *
 * @package VW School Education
 * @subpackage vw-school-education
 * @since VW School Education 1.0
 */


get_header();

function getSectionName($sectionName, $prependHash) {
	$retVal = strtolower($sectionName);
	$retVal = str_replace(" - ", " ", $retVal);
	$retVal = str_replace(" + ", " ", $retVal);
	$retVal = str_replace(" & ", " ", $retVal);
	$retVal = str_replace(" ", "-", $retVal);

	if ($prependHash == true)
		$retVal = '#'.$retVal;

	return $retVal;
}
?>
<!-- This image is used for showing when sharing on FaceBook -->
<meta property='og:image' content='<?php echo get_field("headerimage")['url']; ?>'>
<meta property="og:title" content="<?php echo get_field("headertitle");?>">
<meta property="og:description" content="<?php echo get_field("headersubtitle");?>">
<meta name="twitter:card" content="summary">
<meta name="twitter:image" content="<?php echo get_field("headerimage")['url']; ?>">
<style>
.middle-align{
	padding-bottom: 0px !important;
}
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light d-none sticky px-3" id="navBarStorySections">
  <?php if(get_field("headertitle") != "") { ?>
  	<?php $sectionName = getSectionName(get_field("headertitle"), true) ; ?>
  	<a class="navbar-brand" href="<?php echo $sectionName; ?>"><?php echo get_field("headertitle");?></a>
  <?php }?>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-city-story-items" aria-controls="navbar-city-story" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbar-city-story-items">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <?php for($block_counter = 1 ; $block_counter < 21 ; $block_counter++){?>
      	<?php if(get_field("block".$block_counter."label") != "") {
      		$sectionName = getSectionName(get_field("block".$block_counter."label"), true) ;
      	?>
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo $sectionName; ?>"><?php echo get_field("block".$block_counter."label");?></a>
	      </li>
	    <?php }?>
	   <?php }?>
    </ul>
  </div>
</nav>

<div class="container-fluid story">

	<?php if(get_field("headertitle") != "") { ?>
	<?php $sectionName = getSectionName(get_field("headertitle"), false) ; ?>
	<div id="<?php echo $sectionName; ?>" class="row" foo=''>
		<!-- Header - start -->
		<section class="home_banner_area headerBlock pb-2 col-12 px-0">
			<div class="container">
				<div class="banner_content gray-filter" style="background-image:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5) ), url('<?php echo get_field("headerimage")['url']; ?>');background-size: cover;">
					<div class="city-page-analysis-title">
						<?php echo get_field("headertitle");?>
					</div>
					<div class="city-page-analysis-subtitle pt-5">
						<?php echo get_field("headersubtitle");?>
					</div>
				</div>
			</div>
		</section>
		<!-- Header - end -->

	</div>
	<?php }?>

	<!-- Iterate through each section - start 
	<div class="row">-->
	<?php for($block_counter = 1 ; $block_counter < 21 ; $block_counter++){?>

		<?php if(get_field("block".$block_counter."label") != "") {

			$sectionName = getSectionName(get_field("block".$block_counter."label"), false) ;

			/* Section of type text - start */
			if(get_field("block".$block_counter."type") == "text") { ?>
				<div id="<?php echo $sectionName; ?>" class="row alternate-row block<?php echo $block_counter;?>">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="story-section story-section-text">
							<?php echo get_field("block".$block_counter."text");?>
						</div>
					</div>
				</div>
			<?php }
			/* Section of type text - end */

			/* Section of type embed - start - THIS IS PROBABLY NOT NEEDED */
			else if(get_field("block".$block_counter."type") == "embed") {?>

				<div id="<?php echo $sectionName; ?>" class="row alternate-row block<?php echo $block_counter;?>">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div id="customHtml<?php echo $block_counter;?>Title" class="story-section story-section-text">
							
							<?php if(get_field("block".$block_counter."customhtmltitle") != ""){ ?>
							<h2 class="text-center">
								<?php echo get_field("block".$block_counter."customhtmltitle");?>
							</h2>
							<?php }?>

							
							<?php echo get_field("block".$block_counter."customhtml");?>
						</div>
					</div>
				</div>
			<?php }
			/* Section of type embed - end */
			
			/* Section of type image - start */
			else if(get_field("block".$block_counter."type") == "image") { ?>

				<div id="<?php echo $sectionName; ?>" class="row alternate-row block<?php echo $block_counter;?>">
					<div class="col-lg-12 col-md-12 col-sm-12 px-0">
						<div class="story-section story-section-image" style="background-image:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5) ), url('<?php echo get_field("block".$block_counter."image")['url']; ?>');background-size: cover;">
							
							<?php if(get_field("block".$block_counter."imagetitle") != ""){ ?>
							<center class="image-title text-uppercase">
								<?php echo get_field("block".$block_counter."imagetitle");?>
							</center>
							<?php }?>
							
							<?php if(get_field("block".$block_counter."imagesubtitle") != ""){ ?>
							<center class="image-subtitle pt-5 text-uppercase">
								<?php echo get_field("block".$block_counter."imagesubtitle");?>
							</center>
							<?php }?>
						</div>
					</div>
				</div>

			<?php }
			/* Section of type image - end */

			/* Section of type video - start */
			else if(get_field("block".$block_counter."type") == "video") {?>

				<div id="<?php echo $sectionName; ?>" class="row alternate-row block<?php echo $block_counter;?>">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<center id="video1Title" class="story-section story-section-video">
							<h2 class="videoTitle"><?php echo get_field("block".$block_counter."videotitle");?></h2>
							<div class="videoContainer"><?php echo get_field("block".$block_counter."video");?></div>
						</center>
					</div>
				</div>
				
			<?php }
			/* Section of type video - end */

			/* Section of type map - start */
			else if(get_field("block".$block_counter."type") == "map") { ?>

				<div id="<?php echo $sectionName; ?>" class="row alternate-row block<?php echo $block_counter;?>">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<center id="map1Title" class="story-section story-section-map">
							<h2 class="map-title"><?php echo get_field("block".$block_counter."maptitle");?></h2>
							<div id="map1" class="mapElement" mapTypeId="<?php echo get_field("block".$block_counter."maptype");?>" style=""></div>
						</center>
					</div>
				</div>

			<?php }
			/* Section of type map - end */

			/* Section of type image + text - start */			
			else if(get_field("block".$block_counter."type") == "image-text") { ?>

				<div id="<?php echo $sectionName; ?>" class="row alternate-row block<?php echo $block_counter;?>">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<h2 class="two-column-title"><?php echo get_field("block".$block_counter."label");?></h2>
					</div>
					<!-- 1st half -->
					<div class="col-lg-6 col-md-6 col-sm-12">
						
						<?php if(get_field("block".$block_counter."combimagetext_firstelement") == "image") { ?>
							<div class="story-section story-section-image">
								<img src="<?php echo get_field("block".$block_counter."combimagetext_image")['url']; ?>" class="full-width-image" />
							</div>

						<?php } else{ ?>	
							<div class="story-section story-section-text">
								<?php echo get_field("block".$block_counter."combimagetext_text");?>
							</div>
						<?php }?>
					</div>

					<!-- 2nd half -->
					<div class="col-lg-6 col-md-6 col-sm-12">
						
						<?php if(get_field("block".$block_counter."combimagetext_firstelement") == "image") { ?>
							<div class="story-section story-section-text">
								<?php echo get_field("block".$block_counter."combimagetext_text");?>
							</div>
						<?php }else{ ?>	
							<div class="story-section story-section-image">
								<img src="<?php echo get_field("block".$block_counter."combimagetext_image")['url']; ?>" class="full-width-image" />
							</div>
						<?php }?>
					</div>
				</div>
			
			<?php }
			/* Section of type image + text - end */


			/* Section of type image + image - start */
			else if(get_field("block".$block_counter."type") == "image-image") { ?>
				<div id="<?php echo $sectionName; ?>" class="row alternate-row block<?php echo $block_counter;?>">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<h2 class="two-column-title"><?php echo get_field("block".$block_counter."label");?></h2>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="story-section story-section-image">
							<img src="<?php echo get_field("block".$block_counter."combimageimage_image1")['url']; ?>" class="full-width-image" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="story-section story-section-image">
							<img src="<?php echo get_field("block".$block_counter."combimageimage_image2")['url']; ?>" class="full-width-image" />
						</div>
					</div>
				</div>
			<?php }
			/* Section of type image + image - end */


			/* Section of type image + video - start */
			else if(get_field("block".$block_counter."type") == "image-video") { ?>

				<div id="<?php echo $sectionName; ?>" class="row alternate-row block<?php echo $block_counter;?>">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<h2 class="two-column-title"><?php echo get_field("block".$block_counter."label");?></h2>
					</div>
					<!-- 1st half -->
					<div class="col-lg-6 col-md-6 col-sm-12">
						
						<?php if(get_field("block".$block_counter."combimagevideo_firstelement") == "image") { ?>
							<div class="story-section story-section-image">
								<img src="<?php echo get_field("block".$block_counter."combimagevideo_image")['url']; ?>" class="full-width-image" />
							</div>

						<?php } else{ ?>	
							<div class="story-section story-section-video">
								<div class="row"><?php echo get_field("block".$block_counter."combimagevideo_video");?></div>
							</div>
						<?php }?>
					</div>

					<!-- 2nd half -->
					<div class="col-lg-6 col-md-6 col-sm-12">
						
						<?php if(get_field("block".$block_counter."combimagevideo_firstelement") == "image") { ?>
							<div class="story-section story-section-video">
								<div class="row"><?php echo get_field("block".$block_counter."combimagevideo_video");?></div>
							</div>
						<?php }else{ ?>	
							<div class="story-section story-section-image">
								<img src="<?php echo get_field("block".$block_counter."combimagevideo_image")['url']; ?>" class="full-width-image" />
							</div>
						<?php }?>
					</div>
				</div>

			<?php }
			/* Section of type image + video - end */


			/* Section of type image + map - start */
			else if(get_field("block".$block_counter."type") == "image-map") { ?>

				<div id="<?php echo $sectionName; ?>" class="row alternate-row block<?php echo $block_counter;?>">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<h2 class="two-column-title"><?php echo get_field("block".$block_counter."label");?></h2>
					</div>
					<!-- 1st half -->
					<div class="col-lg-6 col-md-6 col-sm-12">
						
						<?php if(get_field("block".$block_counter."combimagemap_firstelement") == "image") { ?>
							<div class="story-section story-section-image">
								<img src="<?php echo get_field("block".$block_counter."combimagemaptype_image")['url']; ?>" class="full-width-image" />
							</div>

						<?php } else{ ?>	
							<div class="story-section story-section-map">
								<div id="map1_image" class="mapElement" mapTypeId="<?php echo get_field("block".$block_counter."combimagemaptype_maptype");?>" style=""></div>
							</div>
						<?php }?>
					</div>

					<!-- 2nd half -->
					<div class="col-lg-6 col-md-6 col-sm-12">
						
						<?php if(get_field("block".$block_counter."combimagemap_firstelement") == "image") { ?>
							<div class="story-section story-section-map">
								<div id="map1_image" class="mapElement" mapTypeId="<?php echo get_field("block".$block_counter."combimagemaptype_maptype");?>" style=""></div>
							</div>
						<?php }else{ ?>	
							<div class="story-section story-section-image">
								<img src="<?php echo get_field("block".$block_counter."combimagemaptype_image")['url']; ?>" class="full-width-image" />
							</div>
						<?php }?>
					</div>
				</div>
			<?php }
			/* Section of type image + map - end */


			/* Section of type image + embed - start  - THIS IS PROBABLEY NOT NEEDED */
			else if(get_field("block".$block_counter."type") == "image-embed"){
			?>
			<div id="<?php echo $sectionName; ?>" class="row alternate-row ml-2">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<h2 class="two-column-title"><?php echo get_field("block".$block_counter."label");?></h2>
				</div>
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
			<?php }
			/* Section of type image + embed - end */


			/* Section of type video + text - start  */
			else if(get_field("block".$block_counter."type") == "video-text") { ?>

				<div id="<?php echo $sectionName; ?>" class="row alternate-row block<?php echo $block_counter;?>">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<h2 class="two-column-title"><?php echo get_field("block".$block_counter."label");?></h2>
					</div>
					<!-- 1st half -->
					<div class="col-lg-6 col-md-6 col-sm-12">
						
						<?php if(get_field("block".$block_counter."combvideotext_firstelement") == "video") { ?>
							<div class="story-section story-section-video">
								<div class="row"><?php echo get_field("block".$block_counter."combvideotext_video");?></div>
							</div>

						<?php } else{ ?>	
							<div class="story-section story-section-text">
								<div class="row"><?php echo get_field("block".$block_counter."combvideotext_text");?></div>
							</div>
						<?php }?>
					</div>

					<!-- 2nd half -->
					<div class="col-lg-6 col-md-6 col-sm-12">
						
						<?php if(get_field("block".$block_counter."combvideotext_firstelement") == "video") { ?>
							<div class="story-section story-section-text">
								<div class="row"><?php echo get_field("block".$block_counter."combvideotext_text");?></div>
							</div>
						<?php }else{ ?>	
							<div class="story-section story-section-video">
								<div class="row"><?php echo get_field("block".$block_counter."combvideotext_video");?></div>
							</div>
						<?php }?>
					</div>
				</div>
			<?php }
			/* Section of type video + text - end  */


			/* Section of type video + video - start  */
			else if(get_field("block".$block_counter."type") == "video-video") { ?>

				<div id="<?php echo $sectionName; ?>" class="row alternate-row block<?php echo $block_counter;?>">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<h2 class="two-column-title"><?php echo get_field("block".$block_counter."label");?></h2>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="story-section story-section-video">
							<div class="row"><?php echo get_field("block".$block_counter."combvideovideo_video1");?></div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="story-section story-section-video">
							<div class="row"><?php echo get_field("block".$block_counter."combvideovideo_video2");?></div>
						</div>
					</div>
				</div>
			<?php }
			/* Section of type video + video - end */


			/* Section of type video + map - start  */
			else if(get_field("block".$block_counter."type") == "video-map") { ?>

				<div id="<?php echo $sectionName; ?>" class="row alternate-row block<?php echo $block_counter;?>">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<h2 class="two-column-title"><?php echo get_field("block".$block_counter."label");?></h2>
					</div>
					<!-- 1st half -->
					<div class="col-lg-6 col-md-6 col-sm-12">
						
						<?php if(get_field("block".$block_counter."combvideomap_firstelement") == "video") { ?>
							<div class="story-section story-section-video">
								<div class="row"><?php echo get_field("block".$block_counter."combvideomaptype_video");?></div>
							</div>

						<?php } else{ ?>	
							<div class="story-section story-section-map">
								<div id="map<?php echo $block_counter;?>_video" class="mapElement" mapTypeId="<?php echo get_field("block".$block_counter."combvideomaptype_maptype");?>" style="width:100%;height:500px;"></div>
							</div>
						<?php }?>
					</div>

					<!-- 2nd half -->
					<div class="col-lg-6 col-md-6 col-sm-12">
						
						<?php if(get_field("block".$block_counter."combvideomap_firstelement") == "video") { ?>
							<div class="story-section story-section-map">
								<div id="map<?php echo $block_counter;?>_video" class="mapElement" mapTypeId="<?php echo get_field("block".$block_counter."combvideomaptype_maptype");?>" style="width:100%;height:500px;"></div>
							</div>
						<?php }else{ ?>	
							<div class="story-section story-section-video">
								<div class="row"><?php echo get_field("block".$block_counter."combvideomaptype_video");?></div>
							</div>
						<?php }?>
					</div>
				</div>
			<?php }
			/* Section of type video + map - end  */


			/* Section of type map + text - start  */
			else if(get_field("block".$block_counter."type") == "map-text") { ?>
			
				<div id="<?php echo $sectionName; ?>" class="row alternate-row block<?php echo $block_counter;?>">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<h2 class="two-column-title"><?php echo get_field("block".$block_counter."label");?></h2>
					</div>
					<!-- 1st half -->
					<div class="col-lg-6 col-md-6 col-sm-12">
						
						<?php if(get_field("block".$block_counter."combmaptext_firstelement") == "map") { ?>
							<div class="story-section story-section-map">
								<div id="map<?php echo $block_counter;?>_text" class="mapElement" mapTypeId="<?php echo get_field("block".$block_counter."combmaptypetext_maptype");?>"></div>
							</div>

						<?php } else{ ?>	
							<div class="story-section story-section-text">
								<div class="row"><?php echo get_field("block".$block_counter."combmaptypetext_text");?></div>
							</div>
						<?php }?>
					</div>

					<!-- 2nd half -->
					<div class="col-lg-6 col-md-6 col-sm-12">
						
						<?php if(get_field("block".$block_counter."combmaptext_firstelement") == "map") { ?>
							<div class="story-section story-section-text">
								<div class="row"><?php echo get_field("block".$block_counter."combmaptypetext_text");?></div>
							</div>
						<?php }else{ ?>	
							<div class="story-section story-section-map">
								<div id="map<?php echo $block_counter;?>_text" class="mapElement" mapTypeId="<?php echo get_field("block".$block_counter."combmaptypetext_maptype");?>"></div>
							</div>
						<?php }?>


					</div>
				</div>
			<?php }
			/* Section of type map + text - end  */


			else if(get_field("block".$block_counter."type") == "map-map"){
			?>
			<div id="<?php echo $sectionName; ?>" class="row alternate-row block<?php echo $block_counter;?>">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<h2 class="two-column-title"><?php echo get_field("block".$block_counter."label");?></h2>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div id="map<?php echo $block_counter;?>_text" class="mapElement" mapTypeId="<?php echo get_field("block".$block_counter."combmaptypemaptype_maptype1");?>" style="width:100%;height:500px;"></div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div id="map<?php echo $block_counter;?>_text" class="mapElement" mapTypeId="<?php echo get_field("block".$block_counter."combmaptypemaptype_maptype2");?>" style="width:100%;height:500px;"></div>
				</div>
			</div>
			<?php }

			/* Section of type customhtml + text - custom html supports chart, html, text, text wrapped around image  - start */
			else if(get_field("block".$block_counter."type") == "embed-text"){
			?>
			<div id="<?php echo $sectionName; ?>" class="row alternate-row block<?php echo $block_counter;?>">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<h2 class="two-column-title"><?php echo get_field("block".$block_counter."label");?></h2>
				</div>				
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="story-section story-section-text">
                        <?php echo get_field("block".$block_counter."combcustomhtmlcustomhtml_customhtml1");?>
                    </div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">>
					<div class="story-section story-section-text">
						<?php echo get_field("block".$block_counter."combcustomhtmlcustomhtml_customhtml2");?>
                    </div>
				</div>
			</div>
		<?php 
		}
		/* Section of type customhtml + text - custom html supports chart, html, text, text wrapped around image  - end */	
		}
		?>

	<?php }  /*End of the block_counter for loop*/?>
	
	<!-- </div> Iterate through each section - end -->


</div>


<!-- 

<?php /*Create the header bar used for showing the section after scroll*/?>
<div id="story-navigation-bar" class="d-none row" style="width: 95%;padding:1rem 2rem;margin-left: 2.5%;background-color: #00F;position:fixed;top:40px;z-index:200">
<?php for($block_counter = 1 ; $block_counter < 21 ; $block_counter++){?>
	<?php if(get_field("block".$block_counter."label") != ""){?>
		<span style="color: #FFF" class="col-12"><?php echo get_field("block".$block_counter."label");?></span>
	<?php }?>
<?php }?>
</div>
 -->



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
				//show the grey background map by default
              	/*var mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                    '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>';*/
                var mbAttr = '';     
                var  mbUrl = 'https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';
              	
              	var grayscale   = L.tileLayer(mbUrl, {id: 'mapbox.light', attribution: mbAttr}).addTo(mymap);
                 var streets  = L.tileLayer(mbUrl, {id: 'mapbox.streets',   attribution: mbAttr});
              	
               /*var CartoDB_Positron = L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
               attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">Positron</a>',
               subdomains: 'cityreporter.lakeer.org',
               maxZoom: 19
               }).addTo(mymap);*/

        	    icon_data = [blueIcon, greenIcon, yellowIcon];
        	    var j = data[data.length-1].length
        	    var style_data = data[data.length-1];
	    	    $.extend(true,style_data,data[data.length])
        	    
        	    function polystyle(feature) {
    						return {
        					fillColor: 'gray',
        					weight: 2,
        					opacity: 1,
        					color: 'black',  //Outline color
        					fillOpacity: 0.7
    						};
							}
							var map_styles = {
        					fillColor: 'gray',
        					weight: 2,
        					opacity: 1,
        					color: 'black',  //Outline color
        					fillOpacity: 0.7
    						};

							//loadData(data[j], map_styles, mymap, cities, index_names);

							for (var i=j;i<data.length-1;i++){ 

								loadData(data[i], map_styles, mymap, cities, index_names);
							}
        	    //L.geoJSON(data[j], {style: polystyle}).addTo(mymap);

        	    for (var i=0;i<j;i++){
        	      loadData(data[i], style_data[i], mymap, cities, index_names);
        	    }

            var baseLayers = {
                "Grayscale": grayscale,
                "Streets": streets
            };
          var overlays= {};
          var count=0;
			for(var prop in cities._layers){
				if(count == 0){count++;continue;}
				if(style_data[count-1] != undefined){

					var geometry_type = style_data[count-1].geometry_type;
					var style = '';
					switch (geometry_type) {
						case 'Point': 
							style = "style= 'background-color: " + style_data[count-1].color + ";'";
							break;
						case 'Polygon': 
							style = "style= 'background-color: " + style_data[count-1].color + ";'";
							break;
						case 'LineString': 
							style = "style= 'border-bottom-color: " + style_data[count-1].color + ";'";
							break;
						default:
							style = "style= 'background-color: " + style_data[count-1].color + ";'";
							break;
					}

					overlays["<div class='leaflet-legend "+ geometry_type + "' " + style + ">&nbsp;</div>" + style_data[count-1].name ] = cities._layers[prop];
			        //overlays[style_data[count-1].name + "<div class='leaflet-legend-color' style='background-color:" + style_data[count-1].color + ";'>&nbsp;</div>"] = cities._layers[prop];
			        count = count + 1;
				}
			}
          L.control.layers(baseLayers,overlays).addTo(mymap);
          }
        });  
        
    };
	/*This function will be used for adding marker popups for all the points plotted on map*/
    function onEachFeature(feature, layer) {
        // does this feature have a property named popupContent?
        var basicDetails = "<div>";
        if (feature.basic_details) {
			for(var key in feature.basic_details){
				if((key != "@id" && key != "id" && key != "Latitude" && key != "Longitude") && feature.basic_details[key] != null){
					basicDetails = basicDetails + key + ":" + feature.basic_details[key] + "<br/>";
				}
			}
        }else if (feature.properties) {
			for(var key in feature.properties){
				if((key != "@id" && key != "id" && key != "Latitude" && key != "Longitude") && feature.properties[key] != null){
					basicDetails = basicDetails + key + ":" + feature.properties[key] + "<br/>";
				}
			}
        }
        basicDetails = basicDetails + "</div>";
        layer.bindPopup(basicDetails);
    }
    
    function loadData(indexData, icon_details, mymap, cities, index_names){
    var layerdata ;
    if (icon_details.geometry_type == 'Point' && (icon_details.difference_layer != null && icon_details.difference_layer.length) > 0 && icon_details.buffer_radius != 0){
	    layerdata = L.geoJSON(indexData, {
	    	onEachFeature: onEachFeature,
	        pointToLayer: function (feature, latlng) {
	          		var styles_data = {
	          			color:icon_details.color,
	          			strokeColor: icon_details.color,
        					fillColor: icon_details.color,
        					fillOpacity: 0.60,
	          			radius:1000
	          			//radius: icon_details.buffer_radius
	          		};
	          		return L.circle(latlng, styles_data);
	          	// }
	        }
	    }).addTo(cities);
			
			// layerdata = L.geoJSON(indexData, {
   //  			filter: function(feature, layer) {
   //      	return false;
   //  		}
			// }).addTo(cities);
	    index_names.push(indexData['features'][0].basic_details.type);
	    layerdata.addTo(mymap);
	  }
    if (icon_details.geometry_type == 'Point'){
		   var radiusValue = icon_details.buffer_radius;
		   //If buffer radius is received from the JSON then multiple it by 1000 as the radius is received in KM and for leaflet we are required to give in meters
		   //If buffered radius is 0 as received from JSON then set it to 250 meters  
		   if(radiusValue == 0)
			   radiusValue = 250;//Value in meters
		   else
			   radiusValue = radiusValue * 1000;
		    layerdata = L.geoJSON(indexData, {
	    	onEachFeature: onEachFeature,
	        pointToLayer: function (feature, latlng) {
	          		var styles_data = {
	          			color:icon_details.color,
	          			//strokeColor: icon_details.color,
        					//fillColor: icon_details.color,
        					//fillOpacity: 0.60,
	          			radius:radiusValue //Value in meters
	          			//radius: icon_details.buffer_radius
	          		};
	          		return L.circle(latlng, styles_data);
	          	// }
	        }
	    }).addTo(cities);
			
			// layerdata = L.geoJSON(indexData, {
   //  			filter: function(feature, layer) {
   //      	return false;
   //  		}
			// }).addTo(cities);
	    index_names.push(indexData['features'][0].basic_details.type);
	    layerdata.addTo(mymap);
	  }
	  else if(icon_details.geometry_type == 'Polygon')
	  {
	  		
		  	layerdata = L.geoJSON(indexData, {
		  		onEachFeature: onEachFeature,
	    		style: function(feature) {
	            return {color: icon_details.color};
	        }
	    	}).addTo(cities);
	    	index_names.push(indexData['features'][0].basic_details.type);
	    	layerdata.addTo(mymap);
	  		
	  }
	  else if(icon_details.geometry_type == 'LineString') {
	  	layerdata = L.geoJSON(indexData, {
	  		onEachFeature: onEachFeature,
  			style: function(feature) {
      		return icon_details;
  			}
	  	}).addTo(cities);
	  	index_names.push(indexData['features'][0].basic_details.type);
	  	layerdata.addTo(mymap);
	  }
	  else if(icon_details.geometry_type != 'Polygon' && icon_details.geometry_type != 'Point' && icon_details.geometry_type != 'LineString')
	  {
	  	layerdata = L.geoJSON(indexData, {
	  		onEachFeature: onEachFeature,
  			style: function(feature) {
      		return icon_details;
  			}
	  	}).addTo(cities);
	  	//Check iof we dont receive the features array for the index
	  	if(indexData['features'] != undefined && indexData['features'].length > 0){
		  	if (!index_names.includes(indexData['features'][0].properties.name)){
		  		index_names.push(indexData['features'][0].properties.name);
		  	}
		  	else{
		  		index_names.push(indexData['features'][0].properties.name+Math.floor((Math.random() * 10) + 1).toString());
		  	}
	  	}

	  	layerdata.addTo(mymap);
	  }

    //index_names.push(indexData['features'][0].basic_details.type);
  	
    

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

<br/><br/>	
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo GOOGLE_MAP_KEY;?>&libraries=geometry,drawing"></script>
    <?php 
	if ( comments_open()) {	?>
	 <div class="row bg-light my-5">
		<div class="col-12 city-page-center-block">
		<div class="main_title">
				Testimonials
		</div>
		<?php 
		comments_template();
		?>
		<div class="col-12 city-page-center-block">
	</div> 
	<?php } ?>
	<?php if(get_field("footersection") != "") { ?>
		<!-- <section class="footerSection pt-3"> -->
		<div class="row footerSection py-5">
			<div class="col-md-4 col-lg-3 col-sm-12 border-right border-secondary">
				<div class="row">
					<div class="col-12 text-center">
						<img style="width:75%" src="<?php the_field( 'footerlogoimage', get_field("footersection"));?>">
					</div>
					<div class="col-12 text-center px-5">
						<h3 class="mt-1  text-secondary"><?php echo the_field( 'footerlabel', get_field("footersection") );?></h3>
					</div>
					<small class="col-12 text-center text-muted px-5">
						<?php echo the_field( 'footersublabel', get_field("footersection") );?>
					</small>
				</div>
				<div class="row">
					<div class="col-12 text-center py-3">
						<a class="px-1" href="//facebook.com/lakeer.org" title="Facebook page" aria-label="Facebook page" target="_blank">
							<!-- <i class="fab fa-facebook-f fa-2x social-media-logo"></i> -->
							<span class="fa-stack text-secondary">
							  <i class="fas fa-circle fa-stack-2x"></i>
							  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
							</span>
						</a>
						<a class="px-1" href="https://twitter.com/lakeer_org" title="Twitter profile" aria-label="Twitter profile" target="_blank">
							<span class="fa-stack text-secondary">
							  <i class="fas fa-circle fa-stack-2x"></i>
							  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
							</span>
						</a>
						<a class="px-1" href="https://in.linkedin.com/company/lakeer" title="LinkedIn page" aria-label="LinkedIn page" target="_blank">
							<!-- <i class="fab fa-linkedin-in fa-2x social-media-logo"></i> -->
							<span class="fa-stack text-secondary">
							  <i class="fas fa-circle fa-stack-2x"></i>
							  <i class="fab fa-linkedin-in fa-stack-1x fa-inverse"></i>
							</span>
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-8 col-lg-9 col-sm-12 px-5">
				<div class="border1 border-top border-secondary pb-4 mt-4 d-md-none d-sm-block"></div>
				<?php echo the_field( 'footerdescription', get_field("footersection") );?>
			</div>
		</div>
		<!-- </section> -->
	<?php } ?>
<?php get_footer(); ?>
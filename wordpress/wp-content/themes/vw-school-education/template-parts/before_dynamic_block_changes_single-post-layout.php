<?php
/**
 * The template part for displaying slider
 *
 * @package VW School Education
 * @subpackage vw-school-education
 * @since VW School Education 1.0
 */


$customFileds = get_fields();
get_header();
?>
<!-- This image is used for showing when sharing on FaceBook -->
<meta name='og:image' content='<?php echo get_field("topbackgroundimage")['url']; ?>'>
<meta property="og:title" content="<?php echo get_field("issue_title");?>">
<meta property="og:description" content="<?php echo get_field("notes");?>">
<meta name="twitter:card" content="summary">
<meta name="twitter:image" content="<?php echo get_field("topbackgroundimage")['url']; ?>">

<div>
<section class="home_banner_area">
	<div class="banner_inner">
		<div class="container">
			<div class="banner_content">
				<div class="image-container">
				    <img src="<?php echo get_field("topbackgroundimage")['url']; ?>" class="full-width-image" />
				    <div class="after"></div>
				</div>
				<center class="text-center col-12 upper_text issue-analysis-title pr-5">
						<?php echo get_field("issue_title");?>
				</center>
				<center class="text-center col-12 issue-analysis-subtitle pr-5">
					<h2>
						<?php echo get_field("subtitle");?>
					</h2>
				</center>
				<center class="text-center col-12 issue-analysis-notes pr-5">
					<?php echo get_field("notes");?>
				</center>	
				<center class="text-center issue-analysis-button">
					<?php echo the_field("analysisbutton");?>
				</center>
			</div>
		</div>
	</div>
</section>


<section class="causes_area">
	<div class="container">
		<div class="main_title">
			<h2><?php echo get_field("analysistitle");?></h2>
			<p><?php echo get_field("analysisdescription");?></p>
		</div>
		<div class="row mr-0">
			<?php echo get_field("analysiscards");?>
		</div>
	</div>
</section>
    

<section class="event_area section_gap_custom">
	<div class="container">
		<div class="main_title">
			<h2><?php echo get_field("socialnetworkingblocktitle");?></h2>
			<p><?php echo get_field("socialnetworkingblocksubtitle");?></p>
		</div>
	
		<div class="row mr-0 ml-1">
			<div class="col-lg-4 offset-lg-2">
				<?php echo get_field("socialnetworkingblocks1");?>
			</div>

			<div class="col-lg-4 offset-lg-1">
				<?php echo get_field("socialnetworkingblocks2");?>
			</div>

			<div class="col-lg-4 offset-lg-2">
				<?php echo get_field("socialnetworkingblocks3");?>
			</div>

			<div class="col-lg-4 offset-lg-1">
				<?php echo get_field("socialnetworkingblocks4");?>
			</div>
		</div>
	</div>
</section>
    
    	

<section class="event_area section_gap_custom m-4">
<!-- Row for main content area -->
<div class="small-12 large-12 columns" id="content" role="main">

	<h1 class="entry-title m-4"><?php echo get_field("mapblocktitle");?></h1>
	<div class="row m-4">
		<div class="col-2">
		  <input type="checkbox" class="form-check-input" id="busStops" checked>
		  <label class="form-check-label" for="busStops">Bus Stops</label>
		</div>
		<div class="col-2">
		  <input type="checkbox" class="form-check-input" id="metroStations" checked>
		  <label class="form-check-label" for="metroStations">Metro Stations</label>
		</div>
		<div class="col-2">
		  <input type="checkbox" class="form-check-input" id="showWardPolygon" checked>
		  <label class="form-check-label" for="showWardPolygon">Ward Polygon</label>
		</div>
	</div>
	<div class="row mr-0">
		<div class="col-12">
			<div id="map" style="display: block;position: fixed;width:100%;height:500px;"></div>
		</div>
    </div>
</div>
</section>
</div>
    <script type="text/javascript">
        var map;
        var metroStationsdata = [];
        var busStopData = [];
      	var busMarket = [];
        var metroMarket = [];
        var infowindow;
        
        function getMapData() {
		    $.ajax({
				url: "<?php echo site_url();?>/sample_map_web.php",
				async: true,
				//data: { map_id : '5c8b2af28dbfcf3a10711751' , flag:1},
		    	dataType: 'json',
		    	success: function (data) {
		      	console.log(data);
		      	metroStationsdata = JSON.parse(data[0]);
		      	busStopData = JSON.parse(data[1]);
		      	init_map(metroStationsdata,busStopData);
		    	}
		 	});  
	  	}
	  	//alert("sddd");
	 	function init_map(metroStationsdata, busStopData) {
        map = new google.maps.Map(document.getElementById('map'), {
                 center: {lat: 17.387140, lng: 78.491684},
                 zoom: 12,
                 mapTypeId: google.maps.MapTypeId.HYBRID 
        });
        plotMapPoints(metroStationsdata, busStopData);
    }
        function plotMapPoints(metro_data, bus_stop_data){
            var pointsToPlot = [];

            
            if($("#busStops").is(":checked")){
                
                $(bus_stop_data).each(function(index, object){
                	pointsToPlot.push(object);	
                });

                var j = pointsToPlot.length;
            	for (var i=0; i<j; i++) {
                    var marker=new google.maps.Marker({
                        position: new google.maps.LatLng({lat: pointsToPlot[i].properties.Lat, lng: pointsToPlot[i].properties.Long}),
                        map: map,
                        icon: "http://maps.gstatic.com/mapfiles/ridefinder-images/mm_20_blue.png",
                        title: pointsToPlot[i].properties["stop_name"],
                    	wardname:pointsToPlot[i]["ward_name"],
                    	circlename:pointsToPlot[i]["circle_name"],
                    });
                    marker.addListener('click', function() {
                    	infowindow.setContent("<p>Bus Stop Name: " + this.title + "</p>" + 
           	   				 "<p>Ward Name: " + this.wardname + "</p>" + 
           	   				"<p>Circle Name: " + this.circlename + "</p>");
                    	   infowindow.open(map,this);
                    	});
                    busMarket.push(marker);
                }
            }
            else{
            	for (var i = 0; i < busMarket.length; i++) {
            		busMarket[i].setMap(null);
                  }
            }
            pointsToPlot = [];
           	if($("#metroStations").is(":checked")){
        	   for (var i = 0; i < metroMarket.length; i++) {
        		   metroMarket[i].setMap(null);
                 }
               
           		$(metro_data).each(function(index, object){
                	pointsToPlot.push(object);	
                });

           		var j = pointsToPlot.length;
            	for (var i=0; i<j; i++) {
                    var marker=new google.maps.Marker({
                        position: new google.maps.LatLng({lat: pointsToPlot[i].properties.Lat, lng: pointsToPlot[i].properties.Long}),
                        map: map,
                        icon: "http://maps.gstatic.com/mapfiles/ridefinder-images/mm_20_green.png",
                        title: pointsToPlot[i].properties["Metro Station"],
                        wardname:pointsToPlot[i]["ward_name"],
                        circlename:pointsToPlot[i]["circle_name"],
                    });
                    marker.addListener('click', function() {
                    	   infowindow.setContent("<p>Metro Station Name: " + this.title + "</p>" + 
                            	   				 "<p>Ward Name: " + this.wardname + "</p>" + 
                            	   				"<p>Circle Name: " + this.circlename + "</p>");
                    	   infowindow.open(map,this);
                    	});
                    metroMarket.push(marker);
                }
            }
           else{
        	   for (var i = 0; i < metroMarket.length; i++) {
        		   metroMarket[i].setMap(null);
                 }
           }
            
                
        } 

        
        $(document).ready(function(){
			$("#busStops").click(function(){
				plotMapPoints(metroStationsdata, busStopData);
			});
			$("#metroStations").click(function(){
				plotMapPoints(metroStationsdata, busStopData);
			});

			
        });
	
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAbeQUWgEz3eFMgeJeI4isomnGCq8CrMYs&callback=getMapData&libraries=geometry,drawing"></script>
    
    
    
    <?php
		the_content();
        //the_tags(); 
        
        // If comments are open or we have at least one comment, load up the comment template
        if ( comments_open() || '0' != get_comments_number() )
        comments_template();
    ?>
<?php get_footer(); ?>
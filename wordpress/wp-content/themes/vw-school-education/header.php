<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content-vw">
 *
 * @package VW School Education
 */

//get_header();
//the_post();

$topbackgroundimage = get_field('topbackgroundimage');

?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<link rel="profile"
	href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'vw-school-education' ) ); ?>">
<?php wp_head(); ?>
<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"/>
  <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>
  <script src='https://unpkg.com/leaflet.gridlayer.googlemutant@latest/Leaflet.GoogleMutant.js'></script>
<style type="text/css" id="custom-background-css">
.container{
	margin-left: 0px;
    margin-right: 0px;
    width: 100% !important;
    max-width: 100% !important;
    padding: 0px !important;
}

.container .middle-align{
	padding-top: 0px !important;
}
.post_banner .banner_inner {
	width: 100%;
	display: flex;
}

.post_banner .banner_inner .container {
	vertical-align: middle;
	align-self: center;
}

.post_banner .banner_inner .banner_content {
	color: #fff;
	vertical-align: middle;
	align-self: center;
	text-align: center;
}

.post_banner .banner_inner .banner_content .upper_text {
	font-size: 50px !important;
	text-transform: uppercase;
	color: #fdbb00 !important;
	width: auto !important;
}

@media ( max-width : 767px) {
	.post_banner .banner_inner .banner_content .upper_text {
		font-size: 35px !important;
	}
}

.post_banner .banner_inner .banner_content h2 {
	color: #ffffff;
	margin-top: 0px;
	font-size: 50px;
	font-weight: bold;
	font-family: "Poppins", sans-serif;
	line-height: 70px;
	text-transform: uppercase;
	margin-bottom: 20px;
}

.post_banner .banner_inner .banner_content p {
	color: #f9f9ff;
	max-width: 680px;
	margin: 0px auto 45px;
}

@media ( max-width : 767px) {
	.post_banner .banner_inner .banner_content .mr-20 {
		margin-right: 0;
		margin-bottom: 15px;
	}
}

html{
	margin-top: 0px !important;
}
</style>
<script>
$(document).ready(function(){

	// When the user scrolls the page, execute myFunction 
	window.onscroll = function() {myFunction()};

	// Get the header
	var header = document.getElementById("myHeader");

	// Get the offset position of the navbar
	var sticky = header.offsetTop;

	// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
	function myFunction() {
	  if (window.pageYOffset > (sticky+600)) {
			$(".nav").addClass("stick-bar");
			$(".city-page-menu-bar").addClass("stick-bar");
			var logoURL = $("#logo_image").attr("src");
			if(logoURL.indexOf("_blue.png") == -1){
				logoURL = logoURL.replace(".png","_blue.png");
				$("#logo_image").attr("src",logoURL);
			}
			if($("#wpadminbar").length > 0){
				header.classList.add("sticky-with-menu");
			}
			else{
		    	header.classList.add("sticky");
			}
	  } else {
		  $(".nav").removeClass("stick-bar");
		  $(".city-page-menu-bar").removeClass("stick-bar");
		  var logoURL = $("#logo_image").attr("src");
		  logoURL = logoURL.replace("_blue.png", ".png");
		  $("#logo_image").attr("src",logoURL);
			
	    if($("#wpadminbar").length > 0){
	    	header.classList.remove("sticky-with-menu");
		}
		else{
			header.classList.remove("sticky");
		}
	  }
	}
});
</script>
</head>
<body <?php body_class(); ?>>
<div id="myHeader" class="home-page-header header"><?php get_template_part('template-parts/header/content-header'); ?>
<?php get_template_part('template-parts/header/navigation'); ?></div>
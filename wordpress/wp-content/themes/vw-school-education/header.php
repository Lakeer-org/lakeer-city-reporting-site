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

<!-- Add meta tags to be used when sharing the Story / city page on social networking sites -->
<?php if(get_field("headerimage") != ""){?>
<meta property='og:image' content='<?php echo get_field("headerimage")['url']; ?>'>
<meta property="og:title" content="<?php echo get_field("headertitle");?>">
<meta property="og:description" content="<?php echo get_field("headersubtitle");?>">
<meta name="twitter:card" content="summary">
<meta name="twitter:image" content="<?php echo get_field("headerimage")['url']; ?>">
<?php }else if(get_field("page_background_image") != ""){?>
<meta property='og:image' content='<?php echo get_field("page_background_image")['url']; ?>'>
<meta property="og:title" content="<?php echo get_field("block_title");?>">
<meta property="og:description" content="<?php echo get_field("block_notes");?>">
<meta name="twitter:card" content="summary">
<meta name="twitter:image" content="<?php echo get_field("page_background_image")['url']; ?>">
<?php }?>

<link rel="profile"
	href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'vw-school-education' ) ); ?>">
<?php wp_head(); ?>
<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
<!--<link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"/> !-->
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/leaflet@latest/dist/leaflet.css" />
  <!--<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>!-->
  <script src="https://unpkg.com/leaflet@latest/dist/leaflet.js"></script>
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

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo GOOGLE_ANALYTICS_KEY; ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '<?php echo GOOGLE_ANALYTICS_KEY; ?>');
</script>


<script>

var scrollToClickedStorySection = function (e) {
	e.preventDefault();

    $(document).off("scroll");
    
    $('#navBarStorySections li a.active').removeClass('active');
    $('#navBarStorySections li.highlighted').removeClass('highlighted');

    $(this).addClass('active');
    $('a.active').closest('li').addClass('highlighted');
  
    var target = this.hash,
        menu   = target;

    $target = $(target);
    $('html, body').stop().animate({
        'scrollTop': $target.offset().top + 2
    }, 500, 'swing', function () {
        window.location.hash = target;
        $(document).on("scroll", onStoryScroll);
    });
};

var highlightCurrentSectionInNavbar = function () {
	var scrollPos = $(document).scrollTop();
    $('#navBarStorySections a').each( function (k, v) {
        var currLink = $(this);	// Here this means the anchor tag being iterated
        
        targetSectionLink = currLink.attr("href");
        var refElement = $(targetSectionLink);	// Get value in href of the anchor tag being iterated

        $('#navBarStorySections li a.active').removeClass("active");
        $('#navBarStorySections li.highlighted').removeClass('highlighted');

        var refElementTop = refElement.position().top - $('#navBarStorySections').height();

        if (refElementTop <= scrollPos && refElementTop + refElement.height() > scrollPos) {
            currLink.addClass("active");
            currLink.closest('li').addClass('highlighted');
            return false;
        }
    });
};

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
var onStoryScroll = function() {
	var windowHeight = $(window).height();
	var navBarStorySections = $('#navBarStorySections');
	var headerImageHeight = $(".banner_content").height();

	if($(".headerBlock").length > 0) {
		headerImageHeight = $(".headerBlock").height();
	}


  	if (window.pageYOffset > headerImageHeight) {

  		// If city story sections are present, then as you scroll down, show navbar with section names
		if (navBarStorySections.length > 0) {
			$('#navBarStorySections').removeClass('d-none');
			$('#header').addClass('d-none');

			highlightCurrentSectionInNavbar();

		} else {
			$(".nav-menu").addClass("stick-bar");
			var logoURL = $("#logo_image").attr("src");
			if(logoURL.indexOf("_blue.png") == -1){
				logoURL = logoURL.replace(".png","_blue.png");
				$("#logo_image").attr("src",logoURL);
			}
			if($("#wpadminbar").length > 0){
				header.classList.add("sticky-with-menu");
			}
			else {
		    	header.classList.add("sticky");
			}
		}

  	} else {

		if (navBarStorySections.length > 0) {
			$('#navBarStorySections').addClass('d-none');
			$('#header').removeClass('d-none');

		} else {

			$(".nav-menu").removeClass("stick-bar");
			var logoURL = $("#logo_image").attr("src");
			logoURL = logoURL.replace("_blue.png", ".png");
			$("#logo_image").attr("src",logoURL);
			
		    if($("#wpadminbar").length > 0) {
		    	header.classList.remove("sticky-with-menu");
			}
			else {
				header.classList.remove("sticky");
			}
		}
  	}
}

$(document).ready(function(){

	$('#navBarStorySections li a').on('click', scrollToClickedStorySection);

	// When the user scrolls the page, execute onStoryScroll
	if($(".headerBlock").length > 0 || $(".banner_content").length > 0){ 
		window.onscroll = onStoryScroll;//function() {onStoryScroll()};
	}
	else{
		$(".nav-menu").addClass("stick-bar");
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
	}

	// Get the header
	var header = document.getElementById("myHeader");

	// Get the offset position of the navbar
	var sticky = header.offsetTop;

	
});
</script>
</head>
<body <?php body_class(); ?>>
<div id="myHeader" class="home-page-header header"><?php get_template_part('template-parts/header/content-header'); ?>
<?php get_template_part('template-parts/header/navigation'); ?></div>
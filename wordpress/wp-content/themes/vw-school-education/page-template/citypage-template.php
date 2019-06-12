<?php

/*Template Name: Blank City Page*/

?>

<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package VW School Education
 */

get_header(); 
?>
<!-- This image is used for showing when sharing on FaceBook -->
<meta name='og:image' content='<?php echo get_field("page_background_image")['url']; ?>'>
<meta property="og:title" content="<?php echo get_field("block_title");?>">
<meta property="og:description" content="<?php echo get_field("block_notes");?>">
<meta name="twitter:card" content="summary">
<meta name="twitter:image" content="<?php echo get_field("page_background_image")['url']; ?>">

<?php /*?><nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
		<?php if(get_field("menu1label") != ""){?>
			<li class="nav-item"><a class="nav-link" href="<?php echo get_field("menu1selectpage");?>"><?php echo get_field("menu1label");?></a></li>
		<?php }?>
		<?php if(get_field("menu2label") != ""){?>
			<li class="nav-item"><a class="nav-link" href="<?php echo get_field("menu2selectpage");?>"><?php echo get_field("menu2label");?></a></li>
		<?php }?>
		<?php if(get_field("menu3label") != ""){?>
			<li class="nav-item"><a class="nav-link" href="<?php echo get_field("menu3selectpage");?>"><?php echo get_field("menu3label");?></a></li>
		<?php }?>
		<?php if(get_field("menu4label") != ""){?>
			<li class="nav-item"><a class="nav-link" href="<?php echo get_field("menu4selectpage");?>"><?php echo get_field("menu4label");?></a></li>
		<?php }?>
		<?php if(get_field("menu5label") != ""){?>
			<li class="nav-item"><a class="nav-link" href="<?php echo get_field("menu5selectpage");?>"><?php echo get_field("menu5label");?></a></li>
		<?php }?>
    </ul>
  </div>
</nav>
<?php */ ?>

<div class="container-fluid">
	<div class="row">
	<section class="home_banner_area city-page col-12 px-0">
		<div class="banner_inner">
			<div class="container ">
				<div class="banner_content" style="background-image:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5) ), url('<?php echo get_field("page_background_image")['url']; ?>');background-size: cover;">
					<div class="city-page-analysis-title">
						<?php echo get_field("block_title");?>
					</div>
					<div class="city-page-analysis-subtitle pt-5">
						<?php echo get_field("block_sub_title");?>
					</div>	
				</div>
			</div>
		</div>
	</section>
	</div>
	
	
	<div class="row">
		<div class="col-12 city-page-center-block">
			<section class="causes_area">
				<div class="container pl-0">
					<div class="main_title">
						<?php echo get_field("issuesblocktitle");?>
					</div>
					<div class="row">
						<div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
							<?php echo get_field("issuescardsshortcode");?>
						</div>
						<br/>
						<div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12 pt-5">
							<center>
								<a class="all-post-button" href="<?php echo get_field("allissuesbuttonlink")?>"><?php echo get_field("allissuesbuttonlabel");?></a>	
							</center>
						</div>	
					</div>
				</div>
			</section>
		</div>
	</div>    
	
	<div class="row bg-light my-5">
		<div class="col-12 city-page-center-block">
		<div class="main_title">
				Testimonials
		</div>
		<?php 
		the_content();
		
		if ( comments_open())
				comments_template();
		?>
		<div class="col-12 city-page-center-block">
	</div>

</div>
<section class="footerSection pt-3" style="background-color: #2C2C2C !important;">
	<div class="row mr-0">
		<div class="col-3 pt-1 pb-1 border border-l-0 border-top-0 border-bottom-0">
			<div class="col-12 text-center">
				<img src="<?php the_field( 'footerlogoimage', get_field("footersection"));?>">
			</div>
			<div class="col-12 text-center">
				<h3 class="mt-1  text-white"><?php echo the_field( 'footerlabel', get_field("footersection") );?></h3>
			</div>
			<div class="col-12 text-center text-muted" style="font-size: 9pt;">
				<?php echo the_field( 'footersublabel', get_field("footersection") );?>
			</div>
			<div class="col-12 text-center">
				<a class="px-1 border-0 button button--dark button--chromeless is-touchIconBlackPulse u-baseColor--buttonDark button--withIcon button--withSvgIcon is-touched" href="https://twitter.com/lakeer_org" title="Twitter profile" aria-label="Twitter profile" target="_blank">
					<span class="button-defaultState">
						<span class="svgIcon svgIcon--twitterFilled svgIcon--21px">
							<svg class="svgIcon-use" width="21" height="21">
								<path d="M18.502 4.435a6.892 6.892 0 0 1-2.18.872 3.45 3.45 0 0 0-2.552-1.12 3.488 3.488 0 0 0-3.488 3.486c0 .276.03.543.063.81a9.912 9.912 0 0 1-7.162-3.674c-.3.53-.47 1.13-.498 1.74.027 1.23.642 2.3 1.557 2.92a3.357 3.357 0 0 1-1.555-.44.15.15 0 0 0 0 .06c-.004 1.67 1.2 3.08 2.8 3.42-.3.06-.606.1-.934.12-.216-.02-.435-.04-.623-.06.42 1.37 1.707 2.37 3.24 2.43a7.335 7.335 0 0 1-4.36 1.49L2 16.44A9.96 9.96 0 0 0 7.355 18c6.407 0 9.915-5.32 9.9-9.9.015-.18.01-.33 0-.5A6.546 6.546 0 0 0 19 5.79a6.185 6.185 0 0 1-1.992.56 3.325 3.325 0 0 0 1.494-1.93"></path>
							</svg>
						</span>
					</span>
				</a>
				<a class="px-1 border-0 button button--dark button--chromeless is-touchIconBlackPulse u-baseColor--buttonDark button--withIcon button--withSvgIcon button--dark button--chromeless" href="//facebook.com/lakeer.org" title="Facebook page" aria-label="Facebook page" target="_blank">
					<span class="button-defaultState">
						<span class="svgIcon svgIcon--facebookFilled svgIcon--21px">
							<svg class="svgIcon-use" width="21" height="21">
								<path d="M18.26 10.55c0-4.302-3.47-7.79-7.75-7.79-4.28 0-7.75 3.488-7.75 7.79a7.773 7.773 0 0 0 6.535 7.684v-5.49h-1.89v-2.2h1.89v-1.62c0-1.882 1.144-2.907 2.814-2.907.8 0 1.48.06 1.68.087V8.07h-1.15c-.91 0-1.09.435-1.09 1.07v1.405h2.16l-.28 2.2h-1.88v5.515c3.78-.514 6.7-3.766 6.7-7.71"></path>
							</svg>
						</span>
					</span>
				</a>
			</div>
		</div>
		<div class="col-9">
			<?php echo the_field( 'footerdescription', get_field("footersection") );?>
		</div>
	</div>
</section>
<?php get_footer(); ?>		

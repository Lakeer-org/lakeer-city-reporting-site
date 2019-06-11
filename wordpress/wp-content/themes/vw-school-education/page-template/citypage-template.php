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

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
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
<?php echo get_field("footersection"); ?>
<?php get_footer(); ?>		

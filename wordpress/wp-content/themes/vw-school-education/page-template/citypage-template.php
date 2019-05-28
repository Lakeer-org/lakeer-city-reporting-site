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
<div style="height: 100%;background-color: #DCDCDC !important;">

	<section class="home_banner_area city-page">
		<div class="banner_inner">
			<div class="container ">
				<div class="banner_content" style="background-image:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5) ), url('<?php echo get_field("page_background_image")['url']; ?>');">
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
	
	<div class="city-page-center-block">
		<section class="city-page-menu-bar mb-0 pb-0">
			<ul id="mainMenu">
				<?php if(get_field("menu1label") != ""){?>
				<li><a href="<?php echo get_field("menu1selectpage");?>"><?php echo get_field("menu1label");?></a></li>
				<?php }?>
				<?php if(get_field("menu2label") != ""){?>
				<li><a href="<?php echo get_field("menu2selectpage");?>"><?php echo get_field("menu2label");?></a></li>
				<?php }?>
				<?php if(get_field("menu3label") != ""){?>
				<li><a href="<?php echo get_field("menu3selectpage");?>"><?php echo get_field("menu3label");?></a></li>
				<?php }?>
				<?php if(get_field("menu4label") != ""){?>
				<li><a href="<?php echo get_field("menu4selectpage");?>"><?php echo get_field("menu4label");?></a></li>
				<?php }?>
				<?php if(get_field("menu5label") != ""){?>
				<li><a href="<?php echo get_field("menu5selectpage");?>"><?php echo get_field("menu5label");?></a></li>
				<?php }?>
			</ul>
		</section>
		<section class="causes_area">
			<div class="container pl-0">
				<div class="main_title">
					<?php echo get_field("issuesblocktitle");?>
				</div>
				<div class="row">
					<div class="col-10">
						<?php echo get_field("issuescardsshortcode");?>
					</div>
					<div class="col-2">
						<a class="all-post-button" href="<?php echo get_field("allissuesbuttonlink")?>"><?php echo get_field("allissuesbuttonlabel");?></a>	
					</div>	
				</div>
			</div>
		</section>
	</div>    
	
	<?php 
	the_content();
	
	if ( comments_open())
	        comments_template();
	?>

</div>
<?php echo get_field("footersection"); ?>
<?php get_footer(); ?>		

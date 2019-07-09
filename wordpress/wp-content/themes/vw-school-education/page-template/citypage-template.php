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
						<div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12 py-5">
							<center>
								<a class="all-post-button" href="<?php echo get_field("allissuesbuttonlink")?>"><?php echo get_field("allissuesbuttonlabel");?></a>	
							</center>
						</div>	
					</div>
				</div>
			</section>
		</div>
	</div>    

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
</div>

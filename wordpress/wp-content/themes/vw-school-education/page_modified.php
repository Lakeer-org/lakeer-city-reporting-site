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


<section class="home_banner_area">
	<div class="banner_inner">
		<div class="container bg-light">
			<div class="banner_content">
				<div class="image-container">
				    <img src="<?php echo get_field("page_background_image")['url']; ?>" class="full-width-image" />
				    <div class="after"></div>
				</div>
				<center class="text-center">
					<p class="upper_text col-12" style="position: absolute;top: 200px;">
						<?php echo get_field("block_title");?>
					</p>
				</center>
				<center class="text-center">
					<h2 style="position: absolute;top: 250px;">
						<?php echo get_field("block_sub_title");?>
					</h2>
				</center>	
				<center class="text-center">
					<p style="position: absolute;top: 350px;">
						<?php echo get_field("block_notes");?>
					</p>
				</center>
				<center class="text-center">
					<p style="position: absolute;top: 400px;width: 100%">
						<?php echo get_field("analysis_button");?>
					</p>
				</center>
			</div>
		</div>
	</div>
</section>


<section class="causes_area bg-light">
	<div class="container">
		<div class="main_title">
			<h2><?php echo get_field("issuesblocktitle");?></h2>
			<p><?php echo get_field("issuesblocksubtitle");?></p>
		</div>
		<div class="col-12 mr-0 bg-light">
			<div class="col-12">
				<?php echo get_field("issuescardsshortcode");?>
			</div>
			<div class="col-2 text-right">
				All Stories	
			</div>	
		</div>
	</div>
</section>
    


<?php get_footer(); ?>
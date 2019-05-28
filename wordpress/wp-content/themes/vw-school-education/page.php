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

get_header(); ?>

<?php do_action( 'vw_school_education_page_header' ); ?>

<div id="content-vw" class="container" style="height: 100vh;background-color: #DCDCDC !important;padding-top: 5vh !important;">
    <div class="middle-align">
		<?php while ( have_posts() ) : the_post(); ?>
        	<img src="<?php the_post_thumbnail_url('full'); ?>" width="100%">
            <h1 style="font-size: 20pt;" class="ml-4"><?php the_title();?></h1>
            <?php the_content();?>
        <?php endwhile; // end of the loop. ?>
        <?php
        	//If comments are open or we have at least one comment, load up the comment template
            if ( comments_open() || '0' != get_comments_number() )
                comments_template();
        ?>
    </div>
    <div class="clear"></div>
</div>

<?php do_action( 'vw_school_education_page_footer' ); ?>

<?php get_footer(); ?>
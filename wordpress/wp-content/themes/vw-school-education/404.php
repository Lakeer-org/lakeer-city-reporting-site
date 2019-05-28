<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package VW School Education
 */

get_header(); ?>

<div class="title-box">
    <div class="container">
        <h1><?php printf( '<strong>%s</strong> %s', esc_html__( '404','vw-school-education' ), esc_html__( 'Not Found', 'vw-school-education' ) ) ?></h1>
    </div>
</div>

<div id="content-vw">
	<div class="container">
        <div class="page-content">		
			<p class="text-404"><?php esc_html_e( 'Looks like you have taken a wrong turn&hellip', 'vw-school-education' ); ?></p>
			<p class="text-404"><?php esc_html_e( 'Dont worry&hellip it happens to the best of us.', 'vw-school-education' ); ?></p>
			<div class="read-moresec">
        		<a href="<?php echo esc_url(home_url()); ?>" class="button hvr-sweep-to-right"><?php esc_html_e( 'Return to the home page', 'vw-school-education' ); ?></a>
			</div>
			<div class="clearfix"></div>
        </div>
	</div>
</div>
<?php get_footer(); ?>
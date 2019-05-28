<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package VW School Education
 */
?>

<div class="title-box">
    <div class="container">
        <h1 class="entry-title"><?php esc_html_e( 'Nothing Found', 'vw-school-education' ); ?></h1>
    </div>
</div>

<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

	<p><?php printf( esc_html__( 'Ready to publish your first post? Get started here.', 'vw-school-education' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
	<?php elseif ( is_search() ) : ?>
		<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'vw-school-education' ); ?></p><br />
		<?php get_search_form(); ?>
	<?php else : ?>
	<p><?php esc_html_e( 'Dont worry&hellip it happens to the best of us.', 'vw-school-education' ); ?></p><br />
	<div class="read-moresec">
		<a href="<?php echo esc_url(home_url() ); ?>" class="button hvr-sweep-to-right"><?php esc_html_e( 'Back to Home Page', 'vw-school-education' ); ?></a>
	</div>
<?php endif; ?>
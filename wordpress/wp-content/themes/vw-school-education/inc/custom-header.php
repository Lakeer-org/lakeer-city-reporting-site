<?php
/**
 * @package VW School Education
 * Setup the WordPress core custom header feature.
 *
 * @uses vw_school_education_header_style()
*/
function vw_school_education_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'vw_school_education_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 400,
		'wp-head-callback'       => 'vw_school_education_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'vw_school_education_custom_header_setup' );

if ( ! function_exists( 'vw_school_education_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see vw_school_education_custom_header_setup().
 */
function vw_school_education_header_style() {

		$header_text_color = get_header_textcolor();
	?>
		<style type="text/css">
			<?php
				//Check if user has defined any header image.
				if ( get_header_image() ) :
			?>
				#header{
					background: url(<?php echo esc_url(get_header_image()); ?>) no-repeat;
					background-position: center top;
				}
			<?php endif; ?>	
		</style>
	<?php
}
endif; // vw_school_education_header_style
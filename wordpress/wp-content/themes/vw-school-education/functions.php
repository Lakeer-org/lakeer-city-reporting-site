<?php
/**
 * VW School Education functions and definitions
 *
 * @package VW School Education
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

/* Theme Setup */
if ( ! function_exists( 'vw_school_education_setup' ) ) :

function vw_school_education_setup() {

	$GLOBALS['content_width'] = apply_filters( 'vw_school_education_content_width', 640 );
	
	load_theme_textdomain( 'vw-school-education', get_template_directory() . '/languages' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('vw-school-education-homepage-thumb',240,145,true);
	
       register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'vw-school-education' ),
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );

	   /*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );


	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', vw_school_education_font_url() ) );
}
// Theme Activation Notice
	global $pagenow;

	if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
	add_action( 'admin_notices', 'vw_school_education_activation_notice' );
	}

endif; // vw_charity_ngo_setup
	add_action( 'after_setup_theme', 'vw_school_education_setup' );

	// Notice after Theme Activation
	function vw_school_education_activation_notice() {
	echo '<div class="notice notice-success is-dismissible welcome-notice">';
	echo '<h3>'. esc_html__( 'Warm Greetings to you!!', 'vw-school-education' ) .'</h3>';
	echo '<p>'. esc_html__( 'Thank you for choosing VW School Education Theme. Would like to have you on our Welcome page so that you can reap all the benefits of our VW School Education Theme.', 'vw-school-education' ) .'</p>';
	echo '<p><a href="'. esc_url( admin_url( 'themes.php?page=vw_school_education_guide' ) ) .'" class="button button-primary">'. esc_html__( 'GET STARTED', 'vw-school-education' ) .'</a></p>';
	echo '</div>';

}

/* Theme Widgets Setup */
function vw_school_education_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'vw-school-education' ),
		'description'   => __( 'Appears on blog page sidebar', 'vw-school-education' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'vw-school-education' ),
		'description'   => __( 'Appears on page sidebar', 'vw-school-education' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'vw-school-education' ),
		'description'   => __( 'Appears on page sidebar', 'vw-school-education' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 1', 'vw-school-education' ),
		'description'   => __( 'Appears on footer 1', 'vw-school-education' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 2', 'vw-school-education' ),
		'description'   => __( 'Appears on footer 2', 'vw-school-education' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 3', 'vw-school-education' ),
		'description'   => __( 'Appears on footer 3', 'vw-school-education' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 4', 'vw-school-education' ),
		'description'   => __( 'Appears on footer 4', 'vw-school-education' ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Social Icon', 'vw-school-education' ),
		'description'   => __( 'Appears on top bar', 'vw-school-education' ),
		'id'            => 'social-icon',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'vw_school_education_widgets_init' );

/* Theme Font URL */
function vw_school_education_font_url() {
	$font_url = '';
	$font_family = array();
	$font_family[] = 'PT+Serif:400,400i,700,700i';
	$font_family[] = 'Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';

	$query_args = array(
		'family'	=> urlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

/* Theme enqueue scripts */
function vw_school_education_scripts() {
	wp_enqueue_style( 'vw-school-education-font', vw_school_education_font_url(), array() );
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/css/bootstrap.css' );
	wp_enqueue_style( 'vw-school-education-basic-style', get_stylesheet_uri() );	
	wp_enqueue_style( 'vw-school-education-effect', get_template_directory_uri().'/css/effect.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/fontawesome-all.css' );
	wp_enqueue_script( 'bootstrap-jquery', get_template_directory_uri() . '/js/bootstrap.js', array('jquery') ,'',true);
	wp_enqueue_script( 'vw-school-education-custom-scripts-jquery', get_template_directory_uri() . '/js/custom.js', array('jquery') );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	/* Enqueue the Dashicons script */
	wp_enqueue_style( 'dashicons' );
}
add_action( 'wp_enqueue_scripts', 'vw_school_education_scripts' );

function vw_school_education_ie_stylesheet(){
	wp_enqueue_style('vw-school-education-ie', get_template_directory_uri().'/css/ie.css');
	wp_style_add_data( 'vw-school-education-ie', 'conditional', 'IE' );
}
add_action('wp_enqueue_scripts','vw_school_education_ie_stylesheet');

/*radio button sanitization*/

function vw_school_education_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

define('VW_SCHOOL_EDUCATION_FREE_THEME_DOC','https://www.vwthemes.com/docs/free-vw-school-education/','vw-school-education');
define('VW_SCHOOL_EDUCATION_SUPPORT','https://wordpress.org/support/theme/vw-school-education/','vw-school-education');
define('VW_SCHOOL_EDUCATION_REVIEW','https://www.vwthemes.com/topic/reviews-and-testimonials/','vw-school-education');
define('VW_SCHOOL_EDUCATION_BUY_NOW','https://www.vwthemes.com/themes/premium-school-wordpress-theme/','vw-school-education');
define('VW_SCHOOL_EDUCATION_LIVE_DEMO','https://vwthemes.net/school-education-pro/','vw-school-education');
define('VW_SCHOOL_EDUCATION_PRO_DOC','https://www.vwthemes.com/docs/vw-school-education-pro/','vw-school-education');
define('VW_SCHOOL_EDUCATION_FAQ','https://www.vwthemes.com/faqs/','vw-school-education');
define('VW_SCHOOL_EDUCATION_CHILD_THEME','https://developer.wordpress.org/themes/advanced-topics/child-themes/','vw-school-education');
define('VW_SCHOOL_EDUCATION_CONTACT','https://www.vwthemes.com/contact/','vw-school-education');
define('VW_SCHOOL_EDUCATION_DEMO_DATA','https://vwthemes.net/docs/vw-school-demo.xml.zip','vw-school-education');

/* Excerpt Limit Begin */
function vw_school_education_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

define('vw_school_education_CREDIT','https://www.vwthemes.com/themes/free-wordpress-school-theme/','vw-school-education');

if ( ! function_exists( 'vw_school_education_credit' ) ) {
	function vw_school_education_credit(){
		echo "<a href=".esc_url(VW_SCHOOL_EDUCATION_CREDIT)." target='_blank'>".esc_html__('School WordPress Theme','vw-school-education')."</a>";
	}
}

/* Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';

/* Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/* Customizer additions. */
require get_template_directory() . '/inc/customizer.php';

/* Social Custom Widgets */
require get_template_directory() . '/inc/custom-widgets/social-profile.php';

/* get-started file. */
require get_template_directory() . '/inc/get-started/get-started.php';
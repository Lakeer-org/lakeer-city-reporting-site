<?php
/**
 * VW School Education Theme Customizer
 *
 * @package VW School Education
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function vw_school_education_customize_register( $wp_customize ) {

	//add home page setting pannel
	$wp_customize->add_panel( 'vw_school_education_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'VW Settings', 'vw-school-education' ),
	    'description' => __( 'Description of what this panel does.', 'vw-school-education' ),
	) );

	$wp_customize->add_section( 'vw_school_education_left_right', array(
    	'title'      => __( 'General Settings', 'vw-school-education' ),
		'priority'   => 30,
		'panel' => 'vw_school_education_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('vw_school_education_theme_options',array(
        'default' => __('Right Sidebar','vw-school-education'),
        'sanitize_callback' => 'vw_school_education_sanitize_choices'	        
	));
	$wp_customize->add_control('vw_school_education_theme_options',array(
        'type' => 'radio',
        'label' => __('Do you want this section','vw-school-education'),
        'section' => 'vw_school_education_left_right',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','vw-school-education'),
            'Right Sidebar' => __('Right Sidebar','vw-school-education'),
            'One Column' => __('One Column','vw-school-education'),
            'Three Columns' => __('Three Columns','vw-school-education'),
            'Four Columns' => __('Four Columns','vw-school-education'),
            'Grid Layout' => __('Grid Layout','vw-school-education')
        ),
	)   );
    
	//Topbar section
	$wp_customize->add_section('vw_school_education_topbar',array(
		'title'	=> __('Topbar Section','vw-school-education'),
		'description'	=> __('Add TopBar Content here','vw-school-education'),
		'priority'	=> null,
		'panel' => 'vw_school_education_panel_id',
	));
	
	$wp_customize->add_setting('vw_school_education_location_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_school_education_location_text',array(
		'label'	=> __('Add Location Text','vw-school-education'),
		'section'	=> 'vw_school_education_topbar',
		'setting'	=> 'vw_school_education_location_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_school_education_address',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_school_education_address',array(
		'label'	=> __('Add Location','vw-school-education'),
		'section'	=> 'vw_school_education_topbar',
		'setting'	=> 'vw_school_education_address',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_school_education_contact',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_school_education_contact',array(
		'label'	=> __('Add Contact Details','vw-school-education'),
		'section'	=> 'vw_school_education_topbar',
		'setting'	=> 'vw_school_education_contact',
		'type'		=> 'text'
	));	

	$wp_customize->add_setting('vw_school_education_email',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_school_education_email',array(
		'label'	=> __('Add Email Address','vw-school-education'),
		'section'	=> 'vw_school_education_topbar',
		'setting'	=> 'vw_school_education_email',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_school_education_day',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_school_education_day',array(
		'label'	=> __('Add Day','vw-school-education'),
		'section'	=> 'vw_school_education_topbar',
		'setting'	=> 'vw_school_education_day',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_school_education_time',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_school_education_time',array(
		'label'	=> __('Add Time','vw-school-education'),
		'section'	=> 'vw_school_education_topbar',
		'setting'	=> 'vw_school_education_time',
		'type'		=> 'text'
	));

	//Slider
	$wp_customize->add_section( 'vw_school_education_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'vw-school-education' ),
		'priority'   => null,
		'panel' => 'vw_school_education_panel_id'
	) );

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'vw_school_education_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'absint'
		) );
		$wp_customize->add_control( 'vw_school_education_slider_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'vw-school-education' ),
			'section'  => 'vw_school_education_slidersettings',
			'type'     => 'dropdown-pages'
		) );
	}

	//Welcome Section
	$wp_customize->add_section('vw_school_education_welcome_section',array(
		'title'	=> __('Welcome Section','vw-school-education'),
		'description'	=> __('Add Welcome sections below.','vw-school-education'),
		'panel' => 'vw_school_education_panel_id',
	));

	$post_list = get_posts();
	$i = 0;
	foreach($post_list as $post){
		$posts[$post->post_title] = $post->post_title;
	}

	$wp_customize->add_setting('vw_school_education_welcome_post',array(
		'sanitize_callback' => 'vw_school_education_sanitize_choices',
	));
	$wp_customize->add_control('vw_school_education_welcome_post',array(
		'type'    => 'select',
		'choices' => $posts,
		'label' => __('Select post','vw-school-education'),
		'section' => 'vw_school_education_welcome_section',
	));

	//Footer Text
	$wp_customize->add_section('vw_school_education_footer',array(
		'title'	=> __('Footer','vw-school-education'),
		'description'=> __('This section will appear in the footer','vw-school-education'),
		'panel' => 'vw_school_education_panel_id',
	));	
	
	$wp_customize->add_setting('vw_school_education_footer_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_school_education_footer_text',array(
		'label'	=> __('Copyright Text','vw-school-education'),
		'section'=> 'vw_school_education_footer',
		'setting'=> 'vw_school_education_footer_text',
		'type'=> 'text'
	));	
}

add_action( 'customize_register', 'vw_school_education_customize_register' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class VW_School_Education_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'VW_School_Education_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new VW_School_Education_Customize_Section_Pro(
				$manager,
				'example_1',
				array(
					'priority'   => 9,
					'title'    => esc_html__( 'VW School Pro', 'vw-school-education' ),
					'pro_text' => esc_html__( 'Upgrade Pro', 'vw-school-education' ),
					'pro_url'  => esc_url('https://www.vwthemes.com/themes/premium-school-wordpress-theme/'),
				)
			)
		);
		// Register sections.
		$manager->add_section(
			new VW_School_Education_Customize_Section_Pro(
				$manager,
				'example_2',
				array(
					'priority'   => 9,
					'title'    => esc_html__( 'Documentation', 'vw-school-education' ),
					'pro_text' => esc_html__( 'Docs', 'vw-school-education' ),
					'pro_url'  => admin_url('themes.php?page=vw_school_education_guide'),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'vw-school-education-customize-controls', trailingslashit( get_template_directory_uri() ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'vw-school-education-customize-controls', trailingslashit( get_template_directory_uri() ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
VW_School_Education_Customize::get_instance();
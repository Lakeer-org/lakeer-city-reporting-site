<?php
//about theme info
add_action( 'admin_menu', 'vw_school_education_gettingstarted' );
function vw_school_education_gettingstarted() {    	
	add_theme_page( esc_html__('About VW School Theme', 'vw-school-education'), esc_html__('About VW School Lite', 'vw-school-education'), 'edit_theme_options', 'vw_school_education_guide', 'vw_school_education_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function vw_school_education_admin_theme_style() {
   wp_enqueue_style( 'vw-school-education-font', vw_school_education_admin_font_url(), array() );
   wp_enqueue_style('custom-admin-style', get_template_directory_uri() . '/inc/get-started/get-started.css');
   wp_enqueue_script('tabs', get_template_directory_uri() . '/inc/get-started/js/tab.js');
}
add_action('admin_enqueue_scripts', 'vw_school_education_admin_theme_style');

// Theme Font URL
function vw_school_education_admin_font_url() {
	$font_url = '';
	$font_family = array();
	$font_family[] = 'Muli:300,400,600,700,800,900';

	$query_args = array(
		'family'	=> urlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

//guidline for about theme
function vw_school_education_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'vw-school-education' );
?>

<div class="wrapper-info">
    <div class="col-left">
    	<h2><?php esc_html_e( 'Welcome to VW School Theme', 'vw-school-education' ); ?> <span class="version">Version: <?php echo esc_html($theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','vw-school-education'); ?></p>
    </div>
    <div class="col-right">
    	<div class="logo">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/final-logo.png" alt="" />
		</div>
		<div class="update-now">
			<h4><?php esc_html_e('Buy VW School at 10% Discount','vw-school-education'); ?></h4>
			<h4><?php esc_html_e('Use Coupon','vw-school-education'); ?> ( <span><?php esc_html_e('vwten2018','vw-school-education'); ?></span> ) </h4>
			<div class="info-link">
				<a href="<?php echo esc_url( VW_SCHOOL_EDUCATION_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'vw-school-education' ); ?></a>
			</div>
		</div>
    </div>

    <div class="tab-sec">
		<div class="tab">
		  <button class="tablinks" onclick="openCity(event, 'theme_lite')"><?php esc_html_e( 'Getting Started', 'vw-school-education' ); ?></button>		  
		  <button class="tablinks" onclick="openCity(event, 'theme_pro')"><?php esc_html_e( 'Get Premium', 'vw-school-education' ); ?></button>
		  <button class="tablinks" onclick="openCity(event, 'free_pro')"><?php esc_html_e( 'Support', 'vw-school-education' ); ?></button>
		</div>

		<!-- Tab content -->
		<div id="theme_lite" class="tabcontent open">
			<h3><?php esc_html_e( 'Lite Theme Information', 'vw-school-education' ); ?></h3>
			<hr class="h3hr">
		  	<p><?php esc_html_e('VW School Education is an interesting and engaging WordPress theme for preschools, kindergartens, elementary and primary schools, secondary schools, colleges, training centres and educational institutes. It can be used by universities, training academies, educational websites, e-learning portals, coaching classes, tuition centres and all other dealing with providing teaching and education. It is a perfect theme for educational children activities. Whether you are operating a small kindergarten or a multi-course college, this theme will be handy to use for both purposes. Being responsive, it looks beautiful on mobile, tablet and other devices of varying screen sizes. Third party plugin support makes it extensive in use. The VW School Education theme can be customized to make small changes. It is SEO-friendly, translation ready, cross-browser compatible and retina ready theme. Clean and secure coding makes it less vulnerable to security threats. Use of shortcodes is done to embed video, audio, columns etc. with utmost ease. It loads faster giving higher rank to your site. The user-friendly interface of front and back end will make using site easier for you as well as your customers. Banners are screen size sliders make it all the more attractive. Use this professional theme for attracting maximum visitors.','vw-school-education'); ?></p>
		  	<div class="col-left-inner">
		  		<h4><?php esc_html_e( 'Theme Documentation', 'vw-school-education' ); ?></h4>
				<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'vw-school-education' ); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_SCHOOL_EDUCATION_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'vw-school-education' ); ?></a>
				</div>
				<hr>
				<h4><?php esc_html_e('Theme Customizer', 'vw-school-education'); ?></h4>
				<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'vw-school-education'); ?></p>
				<div class="info-link">
					<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'vw-school-education'); ?></a>
				</div>
				<hr>				
				<h4><?php esc_html_e('Having Trouble, Need Support?', 'vw-school-education'); ?></h4>
				<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'vw-school-education'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_SCHOOL_EDUCATION_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'vw-school-education'); ?></a>
				</div>
				<hr>
				<h4><?php esc_html_e('Reviews & Testimonials', 'vw-school-education'); ?></h4>
				<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'vw-school-education'); ?>  </p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_SCHOOL_EDUCATION_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'vw-school-education'); ?></a>
				</div>
		  		<div class="link-customizer">
					<h3><?php esc_html_e( 'Link to customizer', 'vw-school-education' ); ?></h3>
					<hr class="h3hr">
					<div class="first-row">
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-format-image"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','vw-school-education'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-admin-links"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_school_education_topbar') ); ?>" target="_blank"><?php esc_html_e('Topbar Section','vw-school-education'); ?></a>
							</div>
						</div>
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-images-alt"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_school_education_slidersettings') ); ?>" target="_blank"><?php esc_html_e('Slider Settings','vw-school-education'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-editor-table"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_school_education_welcome_section') ); ?>" target="_blank"><?php esc_html_e('Welcome Section','vw-school-education'); ?></a>
							</div>
						</div>
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-welcome-write-blog"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_school_education_left_right') ); ?>" target="_blank"><?php esc_html_e('Blog Layout','vw-school-education'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_school_education_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','vw-school-education'); ?></a>
							</div>
						</div>
					</div>
				</div>
		  	</div>
			<div class="col-right-inner">
				<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','vw-school-education'); ?></h3>
			  	<hr class="h3hr">
				<p><?php esc_html_e('Follow these instructions to setup Home page.','vw-school-education'); ?></p>
                <ul>
                	<li><?php esc_html_e('1. Create a Page to set template:  Go to ','vw-school-education'); ?>
                  	<b><?php esc_html_e('Dashboard &gt;&gt; Pages &gt;&gt; Add New Page','vw-school-education'); ?></b>.
                  	<p><?php esc_html_e('Label it "home" or anything as you wish. Then select template "home-page" from template dropdown.','vw-school-education'); ?></p></li>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/home-page-template.png" alt="" />
                  	<p></p><span class="strong"><?php esc_html_e('2. Set the front page:','vw-school-education'); ?></span><?php esc_html_e(' Go to ','vw-school-education'); ?>
				  	<b><?php esc_html_e(' Settings -&gt; Reading --&gt; Set the front page display static page to home page ','vw-school-education'); ?></b></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/set-front-page.png" alt="" />
                  	<p><?php esc_html_e(' Once you are done with this, you can see all the demo content on front page. ','vw-school-education'); ?></p>
                </ul>
		  	</div>
		</div>	

		<div id="theme_pro" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'vw-school-education' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('School WordPress theme is an aesthetically impressive, knowledge shedding and engaging premium theme. Education must be entertaining and this thought is well maintained while designing this theme. It caters fast and flexible development of attractive and useful website without writing a single line of code. The theme can be used for multiple purposes like elementary schools, preschools, kindergartens, schools, colleges, universities, coaching centres, training academies and institutes, e-learning portals, children educational sites and the list goes on. Access the site from any device and any browser since it is responsive and cross-browser compatible. It has a user-friendly interface of front as well as back end. The unique design makes your site stand apart your competitors site. It allows hassle-free navigation through the site which compels visitors to explore more site content. Become the lighthouse of education for kids as well as adult and make them learn more and more through your site.','vw-school-education'); ?></p>
		    	<div class="pro-links">
			    	<a href="<?php echo esc_url( VW_SCHOOL_EDUCATION_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'vw-school-education'); ?></a>
					<a href="<?php echo esc_url( VW_SCHOOL_EDUCATION_BUY_NOW ); ?>"><?php esc_html_e('Buy Pro', 'vw-school-education'); ?></a>
					<a href="<?php echo esc_url( VW_SCHOOL_EDUCATION_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'vw-school-education'); ?></a>
				</div>
		    </div>
		    <div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/Responsive-Image.png" alt="" />
		    </div>
		    <div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'vw-school-education' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'vw-school-education'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'vw-school-education'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'vw-school-education'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'vw-school-education'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'vw-school-education'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'vw-school-education'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Slider Settings', 'vw-school-education'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Number of Slides', 'vw-school-education'); ?></td>
								<td class="table-img"><?php esc_html_e('4', 'vw-school-education'); ?></td>
								<td class="table-img"><?php esc_html_e('Unlimited', 'vw-school-education'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'vw-school-education'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'vw-school-education'); ?></td>
								<td class="table-img"><?php esc_html_e('6', 'vw-school-education'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'vw-school-education'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'vw-school-education'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'vw-school-education'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Contact us Page Template', 'vw-school-education'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'vw-school-education'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Blog Templates & Layout', 'vw-school-education'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'vw-school-education'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Page Templates & Layout', 'vw-school-education'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('2(Left/Right Sidebar)', 'vw-school-education'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Full Documentation', 'vw-school-education'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Latest WordPress Compatibility', 'vw-school-education'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Woo-Commerce Compatibility', 'vw-school-education'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support 3rd Party Plugins', 'vw-school-education'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Secure and Optimized Code', 'vw-school-education'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Exclusive Functionalities', 'vw-school-education'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Enable / Disable', 'vw-school-education'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Google Font Choices', 'vw-school-education'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Gallery', 'vw-school-education'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Simple & Mega Menu Option', 'vw-school-education'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'vw-school-education'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Shortcodes', 'vw-school-education'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'vw-school-education'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Premium Membership', 'vw-school-education'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Budget Friendly Value', 'vw-school-education'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Priority Error Fixing', 'vw-school-education'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Custom Feature Addition', 'vw-school-education'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('All Access Theme Pass', 'vw-school-education'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Seamless Customer Support', 'vw-school-education'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( VW_SCHOOL_EDUCATION_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'vw-school-education'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="free_pro" class="tabcontent">
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-star-filled"></span><?php esc_html_e('Pro Version', 'vw-school-education'); ?></h4>
				<p> <?php esc_html_e('To gain access to extra theme options and more interesting features, upgrade to pro version.', 'vw-school-education'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_SCHOOL_EDUCATION_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'vw-school-education'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-cart"></span><?php esc_html_e('Pre-purchase Queries', 'vw-school-education'); ?></h4>
				<p> <?php esc_html_e('If you have any pre-sale query, we are prepared to resolve it.', 'vw-school-education'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_SCHOOL_EDUCATION_CONTACT ); ?>" target="_blank"><?php esc_html_e('Question', 'vw-school-education'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">		  		
		  		<h4><span class="dashicons dashicons-admin-customizer"></span><?php esc_html_e('Child Theme', 'vw-school-education'); ?></h4>
				<p> <?php esc_html_e('For theme file customizations, make modifications in the child theme and not in the main theme file.', 'vw-school-education'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_SCHOOL_EDUCATION_CHILD_THEME ); ?>" target="_blank"><?php esc_html_e('About Child Theme', 'vw-school-education'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-admin-comments"></span><?php esc_html_e('Frequently Asked Questions', 'vw-school-education'); ?></h4>
				<p> <?php esc_html_e('We have gathered top most, frequently asked questions and answered them for your easy understanding. We will list down more as we get new challenging queries. Check back often.', 'vw-school-education'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_SCHOOL_EDUCATION_FAQ ); ?>" target="_blank"><?php esc_html_e('View FAQ','vw-school-education'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-sos"></span><?php esc_html_e('Post-purchase Queries', 'vw-school-education'); ?></h4>
				<p> <?php esc_html_e('If you have any queries after purchase, you can contact us. We are eveready to help you out.', 'vw-school-education'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url(VW_SCHOOL_EDUCATION_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Contact Us', 'vw-school-education'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-media-text"></span><?php esc_html_e('Theme Demo Content', 'vw-school-education'); ?></h4>
				<p> <?php esc_html_e('We are providing the demo content file within the theme folder.  You will require an importer plugin to import the demo content.', 'vw-school-education'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_SCHOOL_EDUCATION_DEMO_DATA ); ?>" target="_blank"><?php esc_html_e('Demo Content', 'vw-school-education'); ?></a>
				</div>
		  	</div>
		</div>
	</div>
</div>
<?php } ?>
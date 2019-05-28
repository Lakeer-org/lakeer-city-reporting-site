<?php /*?><div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','vw-school-education'); ?></a></div><?php */ ?>  
<div id="header" class="menubar">
  <div class="container text-right">
    <div class="row bg-home1 mr-0">
      <div class="col-lg-12 col-md-12 nav" style="position: fixed;top: 2vh;left: 2vh;">
        <div class = "header_image pl-5">
	         <a class="navbar-brand" href="#">
	           <img id="logo_image" style="max-height: 50px;" src="<?php echo site_url();?>/wp-content/uploads/2019/02/logo.png" alt="">
	         </a>
        </div>
        <?php /*wp_nav_menu( array('theme_location'  => 'primary') );*/ ?>
      </div>
      <div class="col-lg-3 col-md-3 d-none">
        <div class="socialbox">
          <?php dynamic_sidebar('social-icon') ?>
        </div>
      </div>
      <div class="search-box col-md-1 col-sm-1 d-none">
        <span><i class="fas fa-search"></i></span>
      </div>
    </div>
    <div class="serach_outer d-none">
      <div class="closepop"><i class="far fa-window-close"></i></div>
      <div class="serach_inner">
        <?php get_search_form(); ?>
      </div>
    </div>
  </div>
</div>
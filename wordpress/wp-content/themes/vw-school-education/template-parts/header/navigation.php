<?php /*?><div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','vw-school-education'); ?></a></div><?php */ ?>  
<div id="header" class="menubar">
  <div class="container text-right">
    <div class="row bg-home1 mr-0">
      <div class="col-lg-12 col-md-12 nav">
        <div class = "header_image pl-5 d-none">
	         <a class="navbar-brand" href="#">
	           <img id="logo_image" style="max-height: 50px;" src="<?php echo site_url();?>/wp-content/uploads/2019/02/logo.png" alt="">
	         </a>
        </div>
        <?php ?><nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		  <a class="navbar-brand" href="#">
		  	<img id="logo_image" style="max-height: 50px;" src="<?php echo site_url();?>/wp-content/uploads/2019/02/logo.png" alt="">
		  </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
				<li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>">Home</a></li>
				<li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/about">About</a></li>
				<?php if(get_field("menu1label") != ""){?>
				<li class="nav-item"><a class="nav-link" href="<?php echo get_field("menu1selectpage");?>"><?php echo get_field("menu1label");?></a></li>
				<?php }?>
				<li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>/contact">Contact</a></li>
		    </ul>
		  </div>
		</nav>
        <?php  ?>
        <?php //wp_nav_menu( array('theme_location'  => 'primary') ); ?>
        
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
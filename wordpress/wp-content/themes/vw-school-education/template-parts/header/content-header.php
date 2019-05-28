<div id="top-bar" class="d-none">
  <div class="container">
    <div class="row m-0">
      <div class="logo col-lg-3 col-md-3">
        <?php if( has_custom_logo() ){ vw_school_education_the_custom_logo();
        }else{ ?>
          <h1 class="text-sm-center text-md-left"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
          <?php $description = get_bloginfo( 'description', 'display' );
          if ( $description || is_customize_preview() ) : ?>
            <p class="site-description"><?php echo esc_html($description); ?></p>
        <?php endif; } ?>
      </div>
      <div class="col-lg-9 col-md-9">
        <div class="row m-0">
          <div class="col-md-4">
            <div class="row">
              <?php if ( get_theme_mod('vw_school_education_location_text','') != "" ) {?>
                <div class="col-md-2 p-0">
                  <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="col-md-8">
                  <?php if ( get_theme_mod('vw_school_education_location_text','') != "" ) {?>
                    <p class="email"><?php echo esc_html( get_theme_mod('vw_school_education_location_text',__('Your address goes here','vw-school-education')) ); ?></p>
                  <?php }?>
                  <?php if ( get_theme_mod('vw_school_education_address','') != "" ) {?>
                    <p class="email"><?php echo esc_html( get_theme_mod('vw_school_education_address',__('123 Dummy Street, USA','vw-school-education')) ); ?></p>
                  <?php }?>
                </div>
              <?php }?>
            </div>
          </div>
          <div class="col-md-4">
            <div class="row">
              <?php if ( get_theme_mod('vw_school_education_contact','') != "" ) {?>
                <div class="col-md-2 p-0">
                  <i class="fas fa-mobile-alt"></i> 
                </div>
                <div class="col-md-8">
                  <?php if ( get_theme_mod('vw_school_education_contact','') != "" ) {?>
                    <p class="call"><?php echo esc_html( get_theme_mod('vw_school_education_contact',__('+00 1234-5678-90','vw-school-education') )); ?></p>
                  <?php }?>
                  <?php if ( get_theme_mod('vw_school_education_email','') != "" ) {?>
                    <p class="call"><?php echo esc_html( get_theme_mod('vw_school_education_email',__('info@example.com','vw-school-education') )); ?></p>
                  <?php }?>
                </div>
              <?php }?>
            </div>
          </div>
          <div class="col-md-4">
            <div class="row">
              <?php if ( get_theme_mod('vw_school_education_day','') != "" ) {?>
                <div class="col-md-2 p-0">
                  <i class="far fa-clock"></i>
                </div>
                <div class="col-md-8">
                  <?php if ( get_theme_mod('vw_school_education_day','') != "" ) {?>
                    <p class="call"><?php echo esc_html( get_theme_mod('vw_school_education_day',__('Monday To Friday','vw-school-education') )); ?></p>
                  <?php }?>
                  <?php if ( get_theme_mod('vw_school_education_time','') != "" ) {?>
                    <p class="call"><?php echo esc_html( get_theme_mod('vw_school_education_time',__('10:00 AM To 11:30 PM','vw-school-education') )); ?></p>
                  <?php }?>
                </div>
              <?php }?>
            </div>
          </div>        
        </div>
      </div>      
    </div>
  </div>
</div>
<?php
/**
 * The template for displaying image attachments.
 *
 * @package VW School Education
 */

get_header(); ?>

<div class="container">
  <div class="middle-align">
    <?php
      $theme_lay = get_theme_mod( 'vw_school_education_theme_options','Right Sidebar');
      if($theme_lay == 'Left Sidebar'){ ?>
        <div class="row">
          <div class="col-md-4 col-sm-4" id="sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
          <div id="our-services" class="services col-md-8 col-sm-8">
                    
            <?php if ( have_posts() ) :
              /* Start the Loop */
                
                while ( have_posts() ) : the_post();

                  get_template_part( 'template-parts/image-layout' ); 
                
                endwhile;

                else :

                  get_template_part( 'no-results', 'archive' ); 

                endif; 
            ?>
            <div class="navigation">
              <?php
                  // Previous/next page navigation.
                  the_posts_pagination( array(
                      'prev_text'          => __( 'Previous page', 'vw-school-education' ),
                      'next_text'          => __( 'Next page', 'vw-school-education' ),
                      'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-school-education' ) . ' </span>',
                  ) );
              ?>
                <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
    <?php }else if($theme_lay == 'Right Sidebar'){ ?>
        <div class="row">
          <div id="our-services" class="services col-md-8 col-sm-8">
                      
            <?php if ( have_posts() ) :
              /* Start the Loop */
                
                while ( have_posts() ) : the_post();

                  get_template_part( 'template-parts/image-layout' ); 
                
                endwhile;

                else :

                  get_template_part( 'no-results', 'archive' ); 

                endif; 
            ?>
            <div class="navigation">
              <?php
                  // Previous/next page navigation.
                  the_posts_pagination( array(
                      'prev_text'          => __( 'Previous page', 'vw-school-education' ),
                      'next_text'          => __( 'Next page', 'vw-school-education' ),
                      'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-school-education' ) . ' </span>',
                  ) );
              ?>
                <div class="clearfix"></div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4" id="sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
        </div>
    <?php }else if($theme_lay == 'One Column'){ ?>
        <div id="our-services" class="services">
                    
          <?php if ( have_posts() ) :
            /* Start the Loop */
              
              while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/image-layout' ); 
              
              endwhile;

              else :

                get_template_part( 'no-results', 'archive' ); 

              endif; 
          ?>
          <div class="navigation">
            <?php
                // Previous/next page navigation.
                the_posts_pagination( array(
                    'prev_text'          => __( 'Previous page', 'vw-school-education' ),
                    'next_text'          => __( 'Next page', 'vw-school-education' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-school-education' ) . ' </span>',
                ) );
            ?>
              <div class="clearfix"></div>
          </div>
        </div>
    <?php }else if($theme_lay == 'Three Columns'){ ?>
        <div class="row">
          <div class="col-md-4 col-sm-4" id="sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
          <div id="our-services" class="services col-md-8 col-sm-8">
                      
            <?php if ( have_posts() ) :
              /* Start the Loop */
                
                while ( have_posts() ) : the_post();

                  get_template_part( 'template-parts/image-layout' ); 
                
                endwhile;

                else :

                  get_template_part( 'no-results', 'archive' ); 

                endif; 
            ?>
            <div class="navigation">
              <?php
                  // Previous/next page navigation.
                  the_posts_pagination( array(
                      'prev_text'          => __( 'Previous page', 'vw-school-education' ),
                      'next_text'          => __( 'Next page', 'vw-school-education' ),
                      'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-school-education' ) . ' </span>',
                  ) );
              ?>
                <div class="clearfix"></div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4" id="sidebar"><?php dynamic_sidebar('sidebar-2');?></div>
        </div>
    <?php }else if($theme_lay == 'Four Columns'){ ?>
        <div class="row">
          <div class="col-md-4 col-sm-4" id="sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
          <div id="our-services" class="services col-md-8 col-sm-8">
                      
            <?php if ( have_posts() ) :
              /* Start the Loop */
                
                while ( have_posts() ) : the_post();

                  get_template_part( 'template-parts/image-layout' ); 
                
                endwhile;

                else :

                  get_template_part( 'no-results', 'archive' ); 

                endif; 
            ?>
            <div class="navigation">
              <?php
                  // Previous/next page navigation.
                  the_posts_pagination( array(
                      'prev_text'          => __( 'Previous page', 'vw-school-education' ),
                      'next_text'          => __( 'Next page', 'vw-school-education' ),
                      'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-school-education' ) . ' </span>',
                  ) );
              ?>
                <div class="clearfix"></div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4" id="sidebar"><?php dynamic_sidebar('sidebar-2');?></div>
          <div class="col-md-4 col-sm-4" id="sidebar"><?php dynamic_sidebar('sidebar-3');?></div>
        </div>
    <?php }else if($theme_lay == 'Grid Layout'){ ?>
        <div class="row">
          <div id="our-services" class="services col-md-9 col-sm-9">
            <div class="row">
              <?php if ( have_posts() ) :
                /* Start the Loop */
                  
                  while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/image-layout' ); 
                  
                  endwhile;

                  else :

                    get_template_part( 'no-results', 'archive' ); 

                  endif; 
              ?>
            </div>
            <div class="navigation">
              <?php
                  // Previous/next page navigation.
                  the_posts_pagination( array(
                      'prev_text'          => __( 'Previous page', 'vw-school-education' ),
                      'next_text'          => __( 'Next page', 'vw-school-education' ),
                      'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-school-education' ) . ' </span>',
                  ) );
              ?>
                <div class="clearfix"></div>
            </div>
          </div>
          <div class="col-md-3 col-sm-3" id="sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
        </div>
    <?php } ?>
    <div class="clearfix"></div>
  </div>
</div>

<?php get_footer(); ?>
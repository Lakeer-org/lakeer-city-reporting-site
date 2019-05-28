<?php
/**
 * Template Name: Custom Home
 */

get_header(); ?>

<?php do_action( 'vw_school_education_before_slider' ); ?>

<section id="slider">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
    <?php $pages = array();
      for ( $count = 1; $count <= 3; $count++ ) {
        $mod = intval( get_theme_mod( 'vw_school_education_slider_page' . $count ));
        if ( 'page-none-selected' != $mod ) {
          $pages[] = $mod;
        }
      }
      if( !empty($pages) ) :
        $args = array(
          'post_type' => 'page',
          'post__in' => $pages,
          'orderby' => 'post__in'
        );
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
          $i = 1;
    ?>  

    <div class="carousel-inner" role="listbox">
      <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
        <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
          <img src="<?php the_post_thumbnail_url('full'); ?>"/>
          <div class="carousel-caption">
            <div class="inner_carousel">
              <h2><?php the_title(); ?></h2>
              <p><?php the_excerpt(); ?></p>
              <div class="more-btn">              
                <a href="<?php the_permalink(); ?>"><?php esc_html_e('READ MORE','vw-school-education'); ?></a>
              </div>
            </div>
          </div>
        </div>
      <?php $i++; endwhile; 
      wp_reset_postdata();?>
    </div>
    <?php else : ?>
        <div class="no-postfound"></div>
      <?php endif;
    endif;?>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
    </a>
  </div>  
  <div class="clearfix"></div>
</section> 

<?php do_action( 'vw_school_education_after_slider' ); ?>

<section id="welcome-sec">
  <div class="container">
    <div class="row">
      <?php
        $args = array( 'name' => get_theme_mod('vw_school_education_welcome_post',''));
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
          while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="col-md-9 col-sm-9">
              <h3><?php the_title(); ?></h3>
              <p><?php the_excerpt(); ?></p>
              <div class ="wel-btn">
                <a href="<?php esc_url( the_permalink() ); ?>"><?php esc_html_e('LEARN MORE','vw-school-education'); ?></a>
              </div>
            </div>
            <div class="col-md-3 col-sm-3">
              <div class="wel-image">
                <img src="<?php the_post_thumbnail_url('full'); ?>"/>
              </div>
            </div>
          <?php endwhile; 
          wp_reset_postdata();?>
          <?php else : ?>
            <div class="no-postfound"></div>
          <?php
      endif; ?>
    </div>
  </div>
</section>

<?php do_action( 'vw_school_education_after_welcome' ); ?>

<div id="content-vw" class="container">
  <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>
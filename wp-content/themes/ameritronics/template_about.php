<?php 
/*

Template Name: About

*/


get_header();


?>
    <!-- About-banner -->
    <section class="about-page-banner" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
        <div class="banner-text">
            <div class="container">
                <h2><?php the_title(); ?></h2>
            </div>
        </div>
    </section>
    <!-- About-banner -->

<!-- About-text -->
<section class="welcome-about">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="wapper">
          <h2> <?php the_field('about_title'); ?> </h2> 
          <?php the_field('about_content'); ?>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="wapper">
          <div class="fig-holder welcome-side-img">
            <figure style="background-image: url(<?php the_field('about_image'); ?>);">
            </figure>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- About-text -->

<!-- Why Choose us -->
<section class="why-chose-about">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-12">
        <div class="wapper">
          <div class="fig-holder">
            <figure style="background-image: url(<?php the_field('why_choose_us_image'); ?>);"></figure>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="wapper">
          <h2> <?php the_field('why_choose_us_title'); ?> </h2>
          <p> <?php the_field('why_choose_us_content'); ?> </p>
          <ul> 
            <?php if( have_rows('why_choose_us_box') ):
                while( have_rows('why_choose_us_box') ) : the_row(); ?>
                 <li>
               <span><img src="<?php the_sub_field('icon'); ?>" alt=""></span> 
              <h3> <?php the_sub_field('title'); ?> </h3>
              <p> <?php the_sub_field('content'); ?> </p>
            </li> 
            <?php
             endwhile;
             endif;
                ?> 
            </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Why Choose us -->

<!-- About Expart -->
<section class="out-experts">
    <div class="container text-center">
        <h2><?php the_field('our_expert_title'); ?></h2>
        <p> <?php the_field('our_expert_content'); ?></p>
        <div class="row">
            <?php if( have_rows('our_expert_box') ):
                 while( have_rows('our_expert_box') ) : the_row(); ?>
                 <div class="col-lg-3">
                  
                          <div class="wapper">
                              <div class="fig-holder">
                                  <figure style="background-image: url(<?php the_sub_field('expert_image'); ?>);"></figure>
                              </div>
                              <div class="expart-name">
                                  <div class="wapper">
                                    <h3><?php the_sub_field('expert_title') ;?></h3>
                                  </div>
                              </div>
                          </div>
                  </div>
                <?php
             endwhile;
             endif;
             ?>
             </div>
            </div>
        </section>

<!-- About Expart -->
 <?php get_footer(); ?>
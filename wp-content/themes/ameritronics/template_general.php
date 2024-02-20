<?php 



/** Template Name: General Page */



get_header();  ?>


<!-- About-banner -->

<section class="about-page-banner">

  <div class="banner-text">

    <div class="container">

      <h2><?php the_title(); ?></h2>

    </div>

  </div>

</section>

    <!-- Contact Us Main -->

    <section class="contact-us-main">

        <div class="container">

            <div class="row">

                <p><?php the_content() ; ?></p>
                
            </div>

        </div>

    </section>

    <!-- Contact Us Main -->









<?php get_footer(); ?>
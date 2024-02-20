<?php 



/** Template Name: Contact */



get_header();  ?>



 <!-- About-banner -->
 <section class="about-page-banner" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
        <div class="banner-text">
            <div class="container">
                <h2><?php the_title(); ?></h2>
            </div>
        </div>
    </section>
    <!-- About-banner -->


    <!-- Contact Us Main -->

    <section class="contact-us-main">

        <div class="container">

            <div class="row">

                <div class="col-lg-6 col-md-12 p-0">

                    <div class="wapper">

                        <div class="map-holder">

                            <?php the_field('map'); ?>

                        </div>

                    </div>

                </div>

                <div class="col-lg-6 col-md-12 p-0">

                    <div class="wapper">

                        <div class="contacts_holder">

                            <h2>Get in Touch</h2>

                            <?php  echo do_shortcode('[contact-form-7 id="d9321c4" title="Contact Page Form"]'); ?> 

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Contact Us Main -->









<?php get_footer(); ?>
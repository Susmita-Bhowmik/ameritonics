<?php 

/** Template Name: Checkout Page */



get_header();

?>

    <!-- About-text -->
    <section class="welcome-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                 <?= do_shortcode('[woocommerce_checkout]') ;?>
                   
                
            </div>
        </div>
    </section>
    <!-- About-text -->
<?php get_footer(); ?>
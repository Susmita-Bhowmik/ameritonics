<?php 
error_reporting(0);

/** Template Name: Product category */

get_header();

do_action( 'woocommerce_before_shop_loop' );

?>

<?php 
if(isset($_GET['category'])){
$cat_slug = ': '.$_GET['category'];  }?>

<section class="about-page-banner" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
    <div class="banner-text">
        <div class="container">
          <h2 style="text-transform: capitalize;">Category  <?php echo $cat_slug  ; ?></h2>
        </div>
    </div>
</section>

<section class="welcome-about">
        <div class="container">
        <div class="row">
            <?php

            $args = array( 'post_type' => 'product','product_cat'=> $cat_slug, 'posts_per_page' => -1,'order' => 'DESC' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); 
            $product_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
            $id  = get_the_ID();
            ?>
            <div class="col-md-3">
                <div class="elements">
                    <div class="shop_now_box">
                        <a href="<?php the_permalink(); ?>"><figure style="background-image: url(<?php echo $product_image[0] ;?>);"></figure></a>
                        <div class="text">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title() ; ?></a></h3>
                            <span class="price_main"><?php  echo $product->get_price_html(); ?></span>
                            <div class="extra_dtl">
                                <ul>
                                   
                                    <?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
                                    <!-- <li><a href="#"><i class="fa-solid fa-bag-shopping"></i>Buy</a></li>
                                    <li><a href="#"><i class="fa-solid fa-cart-shopping"></i>Cart</a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    </div>

                  </div>
                 
                           
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>

        </div>
      </div>
    </section>



<?php
get_footer(); ?>

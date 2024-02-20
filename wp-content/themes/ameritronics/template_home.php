<?php 

/** Template Name: Home */

get_header();?>

 <!-- Banner -->
 <section class="banner_main">
        <div class="banner_main_slider">
           <?php
                if( have_rows('home_slider') ):
                while( have_rows('home_slider') ) : the_row(); ?>
                <div class="elements">
                    <div class="fig_holder">
                        <figure style="background-image: url(<?php the_sub_field('banner_image'); ?>);"></figure>
                    </div>
                    <div class="banner_text">
                        <h1><?php the_sub_field('banner_title'); ?></h1>
                    </div>
                    <div class="btn_wapper">
                        <a href="<?php echo site_url('/products'); ?>" class="a_btn">Shop Now</a>
                    </div>
                </div>

                <?php
                    endwhile;
                    endif;
                ?>
            
            
        </div>
    </section>
    <!-- Banner -->

    <!-- Welcome -->
    <section class="welcome_main body_margin">
        <div class="container">
            <h2>Welcome</h2>
            <p>Solder Master Supply Company is a leading distributor of tools and supplies for electronic manufacturing.</p>
            <div class="welcome_slider">
            <?php
                $taxonomy     = 'product_cat';
                $orderby      = 'name';
                $show_count   = 0;      
                $pad_counts   = 0;     
                $hierarchical = 1;     
                $title        = '';
                $empty        = 0;

                $args = array(
                    'taxonomy'     => $taxonomy,
                    'orderby'      => $orderby,
                    'show_count'   => $show_count,
                    'pad_counts'   => $pad_counts,
                    'hierarchical' => $hierarchical,
                    'title_li'     => $title,
                    'hide_empty'   => $empty,
                );

            
                

                $all_categories = get_categories( $args );
                foreach ($all_categories as $cat) {
                    if($cat->slug != 'uncategorized') {
                        $category_id = $cat->term_id;
                
                
                ?>

                <div class="elements">
                    <div class="welcome_box_wapper">
                    <?php echo '<h3><a href="'. site_url('/products') .'?category='.$cat->slug.'">'.$cat->name.'</a></h3>'; ?>
                       
                        <div class="row">
                            <?php

                            $args = array( 'post_type' => 'product', 'posts_per_page' => 2, 'product_cat' =>  $cat->slug, 'order' => 'DESC' );
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post();
                            $product_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                            ?>
                            
                            <div class="col-md-6">
                                <div class="img_box">
                                    <a href="<?php the_permalink(); ?>"><figure style="background-image: url(<?php echo $product_image[0] ;?>);"></figure></a>
                                    <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                </div>
                            </div>
                            <?php endwhile; ?>
                            <?php wp_reset_query(); ?>

                            
                        </div>
                    </div>
                </div>
                <?php } } ?>
              
              
            </div>
        </div>
    </section>
    <!-- Welcome -->

    <!-- Shop Now -->
    <section class="shop_now_main_sec body_margin" style="background-image: url(<?php bloginfo('template_url'); ?>/img/shop-base-01.jpg);">
        <div class="container">
            <h2>Shop Now</h2>
            <div class="shopnow_slider_main">
            <?php

                $args = array( 'post_type' => 'product', 'posts_per_page' => -1,  'order' => 'DESC' );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
                $product_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                $product = wc_get_product();
                ?>

                <div class="elements">
                    <div class="shop_now_box">
                        <a href="<?php the_permalink(); ?>"><figure style="background-image: url(<?php echo $product_image[0] ;?>);"></figure></a>
                        <div class="text">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title() ; ?></a></h3>
                            <span class="price_main"><?php  echo $product->get_price_html(); ?></span>
                            <div class="extra_dtl">
                                <ul>
                                    <li><a href="<?php the_permalink(); ?>"><i class="fa-solid fa-eye"></i> View</a></li>
                                    <?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
                                    <!-- <li><a href="#"><i class="fa-solid fa-bag-shopping"></i>Buy</a></li>
                                    <li><a href="#"><i class="fa-solid fa-cart-shopping"></i>Cart</a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
                
            </div>
        </div>
        <div class="btn-wrap">
            <button class="slick-prev">Previous</button>
            <button class="slick-next">Next</button>
        </div>
        <div class="btn_wapper">
            <a href="<?= site_url('/shop'); ?>" class="a_btn">View All Products</a>
        </div>
    </section>
    <!-- Shop Now -->

    <!-- Subscribe  -->
    <section class="subscribe_main_index body_margin">
        <div class="container">
            <h2>Subscribe & Get 20% Off your First Purchase</h2>
            <form  id="newsletter_form">
            <div class="subscribe_form">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form_group">
                            <input type="email" name="user_email" id="user_email" placeholder="Enter your Email Address" required>
                            <button type="submit" name="submit" id="submit"  class="subscribe_btn">Subscription</button>
                        </div>
                    </div>
                </div>
            </div> 
        <div id="result_msg" class="mt-4"></div>

        </form>
        </div>
    </section>
    <!-- Subscribe  -->

    <!-- Ready to Help -->
    <section class="ready_help_main body_margin">
        <div class="container">
            <h2>Ready to Help</h2>
            <div class="ready_form_main">
            <?php  echo do_shortcode('[contact-form-7 id="53497e6" title="Ready To Help Form"]') ; ?>
            </div>
        </div>
    </section>
    <!-- Ready to Help -->
<?php get_footer(); ?>
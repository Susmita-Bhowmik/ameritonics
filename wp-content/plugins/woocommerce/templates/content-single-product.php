<?php
error_reporting(0);
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;
$product_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
$product_short_description = $product->get_short_description();

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
$id = get_the_id();

$terms = get_the_terms( $id, 'product_cat' );
foreach ($terms  as $term  ) {
            $product_cat_name = $term->name;
            $slug = $term->slug;
}

?>
<section class="product_dtl_main_sec body_margin">
        <div class="container">
            <p><b><a href="<?php echo home_url(); ?>">Home / </a></b> <a href="<?= site_url('/products') .'?category='.$slug; ?>"><?php echo $product_cat_name; ?></a> </p>
            
            
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
<div class="row">
	<div class="col-md-5">
                    <div class="product_dtl_main_slider">
                        <?php  
                            if($product->get_gallery_image_ids()){
                             $attachment_ids = $product->get_gallery_image_ids();
                             foreach( $attachment_ids as $attachment_id ) { 
                                
                            ?>
                        <div class="elements">
                            <div class="fig_holder">
                                <figure style="background-image: url(<?php echo $image_link = wp_get_attachment_url( $attachment_id ); ?>);"></figure>
                            </div>
                        </div>
                        <?php } }else{?>
                        <div class="elements">
                            <div class="fig_holder">
                                <figure style="background-image: url(<?php echo $product_image[0]; ?>);"></figure>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="product_dtl_bottom_slider">
                        <?php  
                             $attachment_ids = $product->get_gallery_image_ids();
                             foreach( $attachment_ids as $attachment_id ) { 
                                
                            ?>
                        <div class="elements">
                            <div class="fig_holder_bottom">
                                <figure style="background-image: url(<?php echo $image_link = wp_get_attachment_url( $attachment_id ); ?>);"></figure>
                            </div>
                        </div>
                        <?php } ?>
                        
                    </div>
                
   
	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	//do_action( 'woocommerce_before_single_product_summary' );
	?>
	</div>
	<div class="col-md-7">
	    <div class="heading">
                <!--<h4>PCB Holders   Adjustable Board Cradle   Printed Circuit Board Holding Fixture   Preheating Rack   PCB Slide Along</h4>-->
                
                <h2><?php the_title(); ?></h2>
                
                <h6><?php the_field('product_heading'); ?></h6>
                
            </div>
		<div class="main_dtl_text"> 
        <!--<h3>The Original "Transformers" at the Electronic Benchtop</h3>-->
        <?php echo $product->get_description();  ?>
        <p><?php echo  $product_short_description; ?></p>
		<div class="summary entry-summary">
			<?php
			/**
			 * Hook: woocommerce_single_product_summary.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 * @hooked WC_Structured_Data::generate_product_data() - 60
			 */
			do_action( 'woocommerce_single_product_summary' );
			?>
            
		</div>
	
	</div>
</div>
	</div>
</div>
</section>
	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	
	?>
</div>

<?php //do_action( 'woocommerce_after_single_product' ); ?>
 <!-- ABC Adjustable -->
   <section class="abc_adjustable_sec body_margin">
        <div class="container">
            <h2>Optional Accessories</h2>
            <div class="abc_slider_main">
            <?php
            $postid = get_the_ID();
            $terms = get_the_terms( $postid, 'product_cat' );
            foreach ($terms  as $term  ) {
            $product_cat_name = $term->name;
            $args = array( 'post_type' => 'product', 'posts_per_page' => -1, 'product_cat'=> $product_cat_name,  'order' => 'DESC' , 'post__not_in'=> array($postid),);
            
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
            $product = wc_get_product();
            $id = $product->get_id();
            $product_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
            $product_short_description = $product->get_short_description();
            ?>
                <div class="elements">
                    <div class="abc_slider_box">
                        <div class="row g-0">
	
                            <div class="col-md-12">
                                <div class="abc_text">
                                    <div class="heading">
                                        <h3>Model</h3>
                                    </div>
                                    <div class="text_wapper">
                                        <a href="<?php the_permalink(); ?>"><figure style="background-image: url(<?php echo $product_image[0]; ?>);"></figure></a>
                                        <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                                        <h4><?php echo  $product_short_description; ?></h4>
                                        <div class="price_dtl_wapper_main">
                                            <span class="price_main"><?php echo $product->get_price_html(); ?></span>
                                          <?php  do_action( 'woocommerce_after_shop_loop_item' ); ?>
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); }?>
                
            </div>
        </div>
    </section>
    <!-- ABC Adjustable -->
 <?php 
 $upload = get_field('click_to_upload_more_content'); 
  if($upload){ ?>
    <section class="pcb_holders_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="wapper_left">
                        <!--<h3>The ABC Series of PCB Holders</h3>-->

                        <p><?php the_field('product_content_main'); ?></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="side_text_wapper">
                        <!--<div class="heading">-->
                        <!--    <h3>Features of the ABC Series of PCB Holders</h3>-->
                        <!--</div>-->
                        <?php the_field('product_features'); ?>
                        <!--<h3>Options</h3>-->
                        <!--<ul>-->
                        <!--    <li>Additional Tracks (See Our Quatro™ Models Below)</li>-->
                        <!--    <li>Various Sized Tables (Standard, Large and Tiny. See Below)</li>-->
                        <!--</ul>-->
                    </div>
                </div>
            </div>

            <?php
            if( have_rows('product_content_bottom_box') ):
            while( have_rows('product_content_bottom_box') ) : the_row(); ?>

            
           
            
            <div class="row">
                <div class="col-md-<?php the_sub_field('enter_box_size'); ?>">
                    <div class="wapper_left">
                        <h3><?php the_sub_field('heading'); ?></h3>
                        <p><?php the_sub_field('content'); ?></p>
                    </div>
                </div>
                <?php $upload = get_sub_field('upload_image'); 
                if($upload){ ?>
               
                <div class="col-md-6">
                    <div class="side_text_wapper">
                        <div class="img_wapper">
                            <figure style="background-image: url(<?php the_sub_field('image'); ?>);"></figure>
                            <h5><?php the_sub_field('image_title'); ?></h5>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <?php
                endwhile;
                endif;
            ?>
        </div>
    </section>

<?php } ?>

    <!-- Shop Now -->
    <section class="people_also_bought_main body_margin">
        <div class="container">
            <h2>People also Bought</h2>
            <div class="people_also_main_slider">
				
			<?php
                
                $related_ids = wc_get_related_products( $product->get_id() ); 
				
                
                if ( ! empty( $related_ids ) ) { 
                    foreach ( $related_ids as $related_id ) {
                        $related_product = wc_get_product( $related_id );
                        $related_product_price = $related_product->get_price();
                  
                        $image_id = $related_product->get_image_id();
                        $image_url = wp_get_attachment_image_url( $image_id, 'full' );
                    ?>
                <div class="elements">
                    <div class="shop_now_box">
                        <a href="<?php echo esc_url( get_permalink( $related_id ) ); ?>"><figure style="background-image: url(<?php echo $image_url; ?>);"></figure></a>
                        <div class="text">
                            <h3><a href="<?php echo esc_url( get_permalink( $related_id ) ); ?>"><?php echo $related_product->get_title() ; ?></a></h3>
                            <span class="price_main"><?php echo wc_price( $related_product_price ); ?></span>
                            <div class="extra_dtl">
                                <ul>
                                    <li><a href="<?php echo esc_url( get_permalink( $related_id ) ); ?>"><i class="fa-solid fa-eye"></i> View</a></li>
									
                                  <li><?php echo sprintf(
										'<a href="%s" data-quantity="1" class="button add_to_cart_button product_type_simple" data-product_id="%s" data-product_sku="%s"><i class="fa-solid fa-bag-shopping"></i>%s</a>',
										esc_url($related_product->add_to_cart_url()),
										esc_attr($related_product->get_id()),
										esc_attr($related_product->get_sku()),
										esc_html__('Buy', 'woocommerce')
									); ?></li> 
                                   <li><a href="<?= site_url('/cart'); ?>"><i class="fa-solid fa-cart-shopping"></i>Cart</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
				<?php } }?>
                
            </div>
        </div>
        <div class="btn-wrap">
            <button class="slick-prev">Previous</button>
            <button class="slick-next">Next</button>
        </div>
        <div class="btn_wapper">
            <a href="<?php echo site_url('/products'); ?>" class="a_btn">View All Products</a>
        </div>
    </section>
    <!-- Shop Now -->


    <!-- Here's Clearly -->
    <section class="here_clearly_main_section" style="background-image: url(<?php bloginfo('template_url'); ?>/img/Main-Base-02.jpg);">
        <div class="container">
            <!--<h2>Here's Clearly Why PC Holders Should Be Independent From Both Any Preheater or Upper Heat Zone</h2>-->
            <div class="row">
                <?php
                $args = array( 'post_type' => 'blog', 'posts_per_page' => -1  ,'orderby' => 'ID','order' => 'ASC');
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
            	$blogimage = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                
            	 $date = get_the_date(); 
            	?>
                <div class="col-md-4">
                    <div class="Heres_clearly_box">
                        <figure style="background-image: url(<?php echo $blogimage[0]; ?>);"></figure>
                        <h5><?php the_title(); ?></h5>
                        <div class="list_wapper">
                            <?php
                            if( have_rows('blog_post_content_box') ):
                             while( have_rows('blog_post_content_box') ) : the_row(); ?>
                             
                            <div class="each_wapper">
                                <h6> <?php the_sub_field('heading'); ?></h6>
                                <p> <?php the_sub_field('content'); ?></p>
                            </div>
                            
                             <?php
                                endwhile;
                                endif;
                            ?>
                            
                            
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
                
            </div>
        </div>
    </section>
    <!-- Here's Clearly -->


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
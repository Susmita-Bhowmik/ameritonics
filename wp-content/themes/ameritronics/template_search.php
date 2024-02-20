<?php 
/** Template Name: Search */

get_header();
$product_name = $_GET['title'];

global $product;

global $wpdb;

global $table_prefix;

$table = $table_prefix.'posts';
?>
<section class="about-page-banner" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
        <div class="banner-text">
            <div class="container">
                <h2><?php the_title(); ?></h2>
            </div>
        </div>
    </section>
    <section class="welcome-about">
        <div class="container">
          <div class="row">
          <?php

         $result = $wpdb->get_results("SELECT * FROM $table WHERE `post_type`= 'product' AND  `post_title` LIKE '%$product_name%' ");

          ?>

          <?php 
          if($result)
          { foreach($result as $row) {

             ?>
             <div class="col-md-4">
                    <div class="elements">
                    <div class="shop_now_box">
                                <a href="<?php $url = get_permalink($row->ID);echo $url; ?>">
                                    <figure style="background-image: url(<?php echo get_the_post_thumbnail_url($row->ID, 'thumbnail'); ?>);"></figure>
                                </a>
                            <div class="text">
                            <h3><a href="<?php $url = get_permalink($row->ID);echo $url; ?>"><?php echo $row->post_title; ?></a></h3>
                            
                            </div>
                        <div class="cart_box">
                            <a href="<?php $url = get_permalink($row->ID);echo $url; ?>" class="a_btn">View Details</a>
                            
                        </div>
                    </div>
                </div>
                </div>
              
              <?php } ?>

                <?php }else{ echo '<h3 class="text-center m-auto">No Record found. Please Try with another keyword..</h3>';

              ?>

            <?php

              } 

            ?>

        
 </div>
 </div>
</section>









<?php get_footer(); ?>
<?php 



/** Template Name: Products */


get_header();

if(isset($_GET['category'])){
    $cat_slug = $_GET['category'];  }?>


 <section class="list_main_section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="listing_catagori_side">
                        <div class="heading">
                            <h3>Categories</h3>
                        </div>
                        <div class="drop_down_item">
                        <?php
                            $taxonomy     = 'product_cat';
                            $orderby      = 'ID';
                            $show_count   = 0;      
                            $pad_counts   = 0;     
                            $hierarchical = 1;     
                            $title        = '';
                            $empty        = 1;

                            $args = array(
                                'taxonomy'     => $taxonomy,
                                'orderby'      => $orderby,
                                'show_count'   => $show_count,
                                'pad_counts'   => $pad_counts,
                                'hierarchical' => $hierarchical,
                                'title_li'     => $title,
                                 'hide_empty' => true,
                            );

                        
                            
                            $count=0;
                            $all_categories = get_categories( $args );
                           
                            foreach ($all_categories as $cat) {
                                if($cat->slug != 'uncategorized') {
                                    $category_id = $cat->term_id;
                            
                            
                            ?>
                            <div class="each_wapper <?php 
                                if(!empty($cat_slug)){
                                    if($cat_slug == $cat->slug){
                                        echo 'active';
                                    }
                                }else{
                                    if(!$count){
                                        echo 'active';
                                    }
                                }
                                
                                
                                ?>">
                                <div class="product_heading">
                                 <h6>  <a href="<?= site_url('/products') .'?category='.$cat->slug; ?>"><?php echo $cat->name; ?></a> </h6>
                                </div>
                                <ul>
                                  <?php

                                    $args = array( 'post_type' => 'product', 'posts_per_page' => -1, 'product_cat' =>  $cat->slug, 'order' => 'DESC' );
                                    $loop = new WP_Query( $args );
                                    while ( $loop->have_posts() ) : $loop->the_post();
                                    $product_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                                    ?>
                                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                    <?php endwhile; ?>
                                    <?php wp_reset_query(); ?>
                                    
                                    
                                </ul>
                            </div>
                            <?php  $count++;  } } ?>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="product_item_main_box">
                    <?php
                            $taxonomy     = 'product_cat';
                            $orderby      = 'ID';
                            $show_count   = 0;      
                            $pad_counts   = 0;     
                            $hierarchical = 1;     
                            $title        = '';
                            $empty        = 1;

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
                           
                                if(isset($_GET['category']) && $cat->slug != 'uncategorized' && $cat->slug == $cat_slug ) {
                                    
                                    $category_id = $cat->term_id;
                            
                            
                            ?>
                        <h2><?php  echo $cat->name  ; ?></h2>
                        <h6><?php echo $cat->description; ?></h6>
                        <div class="main_productlist__item_wapper">
                          <?php
                            $paged = get_query_var('paged');
                            $args = array( 'post_type' => 'product', 'paged' => $paged,'posts_per_page' => 2, 'product_cat' =>  $cat->slug, 'order' => 'DESC' );
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post();
                            $product_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                            $product_short_description = $product->get_short_description();
                            ?>
                            <div class="each_wapper">
                                <div class="heading">
                                    <h3><?php the_title(); ?></h3>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="main_product_figure">
                                        <a href="<?php the_permalink(); ?>"><figure style="background-image: url(<?php echo $product_image[0]; ?>)" ;></figure></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="main_product_text_list">
                                           <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a> 
                                           <?php echo $product->get_description();  ?>
                                            
                                            <h6><?php echo  $product_short_description; ?></h6>
                                            <a href="<?php the_permalink(); ?>" class="a_btn">View More Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; ?>
                            <?php wp_reset_query(); ?>

                            
                        </div>
                        <?php   } }?>
                           <?php if(!isset($_GET['category'])){ ?>
                           
                            <h2><?php  echo  $all_categories[0]->name  ; ?></h2>
                        <h6><?php echo  $all_categories[0]->description; ?></h6>
                        <div class="main_productlist__item_wapper">
                          <?php
                            $paged = get_query_var('paged');
                            $args = array( 'post_type' => 'product', 'paged' => $paged,'posts_per_page' => 2, 'product_cat' => $all_categories[0]->slug, 'order' => 'DESC' );
                            
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post();
                            $product_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                            $product_short_description = $product->get_short_description();
                            ?>
                            <div class="each_wapper">
                                <div class="heading">
                                    <h3><?php the_title(); ?></h3>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="main_product_figure">
                                        <a href="<?php the_permalink(); ?>"><figure style="background-image: url(<?php echo $product_image[0]; ?>)" ;></figure></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="main_product_text_list">
                                           <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a> 
                                           <?php echo $product->get_description();  ?>
                                            
                                            <h6><?php echo  $product_short_description; ?></h6>
                                            <a href="<?php the_permalink(); ?>" class="a_btn">View More Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; ?>
                            <?php wp_reset_query(); ?>

                            
                        </div>
                            <?php } ?>
                    </div>
                    
                    <div class="pagination_main">
                        <div class="main_wapper">
                            <span class="pagination_arrow" href="#"><i class="fa-solid fa-chevron-left"></i></span>
                            <?php
                            echo "<div class='fz-pagination'>" . paginate_links(array(
                                'total' => $loop->max_num_pages,
                                'prev_text' => __('<div class="preious-page">Prev</div>'),
                                'next_text' => __('<div class="next-page">Next</div>')
                            )) . "</div>";
                        ?>
                            <!-- <ul>
                                <li><a href="#"><span>01</span></a></li>
                                <li class="active"><a href="#"><span>02</span></a></li>
                                <li><a href="#"><span>03</span></a></li>
                                <li><a href="#"><span>04</span></a></li>
                            </ul> -->
                            <span class="pagination_arrow" href="#"><i class="fa-solid fa-chevron-right"></i></span>
                        </div>
                    </div>
                    <!-- Subscribe  -->
                    <div class="subscribe_main_index body_margin">
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
                    </div>
                    <!-- Subscribe  -->

                    <!-- Ready to Help -->
                    <div class="ready_help_main body_margin">
                        <div class="container">
                            <h2>Ready to Help</h2>
                            <div class="ready_form_main">
            <?php  echo do_shortcode('[contact-form-7 id="53497e6" title="Ready To Help Form"]') ; ?>
                            </div>
                        </div>
                    </div>
                    <!-- Ready to Help -->
                </div>
            </div>
        </div>
    </section>



<?php get_footer(); ?>
<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Ameritronics</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/img/fav-icon.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <!-- font css -->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!--  -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <!-- Main Css -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsive.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/fancybox.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/custom.css">
	<?php wp_head(); ?>
</head>

<body>
<header class="main_header">
        <div class="top">
            <div class="contact_info">
                <ul>
                    <li>
                        <span>Call -</span>
                        <a href="tel: <?php  dynamic_sidebar('contact_phone'); ?>"><?php  dynamic_sidebar('contact_phone'); ?></a>
                    </li>
                    <li>
                        <span>Fax -</span>
                        <a href="fax: <?php  dynamic_sidebar('contact_fax'); ?>"><?php  dynamic_sidebar('contact_fax'); ?></a>
                    </li>
                    <li>
                        <span>Mail -</span>   
                        <a href="mailto: <?php  dynamic_sidebar('contact_email'); ?>"><?php  dynamic_sidebar('contact_email'); ?></a>
                    </li>
                </ul>
            </div>
            <div class="social_media">
                        <ul>
                            <li>
                                <a href="<?php  dynamic_sidebar('social_facebook'); ?>" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="<?php  dynamic_sidebar('social_twitter'); ?>" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                            </li>
                            <li>
                                <a href="<?php  dynamic_sidebar('social_instagram'); ?>" target="_blank"><i class="fa-brands fa-square-instagram"></i></a>
                            </li>
                        </ul>
            </div>
        </div>
        <nav class="main_nav">
            <div class="top">
                <div class="container">
                    <span class="pull_mob_nav">menu</span>
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <div class="logo">
                                <a href="<?php echo home_url(); ?>"><?php 
        
                                $custom_logo_id = get_theme_mod( 'custom_logo' );
                                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                if ( has_custom_logo() ) {
                                    echo '<img  src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                                } else {
                                    echo '<h1>' . get_bloginfo('name') . '</h1>';
                                }
                                
                                ?>
                               </a>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-5">
                            <div class="top_search_form">
                                <form id="search_form">
                                    <div class="form_group">
                                        <input type="text" id="upper-search"  name="product_name" placeholder="Search products ..." required>
                                        <button type="submit" name="submit" id="submit" class="top_sear_btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                                        <div class="product_search_main">
                                            <!-- <span class="icon_dropdown"></span>
                                            <select>
                                                <option value="" selected>All Products</option>
                                                <option value="">products 1</option>
                                                <option value="">products 2</option>
                                                <option value="">products 3</option>
                                                <option value="">products 4</option>
                                            </select> -->
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="last_col_wapper">
                                <div class="login_register">
                                    <ul>
									<?php  if (!is_user_logged_in()) { ?>
                                        <li><a href="#register_id" data-fancybox >Register</a></li>
                                        <?php } ?>
                                       <?php  if (!is_user_logged_in()) { ?>
                                        <li>
                                            <?php   $login_page_url = get_permalink( get_option('woocommerce_myaccount_page_id') );?>
                                            <a href="<?php echo  esc_url( $login_page_url );  ?>">Login</a>
                                        </li>
                                        <?php } ?>
                                        
                                         <?php  if (is_user_logged_in()) { ?>
                                        <li>
                                            <?php  $my_account_url = get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>
                                            <a href="<?php echo esc_url( $my_account_url );  ?>">My Account</a>
                                        </li>
                                         <?php } ?>
                                         <?php  if (is_user_logged_in()) { ?>
                                        
                                        <li>
                                            <?php  $my_account_url = get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>
                                            <a href="<?php echo esc_url( wp_logout_url( $my_account_url ) ) ; ?>">Log Out</a>
                                        </li>
                                         <?php } ?>
                                    </ul>
                                </div>
                                <div class="cart_sec_main">
                                    <a href="<?= site_url('/cart'); ?>"><i class="fa-solid fa-cart-shopping"></i></a>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav_list_row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="nav_list">
                            <?php wp_nav_menu( array( 'theme_location' => 'header-menu') );?>
                            </div>
                        </div>
                        <div class="col-md-4">
                              <a href="<?= site_url('/cart'); ?>">Cart</a>
                              <?php  if (!is_user_logged_in()) { ?>
                                        <a href="#register_id" data-fancybox >Register</a>
                                        <?php } ?>
                                       <?php  if (!is_user_logged_in()) { ?>
                                        
                                            <?php   $login_page_url = get_permalink( get_option('woocommerce_myaccount_page_id') );?>
                                            <a href="<?php echo  esc_url( $login_page_url );  ?>">Login</a>
                                        
                                        <?php } ?>
                                        
                                         <?php  if (is_user_logged_in()) { ?>
                                        
                                            <?php  $my_account_url = get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>
                                            <a href="<?php echo esc_url( $my_account_url );  ?>">My Account</a>
                                        
                                         <?php } ?>
                                         <?php  if (is_user_logged_in()) { ?>
                                        
                                        
                                            <?php  $my_account_url = get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>
                                            <a href="<?php echo esc_url( wp_logout_url( $my_account_url ) ) ; ?>">Log Out</a>
                                        
                                         <?php } ?>
                                    
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
	<?php if(is_shop() || is_cart() || is_checkout() || is_account_page()){?>
         
         <section class="about-page-banner" style="background-image: url(<?php bloginfo('template_url'); ?>/img/banner-01.jpg)">
             <div class="banner-text">
                 <div class="container">
                 <h2><?php the_title(); ?></h2>
                 </div>
             </div>
         </section>
         <!-- About-banner -->
       <?php  } ?>
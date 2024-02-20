<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

<section class="error-page-main">
        <div class="container text-center">
            <span class="icon-holder"><img src="<?php bloginfo('template_url'); ?>/img/404.png" alt=""></span>
            <h2>PAGE NOT FOUND</h2>

            <a href="<?php echo home_url(); ?>">Go to Home page</a>
        </div>
    </section>
<?php
get_footer();

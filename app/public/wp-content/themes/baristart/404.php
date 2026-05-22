<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Baristart
 */

get_header();

// Ensure proper HTTP status.
// Set the 404 status and send no‑cache headers.

// This ensures browsers and crawlers treat the page correctly.
  status_header( 404 );
  /*
  Sends HTTP headers that tell browsers and proxies not to cache this page. Important for 404s — you don't want a "not found" response to be cached and served later when the page might exist.
  */
  nocache_headers();

?>

	<main id="primary" class="site-main error-404-main" aria-labelledby="error-404-title">


		<section class="error-404 not-found">
			  <?php
    /**
     * A custom action hook that fires before the 404 content. Enables coder (or a plugin) to inject content before the main message without editing this file directly — for example, a banner or breadcrumb.
     *
     * @since 1.0.0
     */
    do_action( 'baristart_before_404_content' );
    ?>


        <?php get_template_part( 'template-parts/content', '404' ); ?>

    <?php
    /**
     * A custom action hook that fires after the 404 content. Enables coder (or a plugin) to inject content after the main message without editing this file directly — for example, related posts or a call-to-action.
     *
     * @since 1.0.0
     */
    do_action( 'baristart_after_404_content' );
    ?>


		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();

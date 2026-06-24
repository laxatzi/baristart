<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Baristart
 */

?>

	<footer id="colophon" class="site-footer text-bg-basic" role="contentinfo" aria-labelledby="footer-title">
		<div class="site-info">
			<div class="container">
				<?php
				  get_template_part('template-parts/menu-info');
				?>
				<?php
				  get_template_part( 'template-parts/menu-sig' );
				?>
			</div><!-- .container -->
		</div><!-- .site-info -->

	</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>

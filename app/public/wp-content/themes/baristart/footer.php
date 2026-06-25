<?php
/**
 * The template for displaying the footer
 *
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Baristart
 */

?>

	<footer id="colophon" class="site-footer text-bg-basic" aria-label="<?php esc_attr_e( 'Site footer', 'baristart' ); ?>">
			<div class="container">
				<div class="row">
					<?php
						get_template_part( 'template-parts/menu-info' );
					?>
					<?php
						get_template_part( 'template-parts/menu-sig' );
					?>
				</div>
			</div><!-- .container -->

	</footer><!-- #colophon -->

  </div>
<?php wp_footer(); ?>


</body>
</html>

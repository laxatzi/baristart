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

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-12 me-auto">
						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'baristart' ) ); ?>">
							<?php
							/* translators: %s: CMS name, i.e. WordPress. */
							printf( esc_html__( 'Proudly powered by %s', 'baristart' ), 'WordPress' );
							?>
						</a>
						<span class="sep"> | </span>
							<?php
							/* translators: 1: Theme name, 2: Theme author. */
							printf( esc_html__( 'Developed by: %1$s.', 'baristart' ), '<a href="https://lambroshatzinikolaou.com">Lambros Hatzinikolaou</a>' );
							?>

					</div>

				</div><!-- .row -->

			</div><!-- .container -->

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

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

	<footer id="colophon" class="site-footer text-bg-basic">
		<div class="site-info">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-12 me-auto">
					  <em class="text-white d-block mb-4">Where to find us?</em>
						<strong class="text-white">
              <i class="bi-geo-alt me-2"></i>
              Mikras Asias 89,Pefka, Thessaloniki, Greece
            </strong>
						<ul class="social-icon mt-4">
							<li class="social-icon-item">
								<a href="#" target="_blank" rel="noopener noreferrer" class="social-icon-link" aria-label="<?php esc_attr_e( 'Facebook', 'baristart' ); ?>">
									<i class="bi bi-facebook" aria-hidden="true"></i>
								</a>
							</li>

							<li class="social-icon-item">
								<a href="#" target="_blank" rel="noopener noreferrer" class="social-icon-link" aria-label="<?php esc_attr_e( 'X Twitter', 'baristart' ); ?>">
									<i class="bi bi-twitter" aria-hidden="true"></i>
								</a>
							</li>

							<li class="social-icon-item">
								<a href="#" target="_blank" rel="noopener noreferrer" class="social-icon-link" aria-label="<?php esc_attr_e( 'WhatsApp', 'baristart' ); ?>">
									<i class="bi bi-whatsapp" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
					</div><!-- col -->
					<div class="col-lg-3 col-12 mt-4 mb-3 mt-lg-0 mb-lg-0">
            <em class="text-white d-block mb-4">Contact</em>
						<p class="d-flex mb-1">
              <strong class="me-2 text-white">Phone:</strong>
              <a href="tel: 305-240-9671" class="site-footer-link" data-text="(65) 305 2409 671">
                (65) 305 2409 671
              </a>
            </p>
						<p class="d-flex">
              <strong class="me-2 text-white">Email:</strong>
							<a href="mailto:info@yourgmail.com" class="site-footer-link" data-text="hello@barista.co">
                hello@barista.co
              </a>
            </p>
          </div> <!-- col -->
				  <div class="col-lg-5 col-12">
            <em class="text-white d-block mb-4">Opening Hours.</em>
						  <ul class="opening-hours-list">
                <li class="d-flex">
                  Monday - Friday
                  <span class="underline"></span>
									<strong>9:00 - 18:00</strong>
                </li>
								<li class="d-flex">
                  Saturdays
                  <span class="underline"></span>
									<strong>11:00 - 16:30</strong>
                </li>
								<li class="d-flex">
                  Sunday
                  <span class="underline"></span>
									<strong>Closed</strong>
                </li>
              </ul>
            </div> <!-- col -->
						<div class="col-lg-8 col-12 mt-4 copyright-text">
							<?php
							/* translators: 1: Theme name, 2: Theme author. */
							printf( esc_html__( 'Developed by: %1$s.', 'baristart' ), '<a href="https://lambroshatzinikolaou.com">Lambros Hatzinikolaou</a>' );
							?>
              <p class="copyright-text mb-0">Copyright © Baristart 2026. All rights reserved.</p>
            </div>
					</div><!-- col -->
				</div><!-- .row -->
			</div><!-- .container -->
		</div><!-- .site-info -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

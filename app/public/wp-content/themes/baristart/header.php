<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 *
 * @package Baristart Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open();
//* a hook location to insert code at the very start of the page body.
?>

<button
  id="top-button"
  class="back-to-top"
  type="button"
  title="<?php echo esc_attr__( 'Go to top', 'baristart' ); ?>"
  aria-label="<?php echo esc_attr__( 'Back to top', 'baristart' ); ?>"
  aria-hidden="true"
  hidden
>
  ↑
</button>

<div id="page" class="site">
	<!--//*   Skip link for accessibility. It allows users to skip directly to the main content, which is especially helpful for screen reader users and those navigating via keyboard.	 -->
	<a class="skip-link screen-reader-text" href="#primary">
		<?php esc_html_e( 'Skip to content', 'baristart' ); ?>
	</a>
<div id="sticky-wrapper" class="sticky-wrapper">
  <nav class="navbar navbar-expand-lg">
		<div class="container">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand d-flex align-items-center">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/coffee-beans-logo.png" alt="Baristart Cafe" class="navbar-brand-image img">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
       </button>
			 <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav ms-lg-auto">
           <li class="nav-item">
             <a class="nav-link click-scroll active" href="#section_1">Home</a>
           </li>
					 <li class="nav-item">
              <a class="nav-link click-scroll inactive" href="#section_2">About</a>
           </li>
					 <li class="nav-item">
            <a class="nav-link click-scroll inactive" href="#section_3">Our Menu</a>
           </li>
					 <li class="nav-item">
             <a class="nav-link click-scroll inactive" href="#section_4">Reviews</a>
          </li>
					<li class="nav-item">
            <a class="nav-link click-scroll inactive" href="#section_5">Contact</a>
          </li>
        </ul>
        <div class="ms-lg-3">
          <a class="btn custom-btn custom-border-btn" href="reservation.html">
            Reservation
           <i class="bi-arrow-up-right ms-2"></i>
         </a>
        </div>
			</div>
		</div>
	</nav>
</div>


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
<!-- //* Back to top button. It allows users to quickly return to the top of the page, improving navigation and user experience, especially on long pages. */ -->
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

	<header id="masthead" class="site-header" >

		<div class="site-branding" id="branding">
			<!-- If a custom logo exists, it appears first; otherwise the site name acts as the brand. -->
			<?php
			      if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) :
        the_custom_logo();
    endif;
			if ( is_front_page() && ! is_paged() ) :
				?>
   <!-- the homepage carries the primary <h1>. On inner pages, the page/post title is the <h1>, so the site title should not also be an H1 (avoid multiple H1s). -->
    <!-- Checks whether the current view is the first page of the front page, regardless of whether that front page is a blog index or a static page. -->
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;

			/**
       * Displays the site description/tagline in the header.
       *
       * Retrieves the site description from blog info and displays it within
       * a paragraph element with the class 'site-description'. The description
       * is only rendered if it exists or if the site is being previewed in the
       * WordPress Customizer.
       *
       * @global void
       *
       * @return void Outputs HTML markup directly.
       */

			$baristart_description = get_bloginfo( 'description', 'display' );
			if ( $baristart_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo esc_html( $baristart_description );  ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button
			  id="primary-menu-toggle"
			  class="menu-toggle"
				aria-label="<?php esc_attr_e( 'Primary Menu', 'baristart' ); ?>"
				aria-controls="primary-menu"
				aria-expanded="false"
				type="button"
				>
				 <span class="u-sr-only screen-reader-text">
					 <?php esc_html_e( 'Primary Menu', 'baristart' ); ?>
				 </span>
			</button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

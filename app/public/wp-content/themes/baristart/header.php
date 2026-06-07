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




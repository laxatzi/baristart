
<div class="col-lg-8 col-12 mt-4 copyright-text">
	<?php
    /**
       * Displays the footer copyright information with dynamic year.
       *
       * Outputs a translatable copyright notice that includes the theme author name
       * and the current year. The content is properly escaped for security.
       *
       * @since 1.0.0
       *
       * @return void Echoes the copyright text directly to output.
       */
      printf(
        esc_html__( 'Developed by %1$s © 2024 - %2$s. All rights reserved.', 'LambrosPersonalTheme' ),
        '<span class="sig__span">' . esc_html( LAMBROS_THEME_AUTHOR ) . '</span>',
        esc_html( wp_date( 'Y' ) )
      );
  ?>
</div>

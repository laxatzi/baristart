
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


    // ✅ Store founding year as a constant
      define( 'BARISTART_THEME_FOUNDED', '2024' );

      printf(
          esc_html__( 'Developed by %1$s © %2$s – %3$s. All rights reserved.', 'baristart' ),
          '<span class="sig__span">' . esc_html( BARISTART_THEME_AUTHOR ) . '</span>',
          esc_html( BARISTART_THEME_FOUNDED ),
          esc_html( wp_date( 'Y' ) )
      );
  ?>
</div>

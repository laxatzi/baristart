<header class="page-header">
  <h1 class="page-title" id="error-404-title">
    <?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'baristart' ); ?>
  </h1>
</header><!-- .page-header -->
<div class="page-content">
      <!-- Explanation text -->
    <div class="error-explanation">
      <p>
        <?php esc_html_e( 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'LambrosPersonalTheme' ); ?>
      </p>
    </div>
      <!-- Search form -->

					<?php
					get_search_form();

					the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<?php
					/* translators: %1$s: smiley */
					$baristart_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'baristart' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$baristart_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					?>

			</div><!-- .page-content -->

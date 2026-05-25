
<header class="page-header">
      <!-- Error message header -->
       <h1 id="page-title" class="error-404-title">404</h1>
       <h2 class="page-subtitle">
       <?php
       printf(
          /* translators: %s: "Oops" or equivalent attention-getting word */
          esc_html__( '%s, we haven\'t found what you\'re looking for.', 'baristart' ),
          '<span class="subtitle-emphasis">' . esc_html__( 'Oops', 'baristart' ) . '</span>'
       );
       ?>
       </h2>
</header><!-- .page-header -->

<div class="page-content pb-5">
      <!-- Explanation text -->
    <div class="error-explanation">
      <p>
        <?php esc_html_e( 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'baristart' ); ?>
      </p>
    </div>
    <div class="search-wrapper pt-5 pb-5">
      <button>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="search-link">
          <?php esc_html_e( 'Go to homepage', 'baristart' ); ?>
        </a>
      </button>
    </div>
    <div>

    </div>
    	<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
    <div>
      <!-- Archives and Tag Cloud -->
      <div class="archives-and-tags">
        <!-- <h2 class="widget-title mb-4"><?php esc_html_e( 'Try looking in the archives.', 'baristart' ); ?></h2> -->
					<?php
					/* translators: %1$s: smiley */
					$baristart_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'baristart' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$baristart_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					?>

    </div>
      <!-- Search form -->



			</div><!-- .page-content -->


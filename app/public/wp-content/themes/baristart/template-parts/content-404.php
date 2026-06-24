
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
    <div class="pt-5 pb-5">
      <button class="btn btn-primary" aria-label="<?php esc_attr_e( 'Go to homepage', 'baristart' ); ?>">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <?php esc_html_e( 'Go to homepage', 'baristart' ); ?>
        </a>
      </button>
    </div>
    <div>
      <!-- Search form -->



			</div><!-- .page-content -->


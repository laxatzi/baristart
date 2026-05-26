<?php
// Build link data
$links = [
  [
    'label'   => esc_html__( 'About', 'baristart' ),
    'url'     => esc_url( home_url( '/about' ) ),
    'current' => is_page( 'about' ),
  ],
  [
    'label'   => esc_html__( 'Articles', 'baristart' ),
    'url'     => esc_url( home_url( '/blog' ) ),
    // active on the posts index and on single posts
    'current' => is_home() || is_singular( 'post' ),
  ],
  [
    'label'   => esc_html__( 'Projects', 'baristart' ),
    'url'     => esc_url( get_post_type_archive_link( 'project' ) ?: home_url( '/projects' ) ),
    'current' => is_post_type_archive( 'project' ) || is_singular( 'project' ),
  ],
  [
    'label'   => esc_html__( 'Contact', 'baristart' ),
    'url'     => esc_url( home_url( '/contact' ) ),
    'current' => is_page( 'contact' ),
  ],
  [
    'label'   => esc_html__( 'Search', 'baristart' ),
    'url'     => esc_url( home_url( '/search' ) ),
    'current' => is_page( 'search' ),
  ],
];
?>

    <nav class="navbar navbar-expand-lg" aria-label="<?php esc_attr_e( 'Primary Navigation', 'baristart' ); ?>">
      <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="index.html">
          <img src="images/coffee-beans.png" class="navbar-brand-image img-fluid" alt="Barista Cafe Template">
            Barista
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-lg-auto">
            <?php foreach ( $links as $item ) : ?>
              <li class="nav-item <?php echo $item['current'] ? 'current-menu-item' : ''; ?>">
                <a class="nav-link click-scroll <?php echo $item['current'] ? 'indicator' : ''; ?>" href="<?php echo esc_url( $item['url'] ); ?>" <?php echo $item['current'] ? 'aria-current="page"' : ''; ?>>
                  <?php echo esc_html( $item['label'] ); ?>
                </a>
              </li>
              <?php endforeach; ?>
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


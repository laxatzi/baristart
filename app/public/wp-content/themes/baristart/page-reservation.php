<?php
// Template for the “Search” page (slug: search)
get_header();
?>
  <main id="primary" class="site-main reservation-main text-white" aria-labelledby="reservation-title">

    <div class="container">
    <section class="reservation-section row pb-5 pt-5">
      <h2>This is the reservation page</h2>
        <?php
    /**
     * A custom action hook that fires before the reservation content. Enables coder (or a plugin) to inject content before the main message without editing this file directly — for example, a banner or breadcrumb.
     *
     * @since 1.0.0
     */
    do_action( 'baristart_before_reservation_content' );
    ?>
    </section><!-- .reservation-section -->
   </div>

  </main>

  <?php
   get_footer();
  ?>



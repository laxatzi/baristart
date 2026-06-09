<?php
// Template for the “Search” page (slug: search)
get_header();
?>
  <main id="primary" class="site-main reservation-main text-white" aria-labelledby="reservation-title">
    <?php
    get_template_part( 'template-parts/hero-section' );

    ?>

    <div class="container">
     <?php
       get_template_part( 'template-parts/reservation-form' );
     ?>
   </div>

  </main>

  <?php
   get_footer();
  ?>



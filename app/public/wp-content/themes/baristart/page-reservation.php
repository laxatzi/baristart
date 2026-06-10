<?php
// Template for the “Search” page (slug: search)
get_header();
?>
  <main id="primary" class="reservation-main text-white" aria-labelledby="reservation-title" style="border: 1px solid red;">
    <div class="container">
      <div class="reservation-form">
        <?php
          get_template_part( 'template-parts/reservation-form' );
        ?>

      </div>

   </div>

  </main>

  <?php
   get_footer();
  ?>



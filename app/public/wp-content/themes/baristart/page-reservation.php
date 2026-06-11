<?php
get_header();
?>
  <main id="primary" class="reservation-main text-white" aria-labelledby="reservation-title">
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



<?php
  get_header();
  ?>
    <main id="main-content" class="layout__main layout__content" aria-labelledby="home-title">

        <?php
              /**
              * A custom action hook that fires before the hero section on the front page. Enables coder (or a plugin) to inject content before the hero without editing this file directly — for example, a banner or announcement.
              *
              * @since 1.0.0
              */
              do_action( 'baristart_before_hero' );
          ?>
          <?php
            get_template_part( 'template-parts/hero-section' );
            get_template_part( 'template-parts/about-section' );
            get_template_part('template-parts/barista-section');
            get_template_part('template-parts/menu-section');
            get_template_part('template-parts/testimonials-section');

          ?>
          <?php
           ?>
           <?php
              /**
              * A custom action hook that fires after the hero section on the front page. Enables coder (or a plugin) to inject content after the hero without editing this file directly — for example, featured posts or a call-to-action.
              *
              * @since 1.0.0
              */
              do_action( 'baristart_after_hero' );
          ?>

    </main>
      <?php
  get_footer();
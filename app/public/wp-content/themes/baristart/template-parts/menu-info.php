
<?php
// ── Fetch all values once at the top ──────────────────────────────────────
$address       = get_theme_mod( 'footer_address' );
$phone         = get_theme_mod( 'footer_phone' );
$phone_display = get_theme_mod( 'footer_phone_display', $phone ); // fallback to raw phone
$email         = get_theme_mod( 'footer_email' );

$socials = [
    'facebook' => [
        'url'   => get_theme_mod( 'footer_facebook_url' ),
        'icon'  => 'bi-facebook',
        'label' => __( 'Facebook', 'baristart' ),
    ],
    'instagram'  => [
        'url'   => get_theme_mod( 'footer_instagram_url' ),
        'icon'  => 'bi-instagram',
        'label' => __( 'Instagram', 'baristart' ),
    ],
    'whatsapp' => [
        'url'   => get_theme_mod( 'footer_whatsapp_url' ),
        'icon'  => 'bi-whatsapp',
        'label' => __( 'WhatsApp', 'baristart' ),
    ],
];

$hours = [
    [ get_theme_mod( 'footer_hours_weekdays_label', 'Monday – Friday' ), get_theme_mod( 'footer_hours_weekdays_time', '9:00 – 18:00'  ) ],
    [ get_theme_mod( 'footer_hours_saturday_label', 'Saturdays' ),       get_theme_mod( 'footer_hours_saturday_time', '11:00 – 16:30' ) ],
    [ get_theme_mod( 'footer_hours_sunday_label',   'Sunday' ),          get_theme_mod( 'footer_hours_sunday_time',   'Closed'        ) ],
];

$visible_socials = array_filter( $socials, fn( $s ) => ! empty( $s['url'] ) );
?>
       <div class="col-lg-4 col-12 me-auto">
        <em class="text-white d-block mb-4"><?php esc_html_e( 'Where to find us?', 'baristart' ); ?></em>

        <?php if ( $address ) : ?>
        <strong class="text-white">
            <i class="bi bi-geo-alt me-2" aria-hidden="true"></i>
            <?php echo esc_html( $address ); ?>
        </strong>
        <?php endif; ?>

        <?php if ( $visible_socials ) : ?>
        <ul class="social-icon mt-4">
            <?php foreach ( $visible_socials as $social ) : ?>
            <li class="social-icon-item">
                <a href="<?php echo esc_url( $social['url'] ); ?>"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="social-icon-link"
                   aria-label="<?php echo esc_attr( $social['label'] ); ?>">
                    <i class="bi <?php echo esc_attr( $social['icon'] ); ?>" aria-hidden="true"></i>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
    </div><!-- .col -->

    <div class="col-lg-3 col-12 mt-4 mb-3 mt-lg-0 mb-lg-0">
        <em class="text-white d-block mb-4"><?php esc_html_e( 'Contact', 'baristart' ); ?></em>

        <?php if ( $phone ) : ?>
        <p class="d-flex mb-1">
            <strong class="me-2 text-white"><?php esc_html_e( 'Phone:', 'baristart' ); ?></strong>
            <a href="tel:<?php echo esc_attr( $phone ); ?>"
               class="site-footer-link"
               data-text="<?php echo esc_attr( $phone_display ); ?>">
                <?php echo esc_html( $phone_display ); ?>
            </a>
        </p>
        <?php endif; ?>

        <?php if ( $email ) : ?>
        <p class="d-flex">
            <strong class="me-2 text-white"><?php esc_html_e( 'Email:', 'baristart' ); ?></strong>
            <a href="mailto:<?php echo esc_attr( $email ); ?>"
               class="site-footer-link"
               data-text="<?php echo esc_attr( $email ); ?>">
                <?php echo esc_html( $email ); ?>
            </a>
        </p>
        <?php endif; ?>
    </div><!-- .col -->

    <div class="col-lg-5 col-12">
        <em class="text-white d-block mb-4"><?php esc_html_e( 'Opening Hours', 'baristart' ); ?></em>
        <ul class="opening-hours-list">
            <?php foreach ( $hours as [ $day, $time ] ) : ?>
            <li class="d-flex">
                <?php echo esc_html( $day ); ?>
                <span class="underline" aria-hidden="true"></span>
                <strong><?php echo esc_html( $time ); ?></strong>
            </li>
            <?php endforeach; ?>
        </ul>
    </div><!-- .col -->
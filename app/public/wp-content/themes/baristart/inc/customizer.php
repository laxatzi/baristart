<?php
/**
 * Baristart Theme Customizer
 *
 * @package Baristart
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function baristart_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'baristart_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'baristart_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'baristart_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function baristart_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function baristart_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function baristart_customize_preview_js() {
	wp_enqueue_script( 'baristart-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'baristart_customize_preview_js' );

/**
 * Register Footer Customizer Settings
 */
function barisart_cafe_customize_register( WP_Customize_Manager $wp_customize ): void {

    // ── Panel ──────────────────────────────────────────────────────────────
    $wp_customize->add_panel( 'footer_panel', [
        'title'    => __( 'Footer Settings', 'baristart' ),
        'priority' => 160,
    ] );

    // ── Section: Contact Info ──────────────────────────────────────────────
    $wp_customize->add_section( 'footer_contact', [
        'title' => __( 'Contact Info', 'baristart' ),
        'panel' => 'footer_panel',
    ] );

    $contact_settings = [
        'footer_address'       => [ 'label' => 'Address',                                    'type' => 'text',  'sanitize' => 'sanitize_text_field' ],
        'footer_phone'         => [ 'label' => 'Phone (digits only, used in tel: link)',      'type' => 'text',  'sanitize' => 'sanitize_text_field' ],
        'footer_phone_display' => [ 'label' => 'Phone (display text)',                        'type' => 'text',  'sanitize' => 'sanitize_text_field' ],
        'footer_email'         => [ 'label' => 'Email',                                       'type' => 'email', 'sanitize' => 'sanitize_email'      ],
    ];

    foreach ( $contact_settings as $id => $args ) {
        $wp_customize->add_setting( $id, [
            'default'           => '',
            'sanitize_callback' => $args['sanitize'],
            'transport'         => 'refresh',
        ] );
        $wp_customize->add_control( $id, [
            'label'   => __( $args['label'], 'baristart' ),
            'section' => 'footer_contact',
            'type'    => $args['type'],
        ] );
    }

    // ── Section: Social Links ──────────────────────────────────────────────
    $wp_customize->add_section( 'footer_social', [
        'title' => __( 'Social Links', 'baristart' ),
        'panel' => 'footer_panel',
    ] );

    $socials = [
        'footer_facebook_url' => 'Facebook URL',
        'footer_twitter_url'  => 'X / Twitter URL',
        'footer_whatsapp_url' => 'WhatsApp URL',
    ];

    foreach ( $socials as $id => $label ) {
        $wp_customize->add_setting( $id, [
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
            'transport'         => 'refresh',
        ] );
        $wp_customize->add_control( $id, [
            'label'   => __( $label, 'baristart' ),
            'section' => 'footer_social',
            'type'    => 'url',
        ] );
    }

    // ── Section: Opening Hours ─────────────────────────────────────────────
    $wp_customize->add_section( 'footer_hours', [
        'title' => __( 'Opening Hours', 'baristart' ),
        'panel' => 'footer_panel',
    ] );

    $hours_rows = [
        'weekdays' => [ 'Monday – Friday', '9:00 – 18:00'  ],
        'saturday' => [ 'Saturdays',        '11:00 – 16:30' ],
        'sunday'   => [ 'Sunday',           'Closed'        ],
    ];

    foreach ( $hours_rows as $key => [ $default_label, $default_time ] ) {
        $wp_customize->add_setting( "footer_hours_{$key}_label", [
            'default'           => $default_label,
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        ] );
        $wp_customize->add_control( "footer_hours_{$key}_label", [
            'label'   => sprintf( __( '%s — Label', 'baristart' ), ucfirst( $key ) ),
            'section' => 'footer_hours',
            'type'    => 'text',
        ] );

        $wp_customize->add_setting( "footer_hours_{$key}_time", [
            'default'           => $default_time,
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        ] );
        $wp_customize->add_control( "footer_hours_{$key}_time", [
            'label'   => sprintf( __( '%s — Hours', 'baristart' ), ucfirst( $key ) ),
            'section' => 'footer_hours',
            'type'    => 'text',
        ] );
    }

    // ── Section: Copyright ─────────────────────────────────────────────────
    $wp_customize->add_section( 'footer_copyright', [
        'title' => __( 'Copyright', 'baristart' ),
        'panel' => 'footer_panel',
    ] );

    $wp_customize->add_setting( 'footer_business_name', [
        'default'           => get_bloginfo( 'name' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ] );
    $wp_customize->add_control( 'footer_business_name', [
        'label'       => __( 'Business Name (for copyright line)', 'baristart' ),
        'description' => __( 'Defaults to your Site Title.', 'baristart' ),
        'section'     => 'footer_copyright',
        'type'        => 'text',
    ] );
}
add_action( 'customize_register', 'baristart_cafe_customize_register' );

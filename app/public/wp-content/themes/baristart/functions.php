<?php
/**
 * Security check to prevent direct access to the theme functions file.
 *
 * This code verifies that WordPress has been properly loaded by checking
 * if the ABSPATH constant is defined. If the file is accessed directly
 * without going through WordPress, it terminates execution and returns
 * a 403 Forbidden HTTP status code with a plain text error message.
 *
 * @return void Exits execution if direct access is detected.
 */
if ( ! defined( 'ABSPATH' ) ) {
    http_response_code( 403 );
     header( 'Content-Type: text/plain; charset=utf-8' );
    exit( 'Forbidden: direct access is not allowed.' );
}

// CONSTANTS
define( 'LAMBROS_THEME_AUTHOR', 'Lambros Hatzinikolaou' );
define( 'LAMBROS_DATE_FORMAT', 'F j, Y' );
define( 'LAMBROS_THEME_VERSION', wp_get_theme()->get( 'Version' ) );

/*
 * Baristart functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Baristart
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/*
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function baristart_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Baristart, use a find and replace
		* to change 'baristart' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'baristart', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'baristart' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'baristart_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'baristart_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function baristart_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'baristart_content_width', 640 );
}
add_action( 'after_setup_theme', 'baristart_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function baristart_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'baristart' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'baristart' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'baristart_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function baristart_scripts() {
	wp_enqueue_style(
		'baristart-bootstrap',
		get_template_directory_uri() . '/css/bootstrap.min.css',
		array(),
		'5.3.3'
	);

		wp_enqueue_style(
		'baristart-bootstrap-icons',
		get_template_directory_uri() . '/css/bootstrap-icons.css',
		array(),
		'1.10.5'
	);

	wp_enqueue_style(
		'baristart-style',
		get_stylesheet_uri(),
		array( 'baristart-bootstrap' ),
		_S_VERSION
	);

	wp_enqueue_style(
    'google-fonts',
    'https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&family=JetBrains+Mono&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap',
      [],
      null
    );

	wp_style_add_data( 'baristart-style', 'rtl', 'replace' );

	wp_enqueue_script(
		'baristart-bootstrap',
		get_template_directory_uri() . '/js/bootstrap.bundle.min.js',
		array(),
		'5.3.3',
		true
	);

	wp_enqueue_style(
		'baristart-style',
		get_stylesheet_uri(),
		array( 'baristart-bootstrap', 'baristart-bootstrap-icons' ),
		_S_VERSION
	);


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'baristart_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Register Footer Customizer Settings
 */
function baristart_customize_register( WP_Customize_Manager $wp_customize ): void {

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
add_action( 'customize_register', 'baristart_customize_register' );


<?php
/**
 * JSCASTA theme setup and asset loading.
 *
 * @package JSCASTA
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function jscasta_setup() {
	load_theme_textdomain( 'jscasta', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array(
		'height'      => 80,
		'width'       => 220,
		'flex-height' => true,
		'flex-width'  => true,
	) );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/styles.css' );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	) );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'jscasta' ),
		'footer'  => __( 'Footer Menu', 'jscasta' ),
	) );
}
add_action( 'after_setup_theme', 'jscasta_setup' );

function jscasta_enqueue_assets() {
	wp_enqueue_style(
		'jscasta-fonts',
		'https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Oswald:wght@500;600;700&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'jscasta-styles',
		get_template_directory_uri() . '/assets/css/styles.css',
		array( 'jscasta-fonts' ),
		filemtime( get_template_directory() . '/assets/css/styles.css' )
	);

	wp_enqueue_script(
		'jscasta-scripts',
		get_template_directory_uri() . '/assets/js/script.js',
		array(),
		filemtime( get_template_directory() . '/assets/js/script.js' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'jscasta_enqueue_assets' );

function jscasta_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'jscasta' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Optional sidebar for standard pages and posts.', 'jscasta' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widgets', 'jscasta' ),
		'id'            => 'footer-widgets',
		'description'   => __( 'Optional footer widget area.', 'jscasta' ),
		'before_widget' => '<section id="%1$s" class="footer-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'jscasta_widgets_init' );

function jscasta_asset_uri( $path ) {
	return esc_url( get_template_directory_uri() . '/assets/' . ltrim( $path, '/' ) );
}

function jscasta_fallback_primary_menu() {
	echo '<ul class="nav-links">';
	echo '<li class="nav-dropdown"><a href="' . esc_url( home_url( '/#shows' ) ) . '" aria-haspopup="true">' . esc_html__( 'Experiences', 'jscasta' ) . '</a>';
	echo '<div class="nav-dropdown-menu" aria-label="' . esc_attr__( 'Experience pages', 'jscasta' ) . '">';
	echo '<a href="' . esc_url( home_url( '/shows/' ) ) . '">' . esc_html__( 'Shows', 'jscasta' ) . '</a>';
	echo '<a href="' . esc_url( home_url( '/workshops/' ) ) . '">' . esc_html__( 'Workshops & Keynotes', 'jscasta' ) . '</a>';
	echo '<a href="' . esc_url( home_url( '/virtual-experiences/' ) ) . '">' . esc_html__( 'Virtual Experiences', 'jscasta' ) . '</a>';
	echo '<a href="' . esc_url( home_url( '/brand-activations/' ) ) . '">' . esc_html__( 'Brand Activations', 'jscasta' ) . '</a>';
	echo '</div></li>';
	echo '<li><a href="' . esc_url( home_url( '/#work' ) ) . '">' . esc_html__( 'Work', 'jscasta' ) . '</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/magical-thinking/' ) ) . '">' . esc_html__( 'Magical Thinking', 'jscasta' ) . '</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/#about' ) ) . '">' . esc_html__( 'About', 'jscasta' ) . '</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/#contact' ) ) . '">' . esc_html__( 'Contact', 'jscasta' ) . '</a></li>';
	echo '</ul>';
}

function jscasta_fallback_footer_menu() {
	$items = array(
		'#home'      => __( 'Home', 'jscasta' ),
		'#shows'     => __( 'Shows', 'jscasta' ),
		'#workshops' => __( 'Workshops', 'jscasta' ),
		'virtual-experiences' => __( 'Virtual Experiences', 'jscasta' ),
		'#work'      => __( 'Work', 'jscasta' ),
		'#about'     => __( 'About', 'jscasta' ),
		'#contact'   => __( 'Contact', 'jscasta' ),
	);

	foreach ( $items as $href => $label ) {
		echo '<a href="' . esc_url( home_url( '/' . $href ) ) . '">' . esc_html( $label ) . '</a>';
	}
}

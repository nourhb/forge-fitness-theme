<?php
/**
 * Forge theme setup.
 *
 * @package Forge
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'FORGE_VERSION', '1.0.0' );

/**
 * Theme setup: supports, menus, widget areas.
 */
function forge_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5', array( 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script', 'navigation-widgets' ) );
	add_theme_support( 'custom-logo', array( 'height' => 64, 'width' => 240, 'flex-height' => true, 'flex-width' => true ) );

	register_nav_menus(
		array(
			'primary' => __( 'Primary menu', 'forge' ),
			'footer'  => __( 'Footer menu', 'forge' ),
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer widgets', 'forge' ),
			'id'            => 'footer-widgets',
			'description'   => __( 'Widgets shown in the site footer.', 'forge' ),
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'after_setup_theme', 'forge_setup' );

/**
 * Enqueue styles and scripts.
 */
function forge_assets() {
	wp_enqueue_style( 'forge-fonts', 'https://fonts.googleapis.com/css2?family=Oswald:wght@500;600;700&family=Inter:wght@400;500;600;700&display=swap', array(), FORGE_VERSION );
	wp_enqueue_style( 'forge-style', get_stylesheet_uri(), array( 'forge-fonts' ), FORGE_VERSION );
	wp_enqueue_script( 'forge-theme', get_template_directory_uri() . '/assets/js/theme.js', array(), FORGE_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'forge_assets' );

/**
 * Editor-only styles.
 */
function forge_editor_assets() {
	add_editor_style( 'assets/css/editor.css' );
}
add_action( 'after_setup_theme', 'forge_editor_assets' );

/**
 * Register the "forge" block pattern category.
 */
function forge_pattern_category() {
	register_block_pattern_category(
		'forge',
		array( 'label' => __( 'Forge', 'forge' ) )
	);
}
add_action( 'init', 'forge_pattern_category' );

/**
 * Custom block styles.
 */
function forge_block_styles() {
	register_block_style( 'core/button', array( 'name' => 'forge-outline', 'label' => __( 'Forge Outline', 'forge' ) ) );
	register_block_style( 'core/group', array( 'name' => 'forge-card', 'label' => __( 'Forge Card', 'forge' ) ) );
	register_block_style( 'core/table', array( 'name' => 'forge-schedule', 'label' => __( 'Forge Schedule', 'forge' ) ) );
	register_block_style( 'core/heading', array( 'name' => 'forge-display', 'label' => __( 'Forge Display', 'forge' ) ) );
}
add_action( 'init', 'forge_block_styles' );

/**
 * Custom excerpt length.
 */
function forge_excerpt_length( $length ) {
	return 24;
}
add_filter( 'excerpt_length', 'forge_excerpt_length' );

/**
 * Inline SVG icon helper.
 *
 * @param string $name Icon name.
 * @return string SVG markup.
 */
function forge_icon( $name ) {
	$icons = array(
		'arrow' => '<svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h11M9 3.5 13.5 8 9 12.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
		'bolt'  => '<svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true"><path d="M9 1 2.5 9H7L6 15 13.5 6.5H9L9 1Z"/></svg>',
		'check' => '<svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2.5 8.5 6.5 12.5 13.5 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
	);
	return isset( $icons[ $name ] ) ? $icons[ $name ] : '';
}

/**
 * Estimated reading time for posts.
 *
 * @param int $post_id Post ID.
 * @return string
 */
function forge_reading_time( $post_id = 0 ) {
	$post    = get_post( $post_id ? $post_id : get_the_ID() );
	$words   = str_word_count( wp_strip_all_tags( $post ? $post->post_content : '' ) );
	$minutes = max( 1, (int) ceil( $words / 200 ) );
	return sprintf( _n( '%s min read', '%s min read', $minutes, 'forge' ), number_format_i18n( $minutes ) );
}

<?php

define( 'SIRWAN_ROOT_PATH', get_template_directory_uri() );

function sirwan_scripts() {
    wp_enqueue_style( 'sirwan-style', get_template_directory_uri() . '/dist/css/main.css' );
    wp_enqueue_script( 'sirwan-script', get_template_directory_uri() . '/dist/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'sirwan_scripts' );


function wpb_widgets_init() {

    register_sidebar( array(
        'name' => __( 'Footer 1', 'sirwan' ),
        'id' => 'footer_1',
        'description' => __( 'The first footer column', 'sirwan' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' =>__( 'Footer 2', 'sirwan'),
        'id' => 'footer_2',
        'description' => __( 'The second footer column', 'sirwan' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' =>__( 'Footer 3', 'sirwan'),
        'id' => 'footer_3',
        'description' => __( 'The third footer column', 'sirwan' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' =>__( 'Footer 4', 'sirwan'),
        'id' => 'footer_4',
        'description' => __( 'The fourth footer column', 'sirwan' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

}

add_action( 'widgets_init', 'wpb_widgets_init' );

// Theme Support
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'align-wide' );
add_theme_support( 'editor-styles' );

add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-logo' );
add_theme_support( 'menus' );
add_theme_support( 'responsive-embeds' );

add_theme_support( 'starter-content' );

add_theme_support( 'dark-editor-style' );
add_theme_support( 'disable-custom-colors' );
add_theme_support( 'disable-custom-font-sizes' );
add_theme_support( 'editor-font-sizes' );
add_theme_support( 'editor-styles' );
add_theme_support( 'wp-block-styles' );
add_theme_support( 'core-block-patterns' );



function sirwan_add_custom_gutenberg_color_palette() {
	add_theme_support(
		'editor-color-palette',
		[
			[
				'name'  => esc_html__( 'Teal', 'sirwan' ),
				'slug'  => 'teal',
				'color' => '#253944',
			],
			[
				'name'  => esc_html__( 'Cream', 'sirwan' ),
				'slug'  => 'cream',
				'color' => '#F0E1C8',
			],
			[
				'name'  => esc_html__( 'Baby Blue', 'sirwan' ),
				'slug'  => 'baby-blue',
				'color' => '#99BBCF',
			],
			[
				'name'  => esc_html__( 'white', 'sirwan' ),
				'slug'  => 'white',
				'color' => '#FCF9F6',
			],
			[
				'name'  => esc_html__( 'background', 'sirwan' ),
				'slug'  => 'background',
				'color' => '#f4e8d4',
			]

		]
	);
}
add_action( 'after_setup_theme', 'sirwan_add_custom_gutenberg_color_palette' );


function legit_block_editor_styles() {
wp_enqueue_style( 'legit-editor-styles', get_theme_file_uri( '/admin/css/style.css' ), false, '2.3', 'all' );}
add_action( 'enqueue_block_editor_assets', 'legit_block_editor_styles' );
 ?>

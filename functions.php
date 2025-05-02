<?php

function portfolio_enqueues() {

	wp_enqueue_style( 
		'portfolio-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' ),
		'all'
	);

    wp_enqueue_style( 
        'portfolio-normalize', 
        'https://unpkg.com/@csstools/normalize.css', 
        array(), 
        '12.1.0'
    );



}
add_action('wp_enqueue_scripts', 'portfolio_enqueues');

function enqueue_scroll_to_top_script() {
    wp_enqueue_script(
        'scroll-to-top',
        get_template_directory_uri() . '/js/scroll-to-section.js',
        array(),
        false,
        true
    );
}
add_action('wp_enqueue_scripts', 'enqueue_scroll_to_top_script');






require get_template_directory() . '/inc/post-types-taxonomies.php';
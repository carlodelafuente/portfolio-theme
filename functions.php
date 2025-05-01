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
        'school-normalize', 
        'https://unpkg.com/@csstools/normalize.css', 
        array(), 
        '12.1.0'
    );



}
add_action('wp_enqueue_scripts', 'portfolio_enqueues');





require get_template_directory() . '/inc/post-types-taxonomies.php';
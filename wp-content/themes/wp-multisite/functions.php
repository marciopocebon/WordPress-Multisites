<?php

function wp_theme_support() {
    add_theme_support('title-tag');
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'wp_theme_support');

register_nav_menus(array(
    'topo' => __('Menu no topo', 'wp-multisites')
));

function wp_cpt() {
    require_once get_template_directory() .  '/functions/cpt-testimonials.php';
    require_once get_template_directory() .  '/functions/cpt-highlights.php';
}
add_action('init', 'wp_cpt', 0);

add_theme_support( 'post-thumbnails' );
add_image_size( 'post-thumbnail', 1280, 720, true );
add_image_size( 'card-thumbnail', 500, 500, true );

add_filter( 'excerpt_length', function($length) {
	return 12;
});

add_filter('excerpt_more', function($more) {
	return '...';
});

register_sidebar(
	array(
		'name' => 'Busca',
		'id' => 'busca',
		'before_widget' => '<div class="card mb-5"><div class="card-body">',
		'after_widget' => '</div></div>',
		'before_title' => '<h5>',
		'after_title' => '</h5>'
	));

register_sidebar(
	array(
		'name' => 'Barra lateral',
		'id' => 'barra-lateral',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
	));
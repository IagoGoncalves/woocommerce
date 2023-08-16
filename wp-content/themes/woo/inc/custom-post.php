<?php 

/**
 * Insert Custom Post Type
 */

 //car
 function my_first_post_type(){
	$args = array(
		'labels' => array(
			'name' => 'Cars',
			'singular_name' => 'car',
		),
		'hierarchical' => true,
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-images-alt2',
		'support' => array('title', 'editor', 'thumbnail'),
		// 'rewrite' => array('slug' => 'my-cars'),
	);
	register_post_type('cars', $args);
 }
 add_action('init', 'my_first_post_type');

 function my_first_taxonomy(){
	$args = array(
		'labels' => array(
			'name' => 'Brands',
			'singular_name' => 'Brand',
		),
		'public' => true, 
		'hierarchical' => true,
	);
	register_taxonomy('brands', array('cars'), $args);
 }
 add_action('init', 'my_first_taxonomy');

 //food
 function my_second_post_type(){
	$args = array(
		'labels' => array(
			'name' => 'Foods',
			'singular_name' => 'food',
		),
		'hierarchical' => true,
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-images-alt2',
		'support' => array('title', 'editor', 'thumbnail'),
		// 'rewrite' => array('slug' => 'my-cars'),
	);
	register_post_type('foods', $args);
 }
 add_action('init', 'my_second_post_type');

 function my_second_taxonomy(){
	$args = array(
		'labels' => array(
			'name' => 'Brands1',
			'singular_name' => 'Brand1',
		),
		'public' => true, 
		'hierarchical' => true,
	);
	register_taxonomy('brands1', array('foods'), $args);
 }
 add_action('init', 'my_second_taxonomy');

 ?>
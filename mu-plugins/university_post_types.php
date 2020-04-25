<?php
//Event Post type
function university_post_types(){
	register_post_type('event', array(
		'supports' => array('title', 'editor', 'excerpt'),
		'rewrite' => array('slug' => 'events'),
		'public' => true,
		'has_archive' => true,
		'labels' => array(
			'name' => 'Events',
			'add_new_item' => 'Add new Events',
			'edit_item' => 'Edit Event',
			'all_items' => 'All Events',
			'singular_name' => 'Event'


		),
		'menu_icon' => 'dashicons-calendar'

));
//Program Post type
	register_post_type('program', array(
		'supports' => array('title', 'editor'),
		'rewrite' => array('slug' => 'programs'),
		'public' => true,
		'has_archive' => true,
		'labels' => array(
			'name' => 'Programs',
			'add_new_item' => 'Add new Programs',
			'edit_item' => 'Edit Programs',
			'all_items' => 'All Programs',
			'singular_name' => 'Program'


		),
		'menu_icon' => 'dashicons-awards'

));
}
add_action('init', 'university_post_types');

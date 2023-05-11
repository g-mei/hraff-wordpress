<?php

// Enable 'Featured Image' in post/page editor
add_theme_support( 'post-thumbnails' );

// Define 'Main Menu' as a selectable location in the menu editor
register_nav_menus( [ 'main-menu' => 'Main Menu' ] );

// Hook the default 'excerpt_length' action and run a custom function
add_filter( 'excerpt_length', 'custom_excerpt_length' );

// Return a custom length of 25 words 
function custom_excerpt_length() {
	return 25;
}

// Hook the default 'excerpt_more' action and run a custom function
add_filter( 'excerpt_more', 'custom_excerpt_link' );

// Return HTML to create a hyperlink that links to the full post
function custom_excerpt_link() {
	return ' <a href="'.get_permalink(). '">Read more...</a>';
}

// Adding CPTUI posts into search
function my_cptui_add_post_type_to_search( $query ) {
	if ( is_admin() ) {
		return;
	}

	if ( $query->is_search() ) {
		$cptui_post_types = cptui_get_post_type_slugs();
		$query->set(
			'post_type',
			array_merge(
				array( 'post' ), // May also want to add the "page" post type.
				$cptui_post_types
			)
		);
	}
}
add_filter( 'pre_get_posts', 'my_cptui_add_post_type_to_search' );

?>
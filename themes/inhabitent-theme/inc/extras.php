<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

// Remove "Editor" links from sub-menus
// function inhabitent_remove_submenus() {
//     remove_submenu_page( 'themes.php', 'theme-editor.php' );
//     remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
// }
// add_action( 'admin_menu', 'inhabitent_remove_submenus', 110 );


function inhabitent_products_modify_query( $query ) {
    if ( is_post_type_archive('product') || $query->is_tax('product_type') && $query->is_main_query() && !is_admin()) {
        $query->set( 'posts_per_page', 16);
        $query->set( 'order', 'ASC');
				$query->set( 'orderby', 'title' );
	  }    
}
add_action( 'pre_get_posts', 'inhabitent_products_modify_query' ); 




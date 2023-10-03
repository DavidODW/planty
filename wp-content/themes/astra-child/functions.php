<?php
/**
 * Recommended way to include parent theme styles.
 * (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 *
 */  

 add_action( 'wp_enqueue_scripts', 'astra_child_style' );
  function astra_child_style() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css',array('parent-style'));
}


/**
 * Your code goes below.
 */

 /*erreur ob_end_flush */
 remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
 add_action( 'shutdown', function() {
	while ( @ob_end_flush() );
 } );

 function header_nav_admin($items, $args) {
    if ($args->theme_location == 'primary' && is_user_logged_in()) { 
		$second_line = strpos($items, '</li');//vat chercher la premiere balise fermante de la liste//
        $admin_button = '<li class="header-nav-button"><a href="/planty/wp-admin/" >Admin</a></li>';
		$items =substr_replace($items, $admin_button, $second_line, 0);//place mon bouton aprés la premiére balise fermante de la liste//
    }
    return $items;
}

add_filter('wp_nav_menu_items', 'header_nav_admin', 10, 2);
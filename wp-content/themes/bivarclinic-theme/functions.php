<?php 

/**
 * Template: Functions.php 
 */

// Thumbnail support
add_theme_support('post-thumbnails', array('page', 'post', 'clients'));
add_theme_support('widgets');

function remove_menus(){
	remove_menu_page( 'upload.php' ); //Media - imagens, vídeos, docs, etc...
 	// remove_menu_page( 'themes.php' ); //Appearance - aparência (recomendo!)
 	remove_menu_page( 'edit-comments.php' ); //Comments - comentários
}
add_action( 'admin_menu', 'remove_menus' );
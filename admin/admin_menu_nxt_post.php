<?php



function next_post_admin_menu_function(){
	add_menu_page( 'Post Next Setings', 'Post Next', 'administrator', 'next_post_settings_page','next_post_admin_menu_frontend_page');
}

add_action('admin_menu','next_post_admin_menu_function');

?>
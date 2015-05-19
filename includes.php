<?php


	$nxt_post_plugin_enable = get_option('nxt_post_plugin_enable');
	if(!empty($nxt_post_plugin_enable)){
		include (get_option('nxt_post_option_template_select'));
	}
	
include 'admin/admin_menu_nxt_post.php';
include 'admin/admin_menu_nxt_post_page.php';
include 'admin/admin_menu_nxt_post_options_add.php';
include 'scripts/nxt_post_scripts_styles.php';


?>
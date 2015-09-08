<?php


register_activation_hook(__FILE__,'nxt_posts_p_add_options');

function nxt_posts_p_add_options(){
	//add_option( $option, $value, $deprecated, $autoload );

	add_option( 'nxt_post_option_template_select', 'themes/theme_1.php');
	add_option( 'nxt_post_plugin_enable');
}

add_action('wp_head','nxt_post_assing_var_to_options');

function nxt_post_assing_var_to_options(){
	//$option = get_option( $option, $default );

	$nxt_post_option_template_select = get_option( 'nxt_post_option_template_select');
	$nxt_post_plugin_enable = get_option('nxt_post_plugin_enable');
}


add_action('admin_init','nxt_post_register_options');
 function nxt_post_register_options(){

 	//register_setting( $option_group, $option_name);
 	register_setting( 'nxt_post_options_group_p', 'nxt_post_option_template_select');
 	register_setting('nxt_post_options_group_p','nxt_post_plugin_enable');
 

 }








?>
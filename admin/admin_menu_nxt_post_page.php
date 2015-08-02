<?php

function next_post_admin_menu_frontend_page(){
	?>
	<?php settings_fields( 'nxt_post_options_group_p' );?>
	<?php do_settings_sections( 'nxt_post_options_group_p' );?>

	<h1>Post Next Settings</h1>
	</br></br></br></br>

	<form method='post' action='options.php'>
		<?php settings_fields( 'nxt_post_options_group_p' );?>
	<?php do_settings_sections( 'nxt_post_options_group_p' );?>

	Enable : <input type='checkbox' name='nxt_post_plugin_enable' value='medium' <?php checked( "medium",get_option( 'nxt_post_plugin_enable')); ?>  ></br>
		Select Theme :
		<select name='nxt_post_option_template_select'>
			<option value='themes/theme_1.php' <?php selected( "themes/theme_1.php",get_option( 'nxt_post_option_template_select')); ?> >Theme-1</option>
			<option value='themes/theme_2.php' <?php selected( "themes/theme_2.php",get_option( 'nxt_post_option_template_select')); ?> >Theme-2</option>
			<option value='themes/theme_3.php' <?php selected( "themes/theme_3.php",get_option( 'nxt_post_option_template_select')); ?> >Theme-3</option>
			<option value='themes/theme_4.php' <?php selected( "themes/theme_4.php",get_option( 'nxt_post_option_template_select')); ?> >Theme-4</option>
		</select>
		


		<?php submit_button(); 
		?>
	</form>



	<?php
}



?>
<?php 

add_action('init','next_post_scripts');

function next_post_scripts(){

  wp_enqueue_script('nxt_post_script1',plugins_url('nxt_post_script.js',__FILE__),array( 'jquery' ));


}

?>
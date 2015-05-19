<?php

add_filter('the_content','up_nxt_post');

function up_nxt_post($content){
$prev_post = get_previous_post();
$next_post = get_next_post();
add_theme_support( 'post-thumbnails' );
$nxt_post_current_post_type = get_post_type();

if($nxt_post_current_post_type === 'post') {

?>

<style type="text/css">
  	#nxt_pst_wrap{
      max-width: 100%;
      position: fixed;
      bottom: 0;
      right: 0;
      z-index: 99999;

  	}
    #nxt_pst_inner_wrap{
      padding:-5px 3px 3px 3px;

      max-width: 100%;
      background-color: #fff;
      border-bottom: 6px solid #d0d0d0;
      border-right: 4px solid #d0d0d0;
      margin: 10px;
    }
  	#nxt_pst_content{
  		margin: 0px 10px 10px 10px;
      margin-bottom: -10px;

  	}
    
  
   
    #pre_nxt_p_open{
      background: #d0d0d0;
      text-align: center;
      width: 60px;
      display: none;
      margin-bottom: -20px;
      opacity:0.35;
      cursor: pointer;
    }
    #pre_nxt_p_open:hover{
      opacity: 1;

    }
    .nxt_post_h5{
      background: #444444;
      padding: 5px;
      font-size: 17px;
      font-weight: 100;
      color: #fff;
    }
    



  </style>
  <?php

if (!empty( $next_post )){  
	?>
  
  <div id='nxt_pst_wrap'>
    <div id='pre_nxt_p_open'>
    <p id='nxt_p_close'>Open</p>
  </div>
    <div id='nxt_pst_inner_wrap'>
    <a href="<?php echo get_permalink( $next_post->ID ); ?>"><h5 class='nxt_post_h5'>Next Post</h5></a>
  	<div id='nxt_pst_content'>
    
  	 <a href="<?php echo get_permalink( $next_post->ID ); ?>"><b><?php echo $next_post->post_title; ?></b><br></a><p><?php ?></p></div>
    </div>
  </div>
<?php
	}

else{ 
	?>

	<div id='nxt_pst_wrap'>
    <div id='pre_nxt_p_open'>
    <p id='nxt_p_close'>Open</p>
  </div>
    <div id='nxt_pst_inner_wrap'>
    <a href="<?php echo get_permalink( $next_post->ID ); ?>"><h5 class='nxt_post_h5'>Previous Post</h5></a>
    <div id='nxt_pst_content'>

     <a href="<?php echo get_permalink( $prev_post->ID ); ?>"><?php echo $prev_post->post_title; ?><br></a><p><?php ?></p></div>
    </div>
  </div>

<?php	
	}
	

}
return $content;

}

?>
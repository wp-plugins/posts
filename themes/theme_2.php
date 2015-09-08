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
      padding:5px;
      max-width: 100%;
      background-color: #fff;
      text-align: center;
      border: 5px solid rgba(220,220,220,0.38);
      border-radius: 10px;
      border-right: 15px;
    }
  	#nxt_pst_content{
  		margin: 10px 10px 10px 10px;
  		padding: 10px;
      margin-top: -10px;
  	}
    #pre_nxt_p_close{
      background: #d0d0d0;
      width: 60px;
      margin-bottom: -20px;
      opacity:0.3;
      cursor: pointer;
    }
    #pre_nxt_p_close:hover{
      opacity: 1;

    }
    #pre_nxt_p_open{
      background: #d0d0d0;
      text-align: center;
      width: 60px;
      display: none;
      margin-bottom: -20px;
      opacity:0.3;
      cursor: pointer;
    }
    #pre_nxt_p_open:hover{
      opacity: 1;

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
    <div id='pre_nxt_p_close'>
    <p id='nxt_p_close'>Close</p>
  </div>
    <a href="<?php echo get_permalink( $next_post->ID ); ?>"><h3>Next Post</h3></a>
  	<div id='nxt_pst_content'>
     

  		<?php 

  		if ( has_post_thumbnail( $next_post->ID ) ) {
		echo '<a href="' . get_permalink( $next_post->ID ) . '" title="' . esc_attr( $next_post->post_title ) . '">';
		echo get_the_post_thumbnail( $next_post->ID, 'thumbnail' );
		echo '</a><br/>';
	}

  	 ?>
  	 <a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo $next_post->post_title; ?><br></a><p><?php ?></p></div>
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
    <div id='pre_nxt_p_close'>
    <p id='nxt_p_close'>Close</p>
  </div>
    <a href="<?php echo get_permalink( $prev_post->ID ); ?>"><h3>Previous Post</h3></a>
    <div id='nxt_pst_content'>

      <?php 

      if ( has_post_thumbnail( $prev_post->ID ) ) {
    echo '<a href="' . get_permalink( $prev_post->ID ) . '" title="' . esc_attr( $prev_post->post_title ) . '">';
    echo get_the_post_thumbnail( $prev_post->ID, 'thumbnail' );
    echo '</a><br/>';
  }

     ?>
     <a href="<?php echo get_permalink( $prev_post->ID ); ?>"><?php echo $prev_post->post_title; ?><br></a><p><?php ?></p></div>
    </div>
  </div>

<?php	
	}
	

}
return $content;

}

?>
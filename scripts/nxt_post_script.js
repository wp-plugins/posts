jQuery(document).ready(function(){


	jQuery('#pre_nxt_p_close').click(function() {
		jQuery('#nxt_pst_inner_wrap').hide('slow', function() {
			jQuery('#pre_nxt_p_open').show('slow').click(function() {
				jQuery('#nxt_pst_inner_wrap').show('slow');
				jQuery('#pre_nxt_p_open').hide();
			});
		});
	});
			    

			var doc_height = jQuery(document).height();
			var height_half = doc_height /5;
			jQuery(window).scroll(function() {
			  
			  
			   if(jQuery(this).scrollTop()<= height_half) {
			       jQuery('#nxt_pst_wrap').hide(300);
			       }
			       else{
			   jQuery('#nxt_pst_wrap').show(300); }

			   });
			    

			});




   
  





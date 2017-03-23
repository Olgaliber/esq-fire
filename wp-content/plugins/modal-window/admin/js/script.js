jQuery(document).ready(function($) {
	//* Vertical table
	$('.tab-nav li:first').addClass('select'); 
	$('.tab-panels>div').hide().filter(':first').show();    
	$('.tab-nav a').click(function(){
		$('.tab-panels>div').hide().filter(this.hash).show(); 
		$('.tab-nav li').removeClass('select');
		$(this).parent().addClass('select');
		return (false); 
	})
	
	$('[name="modal_height_par"]').click(function(){		
		var height_par = $('input[name="modal_height_par"]:checked').val();		
		if (height_par == 'auto'){
			$('[name="modal_height"]').val('');
			$('[name="modal_height"]').attr("disabled", "disabled");			
		}
		else {
			$('[name="modal_height"]').val('0');
			$('[name="modal_height"]').removeAttr("disabled");
		}
	});
	$('.tab-box').after('<span style="float:right;"><a href="https://wow-estore.com/en/wow-modal-windows-pro/?ref=1" target="_blank">GET PRO VERSION</a></span>');
	wpchange();
	displaybutton();
});
function wpchange(){
		var change = jQuery('#modal_show').val();
		jQuery('#wpchange1').css('display', 'none');
		jQuery('#wpchange2').css('display', 'none');
		if (change == 'click'){
			jQuery('#wpchange1').css('display', 'block');
		}
		if (change == 'anchor'){
			jQuery('#wpchange2').css('display', 'block');
		}		
		
	}
function displaybutton(){
	var show = jQuery('[name="umodal_button"]').val();
		if (show == 'yes'){			
			jQuery('.showbutton').css('display', '');			
		}
		else {			
			jQuery('.showbutton').css('display', 'none');
		}
}
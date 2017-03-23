jQuery(document).ready(function($) {	
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
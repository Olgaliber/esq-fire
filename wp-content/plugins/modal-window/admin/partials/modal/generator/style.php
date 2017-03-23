
 #wow-modal-overlay-<?php echo $val->id;?> {
	 top: 0; 
	 right: 0; 
	 bottom: 0; 
	 left: 0; 
	 z-index: 99999; 
	 background-color: rgba(0, 0, 0, 0.7); 
	 position: fixed; 
	 cursor: default; 
	 display: none; 
	 width: 100%; 
	 height: 100%; 
	 overflow: auto;	  
} 
#wow-modal-overclose-<?php echo $val->id;?> {
	top: 0; 
	right: 0; 
	bottom: 0; 
	left: 0; 
	z-index: 99999; 
	cursor: default;		
	width: 100%; 
	height: 100%; 
} 

#wow-modal-window-<?php echo $val->id;?>{
	width:<?php if(empty($val->modal_width )){echo "662";}else{echo $val->modal_width;}?><?php if($val->modal_width_par == 'pr'){echo "%";}else{echo 'px';}?>; 
	padding:10px; 
	border: 0px solid #000000; 
	z-index:99999; 
	position: fixed; 
	top:20%;	
	left:0%;
	right:0%;
	border-radius:5px; 
	margin: auto; 
	display: none;	
	height: <?php if(empty($val->modal_height)){echo "auto";}else{
	if (empty($val->modal_height_par)) {
		echo $val->modal_height.'px';
	}
	if ($val->modal_height_par == 'px') {
		echo $val->modal_height.'px';
	}
	if ($val->modal_height_par == 'pr') {
		echo $val->modal_height.'%';
	}
	if ($val->modal_height_par == 'auto') {
		echo 'auto';
	}	
	}?>;
	<?php if(empty($val->modal_height) || $val->modal_height_par == 'auto'){echo "margin-bottom:40px;";} ?>
	background: #ffffff;	
}
#wow-modal-close-<?php echo $val->id; ?> {
	position: absolute; 
	top: -15px; 
	right: -15px;	 
	font-size: 14px; 	
	font-weight: bold; 
	cursor:pointer; 
	display: none; 
} 

#close-circle-<?php echo $val->id; ?>{
	color: #000000;
}
#close-times-<?php echo $val->id; ?>{
	color: #ffffff;
}
.wow-modal-botton-<?php echo $val->id; ?> {
	text-decoration: none;
	color: white;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	-o-border-radius: 4px;
  -ms-border-radius: 4px;
	border-radius: 4px;
	padding: 14px 14px 12px;
	line-height: 14px;
	float: none;
	text-shadow: none;
	cursor:pointer;
	z-index: 9999;
	background: #383838; 
}
.wow-modal-botton-<?php echo $val->id; ?>:hover {	
	background: #797979; 
}

@media only screen and (max-width: <?php if(empty($val->screen_size)){echo "1024";} else {echo $val->screen_size;} ?>px){
#wow-modal-window-<?php echo $val->id;?> {
    max-width:<?php if(empty($val->mobile_width)){echo "85";} else { echo $val->mobile_width;} ?><?php if($val->mobile_width_par == 'pr'){echo "%";}else{echo 'px';}?>;
}
}
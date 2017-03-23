<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<?php include ('include/data.php'); ?>
<h2><?php esc_attr_e("Shortcode", "wow-marketings") ?> <?php esc_attr_e("for Modal Window", "wow-marketings") ?> : <?php echo "[Wow-Modal-Windows id=$id]"; ?></h2>
<form action="admin.php?page=wow-modalsimple" method="post" id="addtag">
	
	
	<div class="wowcolom">
		
		<div id="wow-leftcol">
			
			<div class="wow-admin">
				<input  placeholder="Name is used only for admin purposes" type='text' name='title' value="<?php echo $title; ?>" class="input-100 wow-title"/>
			</div>
			
			<div class="wow-admin">
				<?php wp_editor(stripcslashes($content), 'content', $settings); ?>
			</div>
			
			<div class="tab-box wow-admin">
				
				<ul class="tab-nav">
					<li><a href="#t1"><i class="fa fa-css3" aria-hidden="true"></i> <?php esc_attr_e("Style", "wow-marketings") ?></a></li>
					<li><a href="#t2"><i class="fa fa-mobile" aria-hidden="true"></i> <?php esc_attr_e("Mobile style", "wow-marketings") ?></a></li>
					<li><a href="#t3"><i class="fa fa-times-circle" aria-hidden="true"></i> <?php esc_attr_e("Close Button", "wow-marketings") ?></a></li>
					<li><a href="#t4"><i class="fa fa-eye" aria-hidden="true"></i> <?php esc_attr_e("Display", "wow-marketings") ?></a></li>
					<li><a href="#t5"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> <?php esc_attr_e("Animation", "wow-marketings") ?></a></li>	
					<li><a href="#t6"><i class="fa fa-hand-pointer-o" aria-hidden="true"></i> <?php esc_attr_e("Button", "wow-marketings") ?></a></li>
					<li><a href="#t7"><i class="fa fa-flag-o" aria-hidden="true"></i> <?php esc_attr_e("Icons", "wow-mwp-lang") ?></a></li> 
					<li><a href="#t8"><i class="fa fa-product-hunt" aria-hidden="true"></i> <?php esc_attr_e("Pro version", "wow-marketings") ?></a></li>
				</ul>
				
				<div class="tab-panels">
					
					<div id="t1">
						
						<div class="wow-admin-col">
							
							<div class="wow-admin-col-4">
								<?php esc_attr_e("Width", "wow-marketings") ?>:<br/><input type='text' placeholder="662"  name='modal_width' value="<?php echo $modal_width; ?>" style="margin-bottom:5px;"/><br/> <input name="modal_width_par" type="radio" value="px" <?php if($modal_width_par=='px') { echo 'checked="checked"'; } ?>>px <input name="modal_width_par" type="radio" value="pr" <?php if($modal_width_par=='pr') { echo 'checked="checked"'; } ?>>%
							</div>
							
							<div class="wow-admin-col-4">
								<?php esc_attr_e("Height", "wow-marketings") ?>:<br/> 
								<input type='text' placeholder="auto" name='modal_height' value="<?php echo $modal_height; ?>" style="margin-bottom:5px;"/><br/> <input name="modal_height_par" type="radio" value="auto" <?php if($modal_height_par=='auto') { echo 'checked="checked"'; } ?>>auto <input name="modal_height_par" type="radio" value="px" <?php if($modal_height_par=='px') { echo 'checked="checked"'; } ?>>px <input name="modal_height_par" type="radio" value="pr" <?php if($modal_height_par=='pr') { echo 'checked="checked"'; } ?>>%	
							</div>   
							
						</div>
						
					</div>
					
					
					<div id="t2">
						
						<div class="wow-admin-col">
							<div class="wow-admin-col-6">
								<?php esc_attr_e("Trigger for screens less than", "wow-marketings") ?>:<br/>
								<input type='text' placeholder="1024" name='screen_size' value="<?php echo $screen_size; ?>"/> px
							</div>
							<div class="wow-admin-col-6">
								<?php esc_attr_e("Width", "wow-marketings") ?>: <br/>
								<input type='text' placeholder="85" name='mobile_width' value="<?php echo $mobile_width; ?>"/> <br/> <input name="mobile_width_par" type="radio" value="px" <?php if($mobile_width_par=='px') { echo 'checked="checked"'; } ?>>px <input name="mobile_width_par" type="radio" value="pr" <?php if($mobile_width_par=='pr' || $mobile_width_par =='') { echo 'checked="checked"'; } ?>>%
							</div>	
							
						</div>
						
					</div>
					
					
					<div id="t3">
						
						<div class="wow-admin-col">
							<div class="wow-admin-col-6">
								<?php esc_attr_e("Select a type", "wow-marketings") ?>:<br> 
								<select name="close_type" onclick="typeclose();">
									<option value="image" <?php if($close_type=='image') { echo 'selected="selected"'; } ?>><?php esc_attr_e("Image", "wow-marketings") ?></option>		 	
								</select>	
							</div>
							
							<div class="wow-admin-col-6">
								<?php esc_attr_e("Also enable closing on", "wow-marketings") ?>:<br>
								<?php esc_attr_e("Overlay", "wow-marketings") ?> <input name="close_button_overlay" type="checkbox" value="1" <?php if(!empty($close_button_overlay)) { echo 'checked="checked"'; } ?>> Esc  <input name="close_button_esc" type="checkbox" value="1" <?php if(!empty($close_button_esc)) { echo 'checked="checked"'; } ?>>
							</div>
						</div>
						
						
					</div>
					
					<div id="t4">
						
						<div class="wow-admin-col">
							
							<div class="wow-admin-col-12">
								<?php esc_attr_e("Show a modal window", "wow-marketings") ?>:<br/>
								<select name='modal_show' id="modal_show" onchange="wpchange();">        
									<option value="load" <?php if($modal_show=='load') { echo 'selected="selected"'; } ?>><?php esc_attr_e("When the page loads", "wow-marketings") ?></option>
									<option value="click" <?php if($modal_show=='click') { echo 'selected="selected"'; } ?>><?php esc_attr_e("Click on a link (with id)", "wow-marketings") ?></option>
									<option value="anchor" <?php if($modal_show=='anchor') { echo 'selected="selected"'; } ?>><?php esc_attr_e("Click on a link (with an #anchor link)", "wow-marketings") ?></option>
									<option value="scroll" <?php if($modal_show=='scroll') { echo 'selected="selected"'; } ?>><?php esc_attr_e("When the window is scrolled", "wow-marketings") ?></option>
									<option value="close" <?php if($modal_show=='close') { echo 'selected="selected"'; } ?>><?php esc_attr_e("When the user tries to leave the page", "wow-marketings") ?></option>		
								</select><br/>
								<div id="wpchange1" style="display:none; width:80%;"><?php echo __("Add an <b>id='wow-modal-id-X'</b> to the link, where X is the number of the modal window", "wow-marketings") ?></div>
								<div id="wpchange2" style="display:none; width:80%;"><?php echo __("Add an anchor to the link: <b>a href='#wow-modal-id-X'</b>, where X is the number of the modal window", "wow-marketings") ?></div>
							</div>
							
							<div class="wow-admin-col-4">
								<?php esc_attr_e("Show only once? (use cookies)", "wow-marketings") ?>:<br/>
								<select name='use_cookies'>
									<option value="no" <?php if($use_cookies=='no') { echo 'selected="selected"'; } ?>><?php esc_attr_e("no", "wow-marketings") ?></option>
									<option value="yes" <?php if($use_cookies=='yes') { echo 'selected="selected"'; } ?>><?php esc_attr_e("yes", "wow-marketings") ?></option>        
								</select>
							</div>
							<div class="wow-admin-col-4">
								<?php esc_attr_e("Reset in", "wow-marketings") ?>:<br/>
								<input type='text'  placeholder="5" name='modal_cookies' value="<?php echo $modal_cookies; ?>"/> <?php esc_attr_e("days", "wow-marketings") ?>
							</div>
							<div class="wow-admin-col-4"><?php esc_attr_e("Delay", "wow-marketings") ?>:<br/>
								<input type='text'  placeholder="0" name='modal_timer' value="<?php echo $modal_timer; ?>"/> <?php esc_attr_e("seconds", "wow-marketings") ?>
							</div>
							
							
						</div>
						
						
					</div>
					
					
					<div id="t5">
						<div class="wow-admin-col">
							<a href="https://wow-estore.com/en/wow-modal-windows-pro/?ref=1" target="_blank">Only in the pro version of plugin</a>
						</div>
						
					</div>
					
					<div id="t6">
						<div class="wow-admin-col">
							
							<div class="wow-admin-col-4">
								<?php esc_attr_e("Show button", "wow-marketings") ?>:<br/>
								<select name='umodal_button' onchange="displaybutton();">
									<option value="no" <?php if($umodal_button=='no') { echo 'selected="selected"'; } ?>><?php esc_attr_e("no", "wow-marketings") ?></option>
									<option value="yes" <?php if($umodal_button=='yes') { echo 'selected="selected"'; } ?>><?php esc_attr_e("yes", "wow-marketings") ?></option> 
								</select>
							</div>
							
							<div class="wow-admin-col-4 showbutton">
								<?php esc_attr_e("Button position", "wow-marketings") ?>:<br/>
								<select name='umodal_button_position'>
									<option value="wow_modal_button_right" <?php if($umodal_button_position=='wow_modal_button_right') { echo 'selected="selected"'; } ?>><?php esc_attr_e("right", "wow-marketings") ?></option>
									<option value="wow_modal_button_left" <?php if($umodal_button_position=='wow_modal_button_left') { echo 'selected="selected"'; } ?>><?php esc_attr_e("left", "wow-marketings") ?></option>
									<option value="wow_modal_button_top" <?php if($umodal_button_position=='wow_modal_button_top') { echo 'selected="selected"'; } ?>><?php esc_attr_e("top", "wow-marketings") ?></option>
									<option value="wow_modal_button_bottom" <?php if($umodal_button_position=='wow_modal_button_bottom') { echo 'selected="selected"'; } ?>><?php esc_attr_e("bottom", "wow-marketings") ?></option>
								</select>
							</div>
							
							<div class="wow-admin-col-4 showbutton">
								<?php esc_attr_e("Button's text", "wow-marketings") ?>:<br/>
								<input type="text" name="umodal_button_text" value="<?php echo $umodal_button_text; ?>" placeholder="Feedback"/>
							</div>
							
						</div>	
					</div>
					
					<div id="t7">
					<div class="wow-admin-col">
							<a href="https://wow-estore.com/en/wow-modal-windows-pro/?ref=1" target="_blank">Only in the pro version of plugin</a>
						</div>
					
					</div>
					
					<div id="t8">
						
						<div class="wow-admin-col">
							<h3>Get more from the Pro version:</h3>
							<div class="wow-admin-col-6">
								
								<b>Style setting:</b>
								<ul>
									<li>Padding</li>
									<li>Z-index</li>
									<li>Background image</li>
									<li>Position</li>
									<li>Top position</li>
									<li>Bottom position</li>
									<li>Left position</li>
									<li>Right position</li>	 
									<li>Overlay</li>
									<li>Border width</li>
									<li>Border radius</li>     
									<li>Background color</li>
									<li>Border color</li>
									
								</ul>
								<b>Display setting:</b>  
								<ul>
									<li>Reach for scroll</li>     
									<li>Animate In</li>
									<li>Animation duration</li>
									<li>Animate Out</li>
									<li>Animation duration</li>
								</ul>
								<b>Create icons:</b>  
								<ul>
									<li>900+ Font Awesome icons</li>     
									<li>Icon generator</li>
									<li>Insert icon into a modal window</li>     
								</ul>
							</div>
							<div class="wow-admin-col-6">
								<b>Close button setting:</b>
								<ul>
									<li>Type close button</li>
									<li>Content:</li>
									<li>Size</li>
									<li>Top position</li>
									<li>Right position</li>
									<li>Padding top & bottom</li>
									<li>Padding left & right</li>
									<li>Border width</li>
									<li>Border radius</li>
									<li>Delay</li>
									<li>Background color</li>
									<li>Color</li>
									<li>Border color</li>
								</ul>
								<b>Other settings:</b>
								<ul>  
									<li>Button color;</li>
									<li>Button hover color;</li>
									<li>Show for users : for authorized or unauthorized site users;</li>
									<li>Depending on the language</li>
									<li>Show after popup</li>
									<li>Modal Windows display can be carried out on all the pages in all the website publications indicating the specified exceptions, choosing pages/posts by the set id or inserted shortcode at the same time.</li>
								</ul>
								
							</div>
							
						</div>
						
					</div>
					
					
				</div>
			</div>
			
		</div>
		
		
		<div id="wow-rightcol">
			<div class="wowbox">
				<h3><?php esc_attr_e("Publish", "wow-marketings") ?></h3>
				<div class="wow-admin" style="display: block;">
					<div class="wowcolom">
						<div style="float:left;">
							<?php if ($id != ""){ echo '<p class="wowdel"><a href="admin.php?page=wow-modalsimple&info=del&did='.$id.'">Delete</a></p>';}; ?>
						</div>
						<div style="float:right;">
							<p/>
							<input name="submit" id="submit" class="button button-primary" value="<?php echo $btn; ?>" type="submit">
						</div>
					</div>	
				</div>
			</div>
			
			<div class="wowbox">
				<h3><?php esc_attr_e("Shortcode", "wow-marketings") ?></h3>
				<div class="inside wow-admin" style="display: block;">
					<p/>
					<div class="wow-admin-col-12">
						<b>[Wow-Modal-Windows id=<?php echo $id; ?>]</b>
					</div>
					
				</div>
			</div>
			
			<div class="wowbox">
				<h3><i class="fa fa-plug" aria-hidden="true"></i> <?php esc_attr_e("Well use with", "wow-fp-lang") ?>:</h3>
				<div class="wow-admin wow-plugins">
					<ul>						
						<li><a href="https://wordpress.org/plugins/side-menu/" target="_blank">Side Menu</a></li>
						<li><a href="https://wordpress.org/plugins/mwp-forms/" target="_blank">Forms</a></li>
						<li><a href="https://wordpress.org/plugins/mwp-countdown/" target="_blank">Countdowns</a></li>	
						<li><a href="https://wordpress.org/plugins/mwp-herd-effect/" target="_blank">Herd Effect</a></li>
						<li><a href="https://wordpress.org/plugins/wow-facebook-login/" target="_blank">Facebook Login</a></li>	
					</ul>
				</div>
			</div>
			
			<div class="wowbox">
				
				<div class="wow-admin">
					<div class="wow-admin-col-12">
						<center><a href='http://wow-company.com/' target="_blank"><img src="<?php echo plugin_dir_url(__FILE__). 'img/icon.png' ?>"></a></center>
					</div>
					
					<div class="wow-admin-col-12 wowicon">						
						<a href='https://www.facebook.com/wowaffect/' title="Join Us on Facebook" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>												
						<a href='https://wpbiker.com/' target="_blank" title="Blog"><img src="<?php echo plugin_dir_url(__FILE__). 'img/wpbiker.png' ?>"></a>
						<a href='https://wow-estore.com' target="_blank" title="Wow-Estore"><img src="<?php echo plugin_dir_url(__FILE__). 'img/estore.png' ?>"></a>
						<a href='https://wpcalc.com/' target="_blank" title="Online Calculators"><img src="<?php echo plugin_dir_url(__FILE__). 'img/wpcalc.png' ?>"></a>
						
					</div>
					
				</div>
			</div>
			
			
			
			
			
		</div>
	</div>
	
	
	
    <input type="hidden" name="addwow" value="<?php echo $hidval; ?>" />    
    <input type="hidden" name="id" value="<?php echo $id; ?>" />
	<input type="hidden" name="wowpage" value="<?php echo $wowpage; ?>" />
	<input type="hidden" name="wowtable" value="<?php echo $table_modal; ?>" />
	<input type="hidden" name="tool" value="modal" />	
	<input type="hidden" name="plugdir" value="<?php echo WOW_MODALSIMPLE_PLUGIN_BASENAME; ?>" />	
	<?php wp_nonce_field('wow_new_action','wow_new_nonce_field'); ?>	
</form>

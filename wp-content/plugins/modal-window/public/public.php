<?php if ( ! defined( 'ABSPATH' ) ) exit;
	
	//* Shortcode
	add_shortcode('Wow-Modal-Windows', 'show_wow_modal_windows_free');
	function show_wow_modal_windows_free($atts) {
		extract(shortcode_atts(array('id' => ""), $atts));		
		global $wpdb;
		$table = $wpdb->prefix . "modalsimple";    
		$sSQL = $wpdb->prepare("select * from $table WHERE id = %d", $id);
		$arrresult = $wpdb->get_results($sSQL); 	
		if (count($arrresult) > 0) {
			foreach ($arrresult as $key => $val) {			
				ob_start();
				include( 'partials/public.php' );
				$path_style = WOWMODAL_PLUGIN_DIR.'/asset/modal/css/style-'.$val->id.'.css';
				$path_script = WOWMODAL_PLUGIN_DIR.'/asset/modal/js/script-'.$val->id.'.js';
				$file_style = WOWMODAL_PLUGIN_DIR.'/admin/partials/modal/generator/style.php';
				$file_script = WOWMODAL_PLUGIN_DIR.'/admin/partials/modal/generator/script.php';
				if (file_exists($file_style) && !file_exists($path_style)){
					ob_start();
					include ($file_style);
					$content_style = ob_get_contents();
					ob_end_clean();
					file_put_contents($path_style, $content_style);
				}			
				if (file_exists($file_script) && !file_exists($path_script)){
					ob_start();
					include ($file_script);
					$content_script = ob_get_contents();
					$packer = new JavaScriptPacker($content_script, 'Normal', true, false);
					$packed = $packer->pack();
					ob_end_clean();
					file_put_contents($path_script, $packed);				
				}			
				
				$popup = ob_get_contents();
				ob_end_clean();
				
				if ($val->use_cookies == 'yes'){
					$namecookie = 'wow-modal-id-'.$val->id;
					if (!isset($_COOKIE[$namecookie])){					
						$popupcookie = true;
					}
					else {
						$popupcookie = false;
					}					
				}
				if ($val->use_cookies == 'no'){
					$popupcookie = true;
				}				
				
				if ($popupcookie == true) {
					echo $popup;
					if (file_exists($path_style)) {
						wp_enqueue_style( 'wow-modal-window-style-'.$val->id, WOWMODAL_PLUGIN_URL. 'asset/modal/css/style-'.$val->id.'.css');	
					}
					if (file_exists($path_script)) {					
						wp_enqueue_script( 'wow-modal-window-script-'.$val->id, WOWMODAL_PLUGIN_URL. 'asset/modal/js/script-'.$val->id.'.js', array( 'jquery' ) );
					}
					wp_enqueue_style( 'font-awesome', WOWMODAL_PLUGIN_URL . 'asset/font-awesome/css/font-awesome.min.css', array(), '4.7.0' );
					wp_enqueue_style( 'main-style-wow-modal', plugin_dir_url( __FILE__ ) . 'css/style.css');
				}
			}
			
			} else {		
			echo "<p><strong>No Records</strong></p>";        
		}  
		
		return ;
	}
	
	//* Set cookies, if use 
	add_action( 'init', 'setcookie_wow_modal_windows_free' );
    function setcookie_wow_modal_windows_free() {
		global $wpdb;
		$table = $wpdb->prefix . "modalsimple";  
		$arrresult = $wpdb->get_results("SELECT * FROM " . $table . " order by id asc");
		if (count($arrresult) > 0) {
			foreach ($arrresult as $key => $val) {				
				if ($val->use_cookies == 'yes'){
					$namecookie = 'wow-modal-id-'.$val->id;
					if (!isset($_COOKIE[$namecookie]) && empty($val->after_popup)){
						if ($val->modal_cookies == ""){
							$modal_cookies = 1;
						}
						else {
							$modal_cookies = $val->modal_cookies;
						}
						$cookietime = time()+60*60*24*$modal_cookies;						
						setcookie( $namecookie, 'yes', $cookietime, '/' );
					}
					else if (!isset($_COOKIE[$namecookie]) && !empty($val->after_popup) && isset($_COOKIE[$val->popup])){
						if ($val->modal_cookies == ""){
							$modal_cookies = 1;
						}
						else {
							$modal_cookies = $val->modal_cookies;
						}
						$cookietime = time()+60*60*24*$modal_cookies;
						setcookie( $namecookie, 'yes', $cookietime );
						
					}
				}									
			}
		}
	}	
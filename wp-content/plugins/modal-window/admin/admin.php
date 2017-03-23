<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<?php
	function wow_modalsimple_admin_menu() {	
		add_menu_page('Modal Window', __( "Modal Window", "wow-marketings"), 'manage_options', 'wow-modalsimple', 'wow_modalsimple', 'dashicons-images-alt2', null);
		add_action('admin_print_styles', 'wow_new_script_style_free');	
	}
	add_action('admin_menu', 'wow_modalsimple_admin_menu', 999);
	function wow_modalsimple() {
		global $wow_plugin;	
		$wow_plugin = true;
		include_once( 'partials/modal.php' );
		wp_enqueue_script('jquery-add-modalsimple', plugin_dir_url(__FILE__) . 'js/script.js', array('jquery'));		 	
		
	}
	
	if ( ! function_exists ( 'wow_new_script_style_free' ) ) {
		function wow_new_script_style_free() {
			wp_enqueue_style('wow-new-style', plugin_dir_url(__FILE__) . 'css/style.css'); 	
			wp_enqueue_style( 'font-awesome', WOWMODAL_PLUGIN_URL . 'asset/font-awesome/css/font-awesome.min.css', array(), '4.7.0' );
		}
	}
	
	if ( ! function_exists ( 'wow_new_nonce_chek' ) ) {
		function wow_new_nonce_chek(){
			if (isset($_POST['wow_new_nonce_field'])) {				
				if ( !empty($_POST) && wp_verify_nonce($_POST['wow_new_nonce_field'],'wow_new_action') && current_user_can('manage_options')){
					wow_run_wowdata();
				}
			}
		}
		add_action( 'plugins_loaded', 'wow_new_nonce_chek' );
		
		function wow_run_wowdata(){
			$objItem = new WOWDATA();
			$addwow = (isset($_REQUEST["addwow"])) ? sanitize_text_field($_REQUEST["addwow"]) : '';
			$table_name = sanitize_text_field($_REQUEST["wowtable"]);
			$wowpage = sanitize_text_field($_REQUEST["wowpage"]);
			$id = sanitize_text_field($_POST['id']);
			/*  Save and update Record on button submission */		
			if (isset($_POST["submit"])) {	
				if (sanitize_text_field($_POST["addwow"]) == "1") {
					$objItem->addNewItem($table_name, $_POST);			
					header("Location:admin.php?page=".$wowpage."&info=saved");
					exit;		
					} else if (sanitize_text_field($_POST["addwow"]) == "2") {
					$objItem->updItem($table_name, $_POST);				
					header("Location:admin.php?page=".$wowpage."&wow=add&act=update&id=".$id."&info=update");		
					exit;
				}
				}
			}
		}
		
		if ( ! function_exists ( 'wow_plugins_admin_footer_text' ) ) {
			function wow_plugins_admin_footer_text( $footer_text ) {
				global $wow_plugin;
				if ( $wow_plugin == true ) {
					$rate_text = sprintf( '<span id="footer-thankyou">Developed by <a href="http://wow-company.com/" target="_blank">Wow-Company</a> | <a href="https://wordpress.org/support/plugin/modal-window" target="_blank">Support </a> | <a href="https://wow-estore.com/" target="_blank">Wow-Estore</a></span>'
					);
					return str_replace( '</span>', '', $footer_text ) . ' | ' . $rate_text . '</span>';
				}
				else {
					return $footer_text;
				}	
			}
			add_filter( 'admin_footer_text', 'wow_plugins_admin_footer_text' );
		}		
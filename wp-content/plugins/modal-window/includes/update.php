<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<?php
global $wpdb;
$wpdb->mwp_modal_free = $wpdb->prefix . 'mwp_modal_free';
require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
$sql = "CREATE TABLE " . $wpdb->mwp_modal_free . " (   
  modal_width TEXT,
  modal_width_par TEXT,
  modal_height TEXT,
  modal_height_par TEXT,  
) DEFAULT CHARSET=utf8;";
dbDelta($sql);

function wow_update_mwp_modal_free_asset (){
global $wpdb;
$table_ids = $wpdb->get_col(
	"SELECT id FROM $wpdb->mwp_modal_free"
);
if ($table_ids) {
	foreach ($table_ids as $id) {		
		$wowid = $id;            		
			$SQL = $wpdb->prepare("select * from ".$wpdb->mwp_modal_free." WHERE id = %d", $wowid);
			$result = $wpdb->get_results($SQL);
			if (count($result) > 0) {
			foreach ($result as $key => $val) {
				$file_script = WP_PLUGIN_DIR.'/'.WOW_MODALSIMPLE_PLUGIN_BASENAME .'/admin/js/script.php';
				$path_script = WP_PLUGIN_DIR.'/'.WOW_MODALSIMPLE_PLUGIN_BASENAME ."/asset/wowscript-".$wowid.".js";
				if (file_exists ( $file_script ) && !file_exists ( $path_script )){					
					ob_start();
					include ($file_script);
					$content_script = ob_get_contents();
					$packer = new JavaScriptPacker($content_script, 'Normal', true, false);
					$packed = $packer->pack();					
					ob_end_clean();
					file_put_contents($path_script, $packed);
				}
				$file_style = WP_PLUGIN_DIR.'/'.WOW_MODALSIMPLE_PLUGIN_BASENAME .'/admin/css/style.php';
				$path_style = WP_PLUGIN_DIR.'/'.WOW_MODALSIMPLE_PLUGIN_BASENAME ."/asset/wowstyle-".$wowid.".css";
				if (file_exists ( $file_style ) && !file_exists ( $path_style )){					
					ob_start();
					include ($file_style);
					$content_style = ob_get_contents();										
					ob_end_clean();
					file_put_contents($path_style, $content_style);
				}				
			}			
			}
	
  }
	
}

}

	
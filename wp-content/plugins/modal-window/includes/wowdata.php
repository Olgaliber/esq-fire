<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<?php
class WOWDATA {
    function addNewItem($tblname, $wowinfo) {
        global $wpdb;
		$tablefields = $wpdb->get_results( 'SHOW COLUMNS FROM '.$tblname, OBJECT );
        $columns = count($tablefields);
        $field_array = array();
        for ($i = 0; $i < $columns; $i++) {
			$fieldname = $tablefields[$i]->Field;
			$field_array[] = $fieldname;
		}
        $count = sizeof($wowinfo);
        if ($count > 0) {
            $id = 0;
            $field = "";
            $vals = "";
            foreach ($field_array as $key) {
                if ($field == "") {
                    $field = "`" . $key . "`";
                    $vals = "'" . addcslashes($wowinfo[$key],"'") . "'";
                } else {
                    $field = $field . ",`" . $key . "`";
                    $vals = $vals . ",'" . addcslashes($wowinfo[$key],"'") . "'";
                }
            }			
            $sSQL = "INSERT INTO " . $tblname . " ($field) values ($vals)";
			$wpdb->query($sSQL);
            $lastid = $wpdb->insert_id; 
			$SQL = $wpdb->prepare("select * from ".$tblname." WHERE id = %d", $lastid);
			$result = $wpdb->get_results($SQL);
			if (count($result) > 0) {
				foreach ($result as $key => $val) {
					$file_script = WP_PLUGIN_DIR.'/'.$wowinfo["plugdir"] .'/admin/partials/'.$wowinfo["tool"] .'/generator/script.php';
					if (file_exists ( $file_script )){
					$path_script = WP_PLUGIN_DIR.'/'.$wowinfo["plugdir"] .'/asset/'.$wowinfo["tool"] .'/js/script-'.$lastid.'.js';
					ob_start();
					include ($file_script);
					$content_script = ob_get_contents();
					$packer = new JavaScriptPacker($content_script, 'Normal', true, false);
					$packed = $packer->pack();					
					ob_end_clean();
					file_put_contents($path_script, $packed);
				}
				$file_style = WP_PLUGIN_DIR.'/'.$wowinfo["plugdir"] .'/admin/partials/'.$wowinfo["tool"] .'/generator/style.php';
				if (file_exists ( $file_style )){
					$path_style = WP_PLUGIN_DIR.'/'.$wowinfo["plugdir"] .'/asset/'.$wowinfo["tool"] .'/css/style-'.$lastid.'.css';
					ob_start();
					include ($file_style);
					$content_style = ob_get_contents();										
					ob_end_clean();
					file_put_contents($path_style, $content_style);
				}				
			}
			}		
            return true;
        } else {
            return false;
        }
    }
    function updItem($tblname, $wowinfo) {
        global $wpdb;		
		$tablefields = $wpdb->get_results( 'SHOW COLUMNS FROM '.$tblname, OBJECT );
        $columns = count($tablefields);
        $field_array = array();
        for ($i = 0; $i < $columns; $i++) {
			$fieldname = $tablefields[$i]->Field;
			$field_array[] = $fieldname;
		}
		$count = sizeof($wowinfo);
        if ($count > 0) {
            $field = "";
            $vals = "";
            foreach ($field_array as $key) {
                if ($field == "" && $key != "id" && $key != "mails") {
                    $field = "`" . $key . "` = '" . addcslashes($wowinfo[$key],"'") . "'";
                } else if ($key != "id" && $key != "mails") {
                    $field = $field . ",`" . $key . "` = '" . addcslashes($wowinfo[$key],"'") . "'";
                }
            }
			$wowid = $wowinfo["id"];
            $sSQL = "update " . $tblname . " set $field where id=" . $wowid;
            $wpdb->query($sSQL);			
			$SQL = $wpdb->prepare("select * from ".$tblname." WHERE id = %d", $wowid);
			$result = $wpdb->get_results($SQL);
			if (count($result) > 0) {
			foreach ($result as $key => $val) {
				$file_script = WP_PLUGIN_DIR.'/'.$wowinfo["plugdir"] .'/admin/partials/'.$wowinfo["tool"] .'/generator/script.php';
				if (file_exists ( $file_script )){
					$path_script = WP_PLUGIN_DIR.'/'.$wowinfo["plugdir"] .'/asset/'.$wowinfo["tool"] .'/js/script-'.$wowid.'.js';
					ob_start();
					include ($file_script);
					$content_script = ob_get_contents();
					$packer = new JavaScriptPacker($content_script, 'Normal', true, false);
					$packed = $packer->pack();					
					ob_end_clean();
					file_put_contents($path_script, $packed);
				}
				$file_style = WP_PLUGIN_DIR.'/'.$wowinfo["plugdir"] .'/admin/partials/'.$wowinfo["tool"] .'/generator/style.php';
				if (file_exists ( $file_style )){
					$path_style = WP_PLUGIN_DIR.'/'.$wowinfo["plugdir"] .'/asset/'.$wowinfo["tool"] .'/css/style-'.$wowid.'.css';
					ob_start();
					include ($file_style);
					$content_style = ob_get_contents();										
					ob_end_clean();
					file_put_contents($path_style, $content_style);
				}				
			}			
			}
            return true;
        } else {
            return false;
        }
    }		
}
?>
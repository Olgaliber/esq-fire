<?php
	global $wpdb;
	$table_modal = $wpdb->prefix . "modalsimple";
	$info = (isset($_REQUEST["info"])) ? $_REQUEST["info"] : '';
	if ($info == "saved") {
		echo "<div class='updated' id='message'><p><strong>".__("Record Added", "wow-marketings")."</strong>.</p></div>";
	}
	if ($info == "update") {
		echo "<div class='updated' id='message'><p><strong>".__("Record Updated", "wow-marketings")."</strong>.</p></div>";
	}
	if ($info == "del") {
		$delid = $_GET["did"];
		$wpdb->query("delete from " . $table_modal . " where id=" . $delid);
		echo "<div class='updated' id='message'><p><strong>".__("Record Deleted", "wow-marketings").".</strong>.</p></div>";
	}
	$resultat = $wpdb->get_results("SELECT * FROM " . $table_modal . " order by id asc");
	$count = count($resultat);
?>
<div class="wow">
	<h1><?php esc_attr_e("Modal Window", "wow-modal-windows") ?> <a href='https://www.facebook.com/wowaffect/' target="_blank" title="Join us on Facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></h1>
	<ul class="wow-admin-menu">
		<li><a href='admin.php?page=wow-modalsimple'><?php esc_attr_e("List", "wow-marketings") ?></a></li>
		<li>
			<?php if($count<3){?>
				<a href='admin.php?page=wow-modalsimple&wow=add' ><?php esc_attr_e("Add new", "wow-marketings") ?></a>
			<?php } ?>
		</li>
		<li><a href='admin.php?page=wow-modalsimple&wow=faq'><b><?php esc_attr_e("FAQ", "wow-marketings") ?></b></a></li>
		<li><a href='admin.php?page=wow-modalsimple&wow=discount'><b><?php esc_attr_e("Pro version", "wow-marketings") ?></b></a></li>
		<li><a href='admin.php?page=wow-modalsimple&wow=items'><b><?php esc_attr_e("Free Plugins", "wow-marketings") ?></b></a></li>
		
	</ul>	
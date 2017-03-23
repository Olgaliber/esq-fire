<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>

<table>
    <thead>
		<tr>
			<th><u><?php esc_attr_e("Order", "wow-marketings") ?></u></th>
			<th><u><?php esc_attr_e("Name", "wow-marketings") ?></u></th> 
			<th><u><?php esc_attr_e("Shortcode", "wow-marketings") ?></u></th>
			<th><u><?php esc_attr_e("ID", "wow-marketings") ?></u></th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
	</thead>
    <tbody>
		<?php
			if ($resultat) {
				$i = 0;
				foreach ($resultat as $key => $value) {
					$i++;			   
					$id = $value->id;
					$title = $value->title;        
				?>
				<tr>
					<td><?php echo "$i"; ?></td>
					<td><?php echo $title; ?></td>
					<td><?php echo "[Wow-Modal-Windows id=$id]"; ?></td>
					<td><?php echo "$id"; ?></td>         
					<td><u><a href="admin.php?page=wow-modalsimple&wow=add&act=update&id=<?php echo $id; ?>"><?php esc_attr_e("Edit", "wow-marketings") ?></a></u></td>
					<td><u><a href="admin.php?page=wow-modalsimple&info=del&did=<?php echo $id; ?>"><?php esc_attr_e("Delete", "wow-marketings") ?></a></u></td>
					<td><?php if($count<3){; ?><u><a href="admin.php?page=wow-modalsimple&wow=add&act=duplicate&id=<?php echo $id; ?>"><?php esc_attr_e("Duplicate", "wow-marketings") ?></a></u><?php } ?></td>        
				</tr>
				<?php
					if($i>3) break;
				}
			} 
		?>
		
	</tbody>
</table>

<?php /* Static Name: Social Links */ ?>
<ul class="social">
	<?php 	
		$social_networks = array("google", "rss", "pinterest", "twitter");
		for($i=0, $array_lenght=count($social_networks); $i<$array_lenght; $i++){
			if(of_get_option($social_networks[$i]) != "") {
				echo '<li><a href="'.of_get_option($social_networks[$i]).'" title="'.$social_networks[$i].'">';
                if ($social_networks[$i]=='google') {$social_networks[$i]='google-plus';}
                echo '<i class="icon-'.$social_networks[$i].'"></i>';
                echo '</a></li>';
			};
		};
	?>
</ul>
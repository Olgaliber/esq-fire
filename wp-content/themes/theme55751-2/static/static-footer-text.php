<?php /* Static Name: Footer text */ ?>
<div id="footer-text" class="footer-text">
	<?php $myfooter_text = of_get_option('footer_text'); ?>
	
	<?php if($myfooter_text){?>
		<?php echo of_get_option('footer_text'); ?>
	<?php } else { ?>
		<a href="<?php echo home_url(); ?>/" title="<?php bloginfo('description'); ?>" class="site-name"><span><?php bloginfo('name'); ?></span></a> &copy; <?php echo date('Y'); ?> 
	<?php } ?>
	<?php if( is_front_page() ) { ?>
	<?php } ?>
</div>
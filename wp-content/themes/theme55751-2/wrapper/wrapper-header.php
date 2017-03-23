<?php /* Wrapper Name: Header */ ?>
<div class="head_holder">
    <div class="row">
    	<div class="span7" data-motopress-type="static" data-motopress-static-file="static/static-logo.php">
    		<?php get_template_part("static/static-logo"); ?>
    	</div>
    	<div class="span5" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="header-sidebar-1">
            <div class="header_block1">
    		  <?php dynamic_sidebar("header-sidebar-1"); ?>
            </div>
    	</div>
    </div>
</div>
<div class="menu_holder">
    <div class="row">
    	<div class="span9" data-motopress-type="static" data-motopress-static-file="static/static-nav.php">
    		<?php get_template_part("static/static-nav"); ?>
    	</div>
	   <div class="span3">
            <div class="header_block2">
            	<div class="hidden-phone extraphone" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="header-sidebar-2">
                    <div class="extraphone2"><?php dynamic_sidebar("header-sidebar-2"); ?></div>
            	</div>
            	<div class="social-nets-wrapper" data-motopress-type="static" data-motopress-static-file="static/static-social-networks.php">
            		<?php get_template_part("static/static-social-networks"); ?>
            	</div>
             </div>
       </div>
    </div>
</div>
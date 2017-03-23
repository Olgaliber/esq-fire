<?php
if ( ! defined( 'ABSPATH' ) ) exit;
class Wssf_Feed {

	function __construct(){

		$this->_init();
		$this->_hooks();
		$this->_filters();

	}

	function _init(){
		

	}

	function _hooks(){
		
		add_action( 'init', array( $this, 'wssf_register_feed_post_type' ) );
		
		add_action( 'admin_enqueue_scripts', array( $this, 'wssf_admin_scripts' ));

		add_action('edit_form_after_title' ,array( $this, 'wssf_custom_UI_without_metabox' ));

		add_action('add_meta_boxes',array($this,'wssf_add_metaboxes'));
	}

	function _filters(){

	}




function wssf_register_feed_post_type() {

	$labels = array(
		'name'                => __( 'Facebook Feed', 'wssf-feed-cpt' ),
		'singular_name'       => __( 'Facebook Feed', 'wssf-feed-cpt' ),
		'add_new'             => _x( 'Add New Facebook Feed', 'wssf-feed-cpt', 'wssf-feed-cpt' ),
		'add_new_item'        => __( 'Add New Facebook Feed', 'wssf-feed-cpt' ),
		'edit_item'           => __( 'Edit Facebook Feed', 'wssf-feed-cpt' ),
		'new_item'            => __( 'New Facebook Feed', 'wssf-feed-cpt' ),
		'view_item'           => __( 'View Facebook Feed', 'wssf-feed-cpt' ),
		'search_items'        => __( 'Search Facebook Feeds', 'wssf-feed-cpt' ),
		'not_found'           => __( 'No Facebook Feeds found', 'wssf-feed-cpt' ),
		'not_found_in_trash'  => __( 'No Facebook Feeds found in Trash', 'wssf-feed-cpt' ),
		'parent_item_colon'   => __( 'Parent Facebook Feed:', 'wssf-feed-cpt' ),
		'menu_name'           => __( 'Facebook Feeds', 'wssf-feed-cpt' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'description'         => 'Add Social Feeds',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => false,
		'menu_position'       => null,
		'menu_icon'           => null,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title'
			)
	);

	register_post_type( 'wssf_social_feed', $args );
}



function wssf_admin_scripts( ) {

	$screen_id = get_current_screen();
	
	if ($screen_id->post_type !== 'wssf_social_feed') return;

    wp_enqueue_script( 'wp-color-picker'  );
    wp_enqueue_style( 'wp-color-picker' );
  
    wp_enqueue_script( 'wp-color-picker-script', plugins_url('/js/wspcolorpicker.js',__FILE__), array( 'wp-color-picker' ), false, true );
}

function wssf_add_metaboxes(){

	add_meta_box('wssf_premium_version' ,'Get Amazing Features',array($this,'wssf_premium_version_metabox'), 'wssf_social_feed','side','high');
}

function wssf_custom_UI_without_metabox($post){
	global $post;

	$screen_id = get_current_screen();
	
	if ($screen_id->post_type === 'wssf_social_feed') {
		
		$plugin_dir_wssf = plugin_dir_path(__FILE__);
		
		include ($plugin_dir_wssf.'wssf_add_feed_page.php');
	
	}
	
}

function wssf_premium_version_metabox($post){
	global $post;

	$screen_id = get_current_screen();
	
	if ($screen_id->post_type === 'wssf_social_feed') {
		
		$plugin_dir_wssf = plugin_dir_path(__FILE__);
		
		include ($plugin_dir_wssf.'wssf_premium_version_metabox.php');
	
	}

}


} //class ends
<?php
	
	add_action( 'admin_enqueue_scripts', 'admin_parallax_slider_assets' );
	function admin_parallax_slider_assets() {
		// Scripts
		wp_enqueue_script( 'parallax-slider-video-meta-js', get_stylesheet_directory_uri() . '/parallax-slider/js/parallaxSliderVideoMeta.js', array( 'jquery' ), '1.0', true );
	}

	function posts_meta() {

		 if ( !is_admin() ) {
		  return;
		 }


		$parallax_slider_type_switcher = array(
		 	'id'   			=> 'my-meta-box-parallax-slider-type-switcher',
		    'title'   		=> __('Slide Type', CURRENT_THEME),
		    'description' 	=> __('', CURRENT_THEME),
			'page'   		=> 'slider',
			'context'  		=> 'normal',
			'priority'  	=> 'low',
			'fields'  		=> array(
			    array(
				   'name'   => __('', CURRENT_THEME),
				   'desc'   => __('', CURRENT_THEME),
				   'id'     => 'parallax-slider-type-switcher',
				   'type'   => 'radio',
				   'std'    => 'img-slide-type',
				   'options' => array(
						'img-slide-type' => '<i class="icon-picture"></i>&nbsp; Image Type',
						'media-library-video-slide-type' => '<i class="icon-film"></i>&nbsp; Media Library Video Type',
						'youtube-video-slide-type' => '<i class="icon-youtube-play"></i>&nbsp; Youtube Video Type',
						'vimeo-video-slide-type' => '<i class="icon-facetime-video"></i>&nbsp; Vimeo Video Type',
					)
			    )
		 	)
		);

		$meta_box_parallax_slider_type_switcher = new posts_meta;
		$meta_box_parallax_slider_type_switcher->set_meta_atts($parallax_slider_type_switcher); 
		 

		$parallax_slider_media_library_video = array(
		 	'id'   			=> 'my-meta-box-parallax-slider-media-library-video',
		    'title'   		=> __('Media Library Video', CURRENT_THEME),
		    'description' 	=> __('Select a video from the library in the appropriate format', CURRENT_THEME),
			'page'   		=> 'slider',
			'context'  		=> 'normal',
			'priority'  	=> 'low',
			'fields'  		=> array(
				array(
				   'name'   => __('MP4 Video', CURRENT_THEME),
				   'desc'   => __('', CURRENT_THEME),
				   'id'     => 'parallax-slider-video-src-mp4',
				   'type'   => 'upload-video',
				   'std'    => ''
			    ),
			    array(
				   'name'   => __('WEBM Video', CURRENT_THEME),
				   'desc'   => __('', CURRENT_THEME),
				   'id'     => 'parallax-slider-video-src-webm',
				   'type'   => 'upload-video',
				   'std'    => ''
			    ),
			    array(
				   'name'   => __('OGV Video', CURRENT_THEME),
				   'desc'   => __('', CURRENT_THEME),
				   'id'     => 'parallax-slider-video-src-ogv',
				   'type'   => 'upload-video',
				   'std'    => ''
			    ),
			    array(
				   'name'   => __('', CURRENT_THEME),
				   'desc'   => __('Display the loading progress video', CURRENT_THEME),
				   'id'     => 'parallax-slider-video-loader',
				   'type'   => 'checkbox',
				   'std'    => 'true'
			    )
		 	)
		);

		$meta_box_parallax_slider_media_library_video = new posts_meta;
		$meta_box_parallax_slider_media_library_video->set_meta_atts($parallax_slider_media_library_video);




		$parallax_slider_youtube_video = array(
		 	'id'   			=> 'my-meta-box-parallax-slider-youtube-video',
		    'title'   		=> __('Youtube Video', CURRENT_THEME),
		    'description' 	=> __('YouTube video ID www.youtube.com/watch?v=<u>xxxxxxxxxxx</u>', CURRENT_THEME),
			'page'   		=> 'slider',
			'context'  		=> 'normal',
			'priority'  	=> 'low',
			'fields'  		=> array(
			    array(
				   'name'   => __('Youtube Video ID', CURRENT_THEME),
				   'desc'   => __('', CURRENT_THEME),
				   'id'     => 'parallax-slider-youtube-video',
				   'type'   => 'text',
				   'std'    => ''
			    )
		 	)
		);

		$meta_box_parallax_slider_youtube_video = new posts_meta;
		$meta_box_parallax_slider_youtube_video->set_meta_atts($parallax_slider_youtube_video);




		$parallax_slider_vimeo_video = array(
		 	'id'   			=> 'my-meta-box-parallax-slider-vimeo-video',
		    'title'   		=> __('Vimeo Video', CURRENT_THEME),
		    'description' 	=> __('Vimeo video ID http://vimeo.com/<u>xxxxxxxxx</u>', CURRENT_THEME),
			'page'   		=> 'slider',
			'context'  		=> 'normal',
			'priority'  	=> 'low',
			'fields'  		=> array(
			    array(
				   'name'   => __('Vimeo Video ID', CURRENT_THEME),
				   'desc'   => __('', CURRENT_THEME),
				   'id'     => 'parallax-slider-vimeo-video',
				   'type'   => 'text',
				   'std'    => ''
			    )
		 	)
		);

		$meta_box_parallax_slider_vimeo_video = new posts_meta;
		$meta_box_parallax_slider_vimeo_video->set_meta_atts($parallax_slider_vimeo_video);
	}


	add_action('init', 'posts_meta');










/**
 * airborne meta manger class (based on VPT_Meta_Manager)
 */

if ( ! defined( 'ABSPATH' ) ) exit;

class posts_meta {

	public $meta_atts;

	/**
	 * __construct function.
	 *
	 * @access public
	 * @return void
	 */
	public function __construct() {

		global $typenow;
		if ( $this->meta_atts['page'] == $typenow ) {
			add_action( 'admin_menu', array( $this, 'add_meta_box' ) );
			add_action( 'save_post', array( $this, 'save_meta_data' ) );
			add_action( 'admin_enqueue_scripts', array( $this, 'include_assets' ) );
		}
		
	}

	/**
	 * include admin scripts and styles
	 *
	 * @access public
	 */
	public function include_assets() {
		
		wp_enqueue_script( 'jquery-ui-datepicker' );

	}
	
	/**
	 * add meta box attributes function.
	 *
	 * @access public
	 */
	public function set_meta_atts( $atts ) {
		if ( isset($atts['id']) && isset($atts['title']) && isset($atts['description']) && isset($atts['page']) && isset($atts['context']) && isset($atts['priority']) && isset($atts['fields']) ) {
			$this->meta_atts = $atts;
		} else {
			return false;
		}
	}

	/**
	 * show meta box function.
	 *
	 * @access public
	 */
	public function show_meta_box() {

		$post_id = get_the_id();

		echo '<p>' . $this->meta_atts['description'] . '</p>';
		// Use nonce for verification
		echo '<input type="hidden" name="parallax_slider_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
		echo '<div class="form-table airborne-meta-box position-' . esc_attr( $this->meta_atts['context'] ) . '">';
		foreach ( $this->meta_atts['fields'] as $field ) {

			// get current post meta data
			$meta = get_post_meta( $post_id, $field['id'], true );

			if ( '' == $meta ) {
				$value = $field['std'];
			} else {
				$value = $meta;
			}

			if ( isset($field['class']) ) {
				$css_class = $field['class'];
			} else {
				$css_class = '';
			}

			switch ( $field['type'] ) {
				//If Text		
				case 'text':
					echo '<div class="item-wrapper ' . $css_class . '" style="margin-bottom:25px;">';
						echo '<div class="item-heading" style="margin-bottom:5px;"><label for="' . $field['id'] . '"><strong>' . $field['name'] . '</strong><small style="display:block; color:#aaa;">' . $field['desc'] . '</small></label></div>';
						echo '<div class="item-data"><input type="text" name="' . $field['id'] . '" id="' . $field['id'] . '" value="' . $value . '" style="width:80%;"></div>';	
					echo '</div>';	
				break;
				//If textarea		
				case 'textarea':
					echo '<div class="item-wrapper ' . $css_class . '" style="margin-bottom:25px;">';
						echo '<div class="item-heading" style="margin-bottom:5px;"><label for="' . $field['id'] . '"><strong>' . $field['name'] . '</strong><small style="display:block; color:#aaa;">' . $field['desc'] . '</small></label></div>';
						echo '<div class="item-data"><textarea name="' . $field['id'] . '" id="' . $field['id'] . '" value="' . $value . '" rows="5">', $meta ? $meta : stripslashes(htmlspecialchars(( $field['std']), ENT_QUOTES)), '</textarea></div>';
					echo '</div>';
				break;
				//If Select	
				case 'select':
					echo '<div class="item-wrapper ' . $css_class . '" style="margin-bottom:25px;">';
						echo '<div class="item-heading" style="margin-bottom:5px;"><label for="' . $field['id'] . '"><strong>' . $field['name'] . '</strong><small style="display:block; color:#aaa;">' . $field['desc'] . '</small></label></div>';
						echo '<div class="item-data"><select id="' . $field['id'] . '" name="' . $field['id'] . '">';
							foreach ( $field['options'] as $option_val => $option_name ) {
								echo'<option value="' . $option_val . '"';
								if ($meta == $option_val ) { 
									echo ' selected="selected"'; 
								}
								echo'>' . $option_name . '</option>';
							}
							echo'</select>';
						echo '</div>';
					echo '</div>';
				break;
				//If Date
				case 'date':
				echo '<div class="item-wrapper ' . $css_class . '" style="margin-bottom:25px;">';
						echo '<div class="item-heading" style="margin-bottom:5px;"><label for="' . $field['id'] . '"><strong>' . $field['name'] . '</strong><small style="display:block; color:#aaa;">' . $field['desc'] . '</small></label></div>';
						echo '<div class="item-data">';
							echo '<input type="text" name="' . $field['id'] . '" id="' . $field['id'] . '" value="' . $value . '" autocomplete="off">';
							echo "<script type='text/javascript'>
									jQuery(document).ready(function($) {
										\$('#" . $field['id'] . "').datepicker({
											changeMonth: true,
											changeYear: true,
											dateFormat: 'MM dd, yy'
										});
									});
								</script>";
						echo '</div>';	
					echo '</div>';	
				break;
				//If Radio	
				case 'radio':
					echo '<div class="item-wrapper ' . $css_class . '" style="margin-bottom:25px;">';
						echo '<div class="item-heading" style="margin-bottom:5px;"><label for="' . $field['id'] . '"><strong>' . $field['name'] . '</strong><small style="display:block; color:#aaa;">' . $field['desc'] . '</small></label></div>';
						echo '<div class="item-data">';
					
						foreach ( $field['options'] as $option_val => $option_name ) {
							echo '<div class="item-type-radio-element" style="margin-top:5px;"><label>';
								echo '<input type="radio" class="' . $field['id'] . '" name="' . $field['id'] . '" id="' . $field['id'] . '-' . $option_val . '" value="' . $option_val . '" ' . checked( $value, $option_val, false ) . '>';
								echo $option_name;
							echo '</label></div>';	
						}
						echo '</div>';	

					echo '</div>';
				break;
				//If Checkbox
				case 'checkbox':
					echo '<div class="item-wrapper ' . $css_class . '" style="margin-bottom:25px; overflow:hidden;">';
						echo '<div class="item-heading" style="margin-bottom:5px;"><label for="' . $field['id'] . '"><strong>' . $field['name'] . '</strong></label></div>';
						echo '<div class="item-data" style="float:left;"><input type="checkbox" name="' . $field['id'] . '" id="' . $field['id'] . '" value="' . $field['std'] . '" ' . checked( $meta, $field['std'], false ) . '></div>';	
						echo '<small style="display:block; color:#aaa;">' . $field['desc'] . '</small>';
					echo '</div>';
				break;
				//If Editor
				case 'editor':
					echo '<div class="item-wrapper ' . $css_class . '" style="margin-bottom:25px;">';
						echo '<div class="item-heading" style="margin-bottom:5px;"><label for="' . $field['id'] . '"><strong>' . $field['name'] . '</strong><small style="display:block; color:#aaa;">' . $field['desc'] . '</small></label></div>';
						echo '<div class="item-data">';
							$content = $meta ? $meta : stripslashes(htmlspecialchars(( $field['std']), ENT_QUOTES));
							wp_editor( $content, $field['id'], $settings = array( 'textarea_rows' => 5 ) );
						echo '</div>';
					echo '</div>';
				break;
				//If Upload video
				case 'upload-video':
					echo '<div class="item-wrapper ' . $css_class . '" style="margin-bottom:25px;">';
						echo '<div class="item-heading" style="margin-bottom:5px;"><label for="' . $field['id'] . '"><strong>' . $field['name'] . '</strong><small style="display:block; color:#aaa;">' . $field['desc'] . '</small></label></div>';
						echo '<div class="item-data">';
							echo '<input id="' . $field['id'] . '" name="' . $field['id'] . '" value="' . $value . '" class="upload-video-name" type="text" />';
							echo '<input class="upload-video-button button" type="button" value="Upload" style="margin:1px 0 0 5px;">';
						echo '</div>';
					echo '</div>';
				break;
				default:
					do_action( 'airborne_meta_control_' . $field['type'], $field );
				break;
			}
		}
		echo '</div>';

	}

	/**
	 * add meta box attributes function.
	 *
	 * @access public
	 */
	public function add_meta_box() {
		add_meta_box( $this->meta_atts['id'], $this->meta_atts['title'], array( $this, 'show_meta_box' ), $this->meta_atts['page'], $this->meta_atts['context'], $this->meta_atts['priority']	);
	}

	/**
	 * save meta data function.
	 *
	 * @access public
	 */
	public function save_meta_data( $post_id ) {

		global $typenow;

		if ( $this->meta_atts['page'] != $typenow ) {
			return $post_id;
		}

		//if ( !isset($_POST['post_type']) ) {
		//	return $post_id;
		//}

		// verify nonce
		if ( !isset($_POST['parallax_slider_meta_box_nonce']) || !wp_verify_nonce($_POST['parallax_slider_meta_box_nonce'], basename(__FILE__))) {
			return $post_id;
		}
	 
		// check autosave
		if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
			return $post_id;
		}
	 
		// check permissions
		if ('page' == $_POST['post_type']) {
			if (!current_user_can('edit_page', $post_id)) {
				return $post_id;
			}
		} elseif (!current_user_can('edit_post', $post_id)) {
			return $post_id;
		}
	 
		foreach ($this->meta_atts['fields'] as $field) {
			$old = get_post_meta($post_id, $field['id'], true);
			$new = isset($_POST[$field['id']]) ? $_POST[$field['id']] : '';
	 
			if ($new && $new != $old) {
				update_post_meta($post_id, $field['id'], $new);
			} elseif ('' == $new && $old) {
				delete_post_meta($post_id, $field['id'], $old);
			}
		}

	}
}



?>
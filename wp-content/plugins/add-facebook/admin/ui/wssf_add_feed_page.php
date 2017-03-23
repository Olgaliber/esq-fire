<?php

if ( ! defined( 'ABSPATH' ) ) exit;

 wp_nonce_field( 'wssf_ui_meta_box_nonce', 'wssf_meta_box_nonce' );
$CPostId = $post->ID;
?>
<style type="text/css">
  #wssf_notice_box{
    padding: 10px 0 10px 10px;
    border: 2px solid #d3d3d3;
    margin: 10px 0 10px 0;
    background: #fff;

  }
  .notice_p{
    font-family: sans-serif;
    font-size: 19px;
  }
  #shortcode{
    font-size: 21px;
    font-weight: bold;
  }
  .tabs {
    text-align: center;
  }
  .tab_s {
    text-align: center;
  }
</style>
<div id="wssf_notice_box">
  <p class="notice_p">Use this shortcode to display your social feed : <span id='shortcode'>[socialfeed id='<?php echo $CPostId; ?>']</span></p>
</div>
  <div class='wrap'> 
   
       <div class="accordion">

    <div class="accordion-section">
        <a class="accordion-section-title active" href="#accordion-1">Social Media</a>
        
        <div id="accordion-1" class="accordion-section-content open" style="display:block;">
            <div class="container">

  <ul class="tabs">
    <li class="tab-link current" data-tab="tab-1"><img src='<?php echo plugins_url( '/images/facebook.png', __FILE__); ?>' /></li>
    <li class="tab-link" data-tab="tab-2"><img src='<?php echo plugins_url( '/images/twitter.png', __FILE__); ?>' /></li>

    <li class="tab-link" data-tab="tab-5"><img src='<?php echo plugins_url( '/images/instagram.png', __FILE__); ?>' /></li>
    
  </ul>

  <div id="tab-1" class="tab-content current">
   <table class="form-table">

   <tr valign='top'>
            <th scope='row'><?php _e('Enable Facebook');?></th>
            <td>
               <div class="onoffswitch">
                     <input type="checkbox" name="wssf_social_fb_enable" class="onoffswitch-checkbox"  id="myonoffswitchfb" value='1'<?php checked(1, get_post_meta($post->ID,'wssf_social_fb_enable',true)); ?> />
                     <label class="onoffswitch-label" for="myonoffswitchfb">
                     <span class="onoffswitch-inner"></span>
                     <span class="onoffswitch-switch"></span>
                     </label>
                    </div>
                    <p class="description"><?php _e( 'Enable it to show Facebook feeds'); ?></p>

           </td>
          </tr>

      <tr valign="top">
        <th scope="row"><?php _e(' Facebook Profile/Page Id'); ?></th>
        <td><label for="wssf_fb_profile_id">
          <input placeholder="Enter Facebook Profile/Page Id" type="text" id="wssf_fb_profile_id"  name="wssf_fb_profile_id" size="40" value="<?php echo get_post_meta($post->ID, 'wssf_fb_profile_id' , true ); ?>"/>
          <p class="description"><?php _e( ''); ?></p>
          </label>
        </td>
      </tr>



      <tr valign="top">
        <th scope="row"><?php _e('Facebook App Id'); ?></th>
        <td><label for="wssf_fb_app_id">
          <input placeholder="Enter Facebook app Id" type="text" id="wssf_fb_app_id"  name="wssf_fb_app_id" size="40" value="<?php echo get_post_meta($post->ID, 'wssf_fb_app_id',true ); ?>"/>
          <p class="description"><?php _e( 'How to Get Facebook app Id <a href="http://www.shoutmeloud.com/get-facebook-app-id-secret-key.html" target="_blank">  Ckick Here </a>'); ?></p>
          </label>
        </td>
      </tr>



       <tr valign="top">
        <th scope="row"><?php _e('Facebook App Secret'); ?></th>
        <td><label for="wssf_fb_app_id">
          <input placeholder="Enter Facebook Secret Key" type="text" id="wssf_fb_app_secret"  name="wssf_fb_app_secret" size="40" value="<?php echo get_post_meta($post->ID, 'wssf_fb_app_secret',true ); ?>"/>
          <p class="description"><?php _e( 'How to Get Facebook Secret Key <a href="http://www.shoutmeloud.com/get-facebook-app-id-secret-key.html" target="_blank">  Ckick Here </a>'); ?></p>
          </label>
        </td>
      </tr>

        <tr valign="top">
        <th scope="row"><?php _e('Results Per Feed'); ?></th>
        <td><label for="wssf_results_per_feed_fb">
          <input placeholder="Enter results per feed" type="number" id="wssf_results_per_feed_fb"  name="wssf_results_per_feed_fb" size="40" value="<?php echo get_post_meta($post->ID, 'wssf_results_per_feed_fb' ,true); ?>"/>
          </label>
          <p class="description"><?php _e( 'How many posts to show in a feed'); ?></p>

        </td>
      </tr>


    </table>
  </div>
  
  <div id="tab-2" class="tab-content">
      <table class="form-table">

      <tr valign='top'>
            <th scope='row'><?php _e('Enable Twitter');?></th>
            <td>
               <div class="onoffswitch">
                     <input type="checkbox" name="wssf_social_tw_enable" class="onoffswitch-checkbox"  id="myonoffswitchtw" value='1'<?php checked(1, get_post_meta($post->ID,'wssf_social_tw_enable',true)); ?> />
                     <label class="onoffswitch-label" for="myonoffswitchtw">
                     <span class="onoffswitch-inner"></span>
                     <span class="onoffswitch-switch"></span>
                     </label>
                    </div>
                    <p class="description"><?php _e( 'Enable it to show Twitter feeds'); ?></p>
           </td>
          </tr>

      <tr valign="top">
        <th scope="row"><?php _e('Twitter Username'); ?></th>
        <td><label for="wssf_tw_username">
          <input placeholder="Enter Twitter Username" type="text" id="wssf_tw_username"  name="wssf_tw_username" size="40" value="<?php echo get_post_meta($post->ID, 'wssf_tw_username', true ); ?>"/>
          <p class="description"><?php _e( 'Enter Twitter Username'); ?></p>
          </label>
        </td>
      </tr>


       <tr valign="top">
        <th scope="row"><?php _e('Consumer Key'); ?></th>
        <td><label for="wssf_tw_consumer_key">
          <input placeholder="Enter Twitter Consumer Key" type="text" id="wssf_tw_consumer_key"  name="wssf_tw_consumer_key" size="40" value="<?php echo get_post_meta($post->ID, 'wssf_tw_consumer_key' ,true); ?>"/>
           <p class="description"><?php _e( 'How to Get Twitter Conusmer Id <a href="https://apps.twitter.com/" target="_blank">  Ckick Here </a>'); ?></p>
          </label>
        </td>
      </tr>



      <tr valign="top">
        <th scope="row"><?php _e('Consumer Secret'); ?></th>
        <td><label for="wssf_tw_consumer_secret">
          <input placeholder="Enter Twitter Consumer Secret" type="text" id="wssf_tw_consumer_secret"  name="wssf_tw_consumer_secret" size="40" value="<?php echo get_post_meta($post->ID, 'wssf_tw_consumer_secret' ,true); ?>"/>
          <p class="description"><?php _e( 'How to Get Twitter Conusmer Key <a href="https://apps.twitter.com/" target="_blank">  Ckick Here </a>'); ?></p>
          </label>
        </td>
      </tr>


      <tr valign="top">
        <th scope="row"><?php _e('Results Per Feed'); ?></th>
        <td><label for="wssf_results_per_feed_tw">
          <input placeholder="Enter results per feed" type="number" id="wssf_results_per_feed_tw"  name="wssf_results_per_feed_tw" size="40" value="<?php echo get_post_meta($post->ID, 'wssf_results_per_feed_tw' ,true); ?>"/>
          </label>
          <p class="description"><?php _e( 'How many posts to show in a feed'); ?></p>

        </td>
      </tr>


      

   


              <p>Note: Make sure to make your app read only.</p>
             </table>
  </div>
  <div id="tab-3" class="tab-content">
    <table class="form-table">
      <tr valign='top'>
            <th scope='row'><?php _e('Enable G+');?></th>
            <td>
               <div class="onoffswitch">
                     <input type="checkbox" name="wssf_social_gplus_enable" class="onoffswitch-checkbox"  id="myonoffswitchgplus" value='1'<?php checked(1, get_post_meta($post->ID,'wssf_social_gplus_enable',true)); ?> />
                     <label class="onoffswitch-label" for="myonoffswitchgplus">
                     <span class="onoffswitch-inner"></span>
                     <span class="onoffswitch-switch"></span>
                     </label>
                    </div>

           </td>
          </tr>
      <tr valign="top">
        <th scope="row"><?php _e('Username'); ?></th>
        <td><label for="wssf_gplus_username">
          <input type="text" id="wssf_gplus_username"  name="wssf_gplus_username" size="40" value="<?php echo get_post_meta($post->ID, 'wssf_gplus_username',true ); ?>"/>
          <p class="description"><?php _e( 'Enter G+ username'); ?></p>
          </label>
        </td>
      </tr>



      <tr valign="top">
        <th scope="row"><?php _e('Results Per Feed'); ?></th>
        <td><label for="wssf_results_per_feed_gplus">
          <input type="number" id="wssf_results_per_feed_gplus"  name="wssf_results_per_feed_gplus" size="40" value="<?php echo get_post_meta($post->ID, 'wssf_results_per_feed_gplus' ,true); ?>"/>
          <p class="description"><?php _e( 'Enter results per feed'); ?></p>
          </label>
        </td>
      </tr>


      

    </table>
  </div>

  <div id="tab-4" class="tab-content">

      <table class="form-table">

      <tr valign="top">
        <th scope="row"><?php _e('Company Id'); ?></th>
        <td><label for="wssf_linkedin_compny_id">
          <input type="text" id="wssf_linkedin_compny_id"  name="wssf_linkedin_compny_id" size="40" value="<?php echo get_post_meta($post->ID, 'wssf_linkedin_compny_id',true ); ?>"/>
          <p class="description"><?php _e( 'Enter LinkedIn company Id'); ?></p>
          </label>
        </td>
      </tr>

      <tr valign='top'>
            <th scope='row'><?php _e('Event Types');?></th>
            <td>


              <div  style="float:left;">
              <p class="pp"style='padding:0px 0px 0px 20px ;'>Clarissa</p>
              <input type="radio" name="wssf_tw_list" id="pal1" value="pal1" <?php  checked('pal1', get_post_meta($post->ID,'wssf_tw_list',true)); true ?>  /> 
              </div>

              
            </td>
            </tr>

            <tr valign="top">
        <th scope="row"><?php _e('Results Per Feed'); ?></th>
        <td><label for="wssf_results_per_feed_linkedin">
          <input type="number" id="wssf_results_per_feed_linkedin"  name="wssf_results_per_feed_linkedin" size="40" value="<?php echo get_post_meta($post->ID, 'wssf_results_per_feed_linkedin' ,true); ?>"/>
          <p class="description"><?php _e( 'Enter results per feed'); ?></p>
          </label>
        </td>
      </tr>



      




          </table>

  
  </div>


  <div id="tab-5" class="tab-content">

     <table class="form-table">
      <tr valign='top'>
            <th scope='row'><?php _e('Enable Instagram');?></th>
            <td>
               <div class="onoffswitch">
                     <input type="checkbox" name="wssf_social_insta_enable" class="onoffswitch-checkbox"  id="myonoffswitchinsta" value='1'<?php checked(1, get_post_meta($post->ID,'wssf_social_insta_enable',true)); ?> />
                     <label class="onoffswitch-label" for="myonoffswitchinsta">
                     <span class="onoffswitch-inner"></span>
                     <span class="onoffswitch-switch"></span>
                     </label>
                    </div>
                    <p class="description"><?php _e( 'Enable it to show Instagram feeds'); ?></p>

           </td>
          </tr>

          <tr valign="top">
        <th scope="row"><?php _e(' Instagram Access Token'); ?></th>
        <td><label for="wssf_instagram_token">
          <input placeholder="Enter Instagram access token here" type="text" id="wssf_insta_username"  name="wssf_instagram_token" size="40" value="<?php echo get_post_meta($post->ID, 'wssf_instagram_token' ,true); ?>"/>
          <p class="description"><?php _e( 'How to Get Instagram Access Token <a href="http://smuzthemes.com/how-to-generate-instagram-access-token/" target="_blank">  Ckick Here </a>'); ?></p>
          </label>
        </td>
      </tr>
     <tr valign="top">
        <th scope="row"><?php _e(' Instagram Profile Username'); ?></th>
        <td><label for="wssf_insta_username">
          <input placeholder="Enter Instagram Username" type="text" id="wssf_insta_username"  name="wssf_insta_username" size="40" value="<?php echo get_post_meta($post->ID, 'wssf_insta_username' ,true); ?>"/>
          <p class="description"><?php _e( 'Enter Instgram Username'); ?></p>
          </label>
        </td>
      </tr>


      <tr valign="top">
        <th scope="row"><?php _e('Results Per Feed'); ?></th>
        <td><label for="wssf_results_per_feed_insta">
          <input placeholder="Enter results per feed" type="number" id="wssf_results_per_feed_insta"  name="wssf_results_per_feed_insta" size="40" value="<?php echo get_post_meta($post->ID, 'wssf_results_per_feed_insta' ,true); ?>"/>
          </label>
          <p class="description"><?php _e( 'How many posts to show in a feed'); ?></p>

        </td>
      </tr>


      


          </table>
    
  </div>

  <div id="tab-6" class="tab-content">
    <table class="form-table">

     <tr valign="top">
        <th scope="row"><?php _e('Soundcloud Username'); ?></th>
        <td><label for="wssf_soundcloud_username">
          <input type="text" id="wssf_soundcloud_username"  name="wssf_soundcloud_username" size="40" value="<?php echo get_post_meta($post->ID, 'wssf_soundcloud_username' ,true); ?>"/>
          <p class="description"><?php _e( 'Enter Soundcloud Username'); ?></p>
          </label>
        </td>
      </tr>


      <tr valign="top">
        <th scope="row"><?php _e('Playlist Id'); ?></th>
        <td><label for="wssf_soundcloud_playlist_id">
          <input type="text" id="wssf_soundcloud_playlist_id"  name="wssf_soundcloud_playlist_id" size="40" value="<?php echo get_post_meta($post->ID, 'wssf_soundcloud_playlist_id' ,true); ?>"/>
          <p class="description"><?php _e( 'Enter Soundcloud Playulist Id'); ?></p>
          </label>
        </td>
      </tr>
    

    
          </table>
  </div>
  
  <div id="tab-7" class="tab-content">
     <table class='form-table'>
    <tr valign='top'>
            <th scope='row'><?php _e('Content Types');?></th>
            <td>


              <div  style="float:left;">
              <p class="pp"style='padding:0px 0px 0px 20px ;'>Post</p>
              <input type="radio" name="wssf_wp_content_type" id="con1" value="con1" <?php  checked('con1', get_post_meta($post->ID,'wssf_wp_content_type',true,true)); true ?>  />
              
              </div>


              <div  style="float:left;">
              <p class="pp"style='padding-left:30px;'>Comment</p>
              <input type="radio" name="wssf_wp_content_type" id="con2" value="con2" <?php  checked('con2',get_post_meta($post->ID,'wssf_wp_content_type',true)); true ?>  />
              </div>



              <div  style="float:left;" >
              <p class="pp"style='padding-left:30px;'>Custom Post Types</p>
              <input type="radio" name="wssf_wp_content_type" id="con3" value="con3" <?php  checked('con3',get_post_meta($post->ID,'wssf_wp_content_type',true)); true ?>/> 
              </div>

              </td>
            </tr>

        <tr valign="top">
        <th scope="row"><?php _e('Filter'); ?></th>
        <td><label for="wssf_wp_filter">
          <input type="text" id="wssf_wp_filter"  name="wssf_wp_filter" size="40" value="<?php echo get_post_meta($post->ID, 'wssf_wp_filter' ,true); ?>"/>
          <p class="description"><?php _e( 'Enter Category for filter'); ?></p>
          </label>
        </td>
      </tr>


       <tr valign="top">
        <th scope="row"><?php _e('Custom post'); ?></th>
        <td><label for="wssf_wp_custom_post">
          <input type="text" id="wssf_wp_custom_post"  name="wssf_wp_custom_post" size="40" value="<?php echo get_post_meta($post->ID, 'wssf_wp_custom_post' ,true); ?>"/>
          <p class="description"><?php _e( 'Enter  slug or name'); ?></p>
          </label>
        </td>
      </tr>


      <tr valign="top">
        <th scope="row"><?php _e('Post Id  for comment'); ?></th>
        <td><label for="wssf_wp_post_id_comment">
          <input type="text" id="wssf_wp_post_id_comment"  name="wssf_wp_post_id_comment" size="40" value="<?php echo get_post_meta($post->ID, 'wssf_wp_post_id_comment',true ); ?>"/>
          <p class="description"><?php _e( 'Enter  slug or name'); ?></p>
          </label>
        </td>
      </tr>

          </table>

   
  </div>

  <div id="tab-8" class="tab-content">
     <table class="form-table">
<tr valign='top'>
            <th scope='row'><?php _e('Enable Pinterest');?></th>
            <td>
               <div class="onoffswitch">
                     <input type="checkbox" name="wssf_social_pin_enable" class="onoffswitch-checkbox"  id="myonoffswitchpin" value='1'<?php checked(1, get_post_meta($post->ID,'wssf_social_pin_enable',true)); ?> />
                     <label class="onoffswitch-label" for="myonoffswitchpin">
                     <span class="onoffswitch-inner"></span>
                     <span class="onoffswitch-switch"></span>
                     </label>
                    </div>
           </td>
          </tr>
     <tr valign="top">
        <th scope="row"><?php _e('Pinterest Profile Id'); ?></th>
        <td><label for="wssf_pin_profile_id">
          <input type="text" id="wssf_pin_profile_id"  name="wssf_pin_profile_id" size="40" value="<?php echo get_post_meta($post->ID, 'wssf_pin_profile_id',true ); ?>"/>
          <p class="description"><?php _e( 'Enter Pinit profile id'); ?></p>
          </label>
        </td>
      </tr>



      <tr valign="top">
        <th scope="row"><?php _e('Results Per Feed'); ?></th>
        <td><label for="wssf_results_per_feed_pinit">
          <input type="number" id="wssf_results_per_feed_pinit"  name="wssf_results_per_feed_pinit" size="40" value="<?php echo get_post_meta($post->ID, 'wssf_results_per_feed_pinit' ,true); ?>"/>
          <p class="description"><?php _e( 'Enter results per feed'); ?></p>
          </label>
        </td>
      </tr>



      



    </table> 
  </div>

  <div id="tab-9" class="tab-content">
    <table class="form-table">

     <tr valign="top">
        <th scope="row"><?php _e('Username'); ?></th>
        <td><label for="wssf_vimeo_username">
          <input type="text" id="wssf_vimeo_username"  name="wssf_vimeo_username" size="40" value="<?php echo get_post_meta($post->ID, 'wssf_vimeo_username',true ); ?>"/>
          <p class="description"><?php _e('Enter Vimeo Username'); ?></p>
          </label>
        </td>
      </tr>
    

    <tr valign='top'>
            <th scope='row'><?php _e('Content Types');?></th>
            <td>


              <div  style="float:left;">
              <p class="pp"style='padding:0px 0px 0px 20px ;'>Clarissa</p>
              <input type="radio" name="wssf_tw_list" id="pal1" value="pal1" <?php  checked('pal1', get_post_meta($post->ID,'wssf_tw_list',true)); true ?>  /> 
              </div>

            </td>
            </tr>
          </table> 
  </div>

  <div id="tab-10" class="tab-content">

     <table class="form-table">

     <tr valign="top">
        <th scope="row"><?php _e('Channel Id'); ?></th>
        <td><label for="wssf_youtube_channel_id">
          <input type="text" id="wssf_youtube_channel_id"  name="wssf_youtube_channel_id" size="40" value="<?php echo get_post_meta($post->ID, 'wssf_youtube_channel_id' ,true); ?>"/>
          <p class="description"><?php _e( 'Enter Youtube channel id'); ?></p>
          </label>
        </td>
      </tr>
    

    <tr valign='top'>
            <th scope='row'><?php _e('Content Types');?></th>
            <td>


              <div  style="float:left;">
              <p class="pp"style='padding:0px 0px 0px 20px ;'>Clarissa</p>
              <input type="radio" name="wssf_tw_list" id="pal1" value="pal1" <?php  checked('pal1', get_post_meta($post->ID,'wssf_tw_list',true)); true ?>  /> 
              </div>
            </td>
            </tr>
          </table>
    
  </div>

</div><!-- container -->
        </div><!--end .accordion-section-content-->
    </div><!--end .accordion-section-->

     <div class="accordion-section">
        <a class="accordion-section-title active" href="#accordion-2">Social Feed Settings</a>
        
        <div id="accordion-2" class="accordion-section-content open" style="display:block;">
        
         <table class="form-table">

            <tr valign='top'>
            <th scope='row'><?php _e('Enable Feed Settings');?></th>
            <td>
               <div class="onoffswitch">
                     <input type="checkbox" name="wssf_enable_feed" class="onoffswitch-checkbox"  id="myonoffswitch" value='1'<?php checked(1, get_post_meta($post->ID,'wssf_enable_feed',true)); ?> />
                     <label class="onoffswitch-label" for="myonoffswitch">
                     <span class="onoffswitch-inner"></span>
                     <span class="onoffswitch-switch"></span>
                     </label>
                    </div>
                    <p class="description"><?php _e( 'Enable it to use feeds settings'); ?></p>

           </td>
          </tr>

           

              <tr valign="top">
        <th scope="row"><?php _e('Set Feed Container Width'); ?></th>
        <td><label for="wssf_feed_width">
          <input placeholder="Set width for feed"  disabled  type="number" id="wssf_feed_width"  name="" size="40" value="<?php echo get_post_meta($post->ID, 'wssf_feed_width' ,true); ?>"/> px
          <p class="description"><?php _e( 'Set the container width for the feed   <a href="http://web-settler.com/wordpress-facebook-feed/">Buy Premium Version</a> </b> '); ?></p>
          </label>
        </td>
      </tr>



          <tr valign='top'>
            <th scope='row'><?php _e('Hide Text Content');?></th>
            <td>
               <div class="onoffswitch">
                     <input type="checkbox" disabled name="" class="onoffswitch-checkbox"  id="myonoffswitch3" value='1'<?php checked(1, get_post_meta($post->ID,'wssf_hide_text_content',true)); ?> />
                     <label class="onoffswitch-label" for="myonoffswitch3">
                     <span class="onoffswitch-inner"></span>
                     <span class="onoffswitch-switch"></span>
                     </label>
                    </div>
                    <p class="description"><?php _e( 'Hide text content of the feed <a href="http://web-settler.com/wordpress-facebook-feed/">Buy Premium Version</a> </b>'); ?></p>
           </td>
          </tr>


          <tr valign='top'>
            <th scope='row'><?php _e('Enable / Disable Links to Post');?></th>
            <td>
               <div class="onoffswitch">
                     <input type="checkbox" disabled name="" class="onoffswitch-checkbox"  id="myonoffswitch4" value='1'<?php checked(1, get_post_meta($post->ID,'wssf_enable_links_to_post',true)); ?> />
                     <label class="onoffswitch-label" for="myonoffswitch4">
                     <span class="onoffswitch-inner"></span>
                     <span class="onoffswitch-switch"></span>
                     </label>
                    </div>
                    <p class="description"><?php _e('Show hide links to post in feed <a href="http://web-settler.com/wordpress-facebook-feed/">Buy Premium Version</a> </b>'); ?></p>

           </td>
          </tr>


          <tr valign='top'>
            <th scope='row'><?php _e('Select Layout');?></th>
            <td>


              <div  style="float:left;">
              <p class="pp"style='padding:0px 0px 0px 20px ;'>Default  <input type="radio" name="wssf_select_layout" id="layout"  value="layout" <?php  checked('layout', get_post_meta($post->ID,'wssf_select_layout',true)); true ?> /></p> 
              <label for='layout'><img style='padding:0px 30px 30px 0px' width='300px' height ='400px'  src='<?php echo plugins_url( '/images/default.png', __FILE__); ?>' /> </label>
              </div>


              <div  style="float:left;">
              <p class="pp"style='padding:0px 0px 0px 20px ;'>Layout 1--<a href="http://web-settler.com/wordpress-facebook-feed/">Buy Premium Version</a> </b> <input  disabled type="radio" id="layout1" <?php  checked('layout1', get_post_meta($post->ID,'wssf_select_layout',true)); true ?> /></p>
              <label for='layout1'><img style='padding:0px 30px 30px 0px' width='300px' height ='400px' src='<?php echo plugins_url( '/images/layout1.png', __FILE__); ?>' /> </label>        
              </div>

              <br>
              <br>


              <div  style="float:left;">
              <p class="pp"style='padding:0px 0px 0px 20px ;'>Layout 2--<a href="http://web-settler.com/wordpress-facebook-feed/">Buy Premium Version</a> </b> <input  disabled type="radio" name="" id="layout2"  <?php  checked('layout2', get_post_meta($post->ID,'wssf_select_layout',true)); true ?> /></p>
              <label for='layout2'><img style='padding:0px 30px 30px 0px'  width='300px' height ='400px' src='<?php echo plugins_url( '/images/layout2.png', __FILE__); ?>' /> </label>
              </div>


              <div  style="float:left;">
              <p class="pp"style='padding:0px 0px 0px 20px ;'>Layout 3-- <a href="http://web-settler.com/wordpress-facebook-feed/">Buy Premium Version</a> </b> <input  disabled type="radio" name="" id="layout3" <?php  checked('layout3', get_post_meta($post->ID,'wssf_select_layout',true)); true ?> /></p>
              <label for='layout3'><img style='padding:0px 30px 30px 0px' width='300px' height ='400px' src='<?php echo plugins_url( '/images/layout3.png', __FILE__); ?>' /> </label> 
              </div>

              <br>
              <br>

                <div  style="float:left;">
              <p class="pp"style='padding:0px 0px 0px 20px ;'>Layout 4-- <a href="http://web-settler.com/wordpress-facebook-feed/">Buy Premium Version</a> </b> <input  disabled type="radio" name="" id="layout3" <?php  checked('layout3', get_post_meta($post->ID,'wssf_select_layout',true)); true ?> /></p>
              <label for='layout3'><img style='padding:0px 30px 30px 0px' width='300px' height ='400px' src='<?php echo plugins_url( '/images/layout4.png', __FILE__); ?>' /> </label> 
              </div>

              <div  style="float:left;">
              <p class="pp"style='padding:0px 0px 0px 20px ;'>Layout 4-- <a href="http://web-settler.com/wordpress-facebook-feed/">Buy Premium Version</a> </b> <input  disabled type="radio" name="" id="layout3" <?php  checked('layout3', get_post_meta($post->ID,'wssf_select_layout',true)); true ?> /></p>
              <label for='layout3'><img style='padding:0px 30px 30px 0px' width='300px' height ='400px' src='<?php echo plugins_url( '/images/layout5.png', __FILE__); ?>' /> </label> 
              </div>

              </td>
            </tr>


            </table>
            
        </div><!--end .accordion-section-content-->
    </div><!--end .accordion-section-->

<div class="accordion-section">
        <a class="accordion-section-title active" href="#accordion-3">Social Feed Design Settings</a>
        
        <div id="accordion-3" class="accordion-section-content open" style="display:block;">
            <table class="form-table">
        
        <tr valign="top">
        <th scope="row"><?php _e('Background Color'); ?></th>
        <td><label for="wssf_bg_color">
          <input type="color" disabled id="wssf_bg_color" class=""   value="<?php echo get_post_meta($post->ID,'wssf_bg_color',true); ?>"/>
          <p class="description"><?php _e( 'Select Background Color for feed <a href="http://web-settler.com/wordpress-facebook-feed/">Buy Premium Version</a> </b>'); ?></p>
          </label>
        </td>
      </tr>


      
<tr valign="top">
        <th scope="row"><?php _e('Text Color'); ?></th>
        <td><label for="wssf_text_color">
          <input  disabled type="color" id="wssf_text_color" class=""  value="<?php echo get_post_meta($post->ID,'wssf_text_color',true); ?>"/>
          <p class="description"><?php _e( 'Select Text Color for feed <a href="http://web-settler.com/wordpress-facebook-feed/">Buy Premium Version</a> </b>'); ?></p>
          </label>
        </td>
      </tr>



      <tr valign="top">
        <th scope="row"><?php _e('Text Font'); ?></th>
        <td><label for="wssf_select_gfont">
          <input id='wssf_font' type="text" disabled   name=""  class="wssf_ffft" value="<?php echo get_post_meta($post->ID,'wssf_select_gfont',true); ?>"/>
          </label>
          <p class="description"><?php _e( 'Change font for the feeds <a href="http://web-settler.com/wordpress-facebook-feed/">Buy Premium Version</a> </b>'); ?></p>

        </td>
      </tr>


      <tr valign='top'>
            <th scope='row'><?php _e('Show Posted On Date');?></th>
            <td>
               <div class="onoffswitch">
                     <input type="checkbox" name="wssf_enable_post_date" class="onoffswitch-checkbox"  id="myonoffswitch5" value='1'<?php checked(1, get_post_meta($post->ID,'wssf_enable_post_date',true)); ?> />
                     <label class="onoffswitch-label" for="myonoffswitch5">
                     <span class="onoffswitch-inner"></span>
                     <span class="onoffswitch-switch"></span>
                     </label>
                     </div>
                     <p class="description"><?php _e( 'Show posted on date for the feeds'); ?></p>
           </td>
          </tr>


      <tr valign='top'>
            <th scope='row'><?php _e('Show Social Media Icon');?></th>
            <td>
               <div class="onoffswitch">
                     <input type="checkbox" name="wssf_enable_social_icon" class="onoffswitch-checkbox"  id="myonoffswitch6" value='1'<?php checked(1, get_post_meta($post->ID,'wssf_enable_social_icon',true)); ?> />
                     <label class="onoffswitch-label" for="myonoffswitch6">
                     <span class="onoffswitch-inner"></span>
                     <span class="onoffswitch-switch"></span>
                     </label>
                    </div>
                    <p class="description"><?php _e( 'Display social icons of feeds '); ?></p>
           </td>
          </tr>


          <tr valign='top'>
            <th scope='row'><?php _e('Show Display Picture');?></th>
            <td>
               <div class="onoffswitch">
                     <input type="checkbox" name="wssf_enable_display_picture" class="onoffswitch-checkbox"  id="myonoffswitch7" value='1'<?php checked(1, get_post_meta($post->ID,'wssf_enable_display_picture',true)); ?> />
                     <label class="onoffswitch-label" for="myonoffswitch7">
                     <span class="onoffswitch-inner"></span>
                     <span class="onoffswitch-switch"></span>
                     </label>
                    </div>
                    <p class="description"><?php _e( 'Show/Hide display picture for  the feed '); ?></p>
           </td>
          </tr>

      </table>
        </div><!--end .accordion-section-content-->
    </div><!--end .accordion-section-->


</div><!--end .accordion-->

<?php submit_button( 'Update'); ?>
</div>

<style type="text/css">

   .onoffswitch {
        position: relative; width: 90px;
        -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
    }
   td .onoffswitch-checkbox {
        display: none;
    }
    .onoffswitch-label {
        display: block; overflow: hidden; cursor: pointer;
        border: 2px solid #999999; border-radius: 20px;
    }
    .onoffswitch-inner {
        display: block; width: 200%; margin-left: -100%;
        transition: margin 0.1s ease-in 0s;
    }
    .onoffswitch-inner:before, .onoffswitch-inner:after {
        display: block; float: left; width: 50%; height: 30px; padding: 0; line-height: 30px;
        font-size: 14px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
        box-sizing: border-box;
    }
    .onoffswitch-inner:before {
        content: "Yes";
        padding-left: 10px;
        background-color: #34A7C1; color: #FFFFFF;
    }
    .onoffswitch-inner:after {
        content: "No";
        padding-right: 10px;
        background-color: #EEEEEE; color: #999999;
        text-align: right;
    }
    .onoffswitch-switch {
        display: block; width: 18px; margin: 6px;
        background: #FFFFFF;
        position: absolute; top: 0; bottom: 0;
        right: 56px;
        border: 2px solid #999999; border-radius: 20px;
        transition: all 0.1s ease-in 0s; 
    }
    .onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
        margin-left: 0;
    }
    .onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {
        right: 0px; 

}
    @font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  src: local('Montserrat-Regular'), url(http://fonts.gstatic.com/s/montserrat/v6/zhcz-_WihjSQC0oHJ9TCYPk_vArhqVIZ0nv9q090hN8.woff2) format('woff2'), url(http://fonts.gstatic.com/s/montserrat/v6/zhcz-_WihjSQC0oHJ9TCYBsxEYwM7FgeyaSgU71cLG0.woff) format('woff');
}

@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  src: local('Lato Regular'), local('Lato-Regular'), url(http://fonts.gstatic.com/s/lato/v11/1YwB1sO8YE1Lyjf12WNiUA.woff2) format('woff2'), url(http://fonts.gstatic.com/s/lato/v11/9k-RPmcnxYEPm8CNFsH2gg.woff) format('woff');
}
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 700;
  src: local('Lato Bold'), local('Lato-Bold'), url(http://fonts.gstatic.com/s/lato/v11/H2DMvhDLycM56KNuAtbJYA.woff2) format('woff2'), url(http://fonts.gstatic.com/s/lato/v11/wkfQbvfT_02e2IWO3yYueQ.woff) format('woff');
}
@font-face {
  font-family: 'Lato';
  font-style: italic;
  font-weight: 400;
  src: local('Lato Italic'), local('Lato-Italic'), url(http://fonts.gstatic.com/s/lato/v11/PLygLKRVCQnA5fhu3qk5fQ.woff2) format('woff2'), url(http://fonts.gstatic.com/s/lato/v11/oUan5VrEkpzIazlUe5ieaA.woff) format('woff');
}
/*----- Accordion -----*/
.accordion, .accordion * {
    -webkit-box-sizing:border-box; 
    -moz-box-sizing:border-box; 
    box-sizing:border-box;
}

.accordion {
    overflow:hidden;
    box-shadow:0px 1px 3px rgba(0,0,0,0.25);
    border-radius:3px;
    background:#f7f7f7;
}

/*----- Section Titles -----*/
.accordion-section-title {
    width:100%;
    padding:15px;
    display:inline-block;
    border-bottom:2px solid #0074a2;
    background: #0074a2;
    transition:all linear 0.15s;
    /* Type */
    font-size:1.800em;
    text-align: center;
    color:#fff;
    text-decoration:none;
    font-family: Lato;
    text-shadow: 0 0 ;
}

.accordion-section-title.active, .accordion-section-title:hover {
    background:#0074a2;
    /* Type */
    text-decoration:none;
    color:#fff;
}

.accordion-section:last-child .accordion-section-title {
    border-bottom:none;
}

/*----- Section Content -----*/
.accordion-section-content {
    padding:15px;
    display:none;
    font-size:24px;
}




.container{
     
      margin: 0 auto;
    }



    ul.tabs{
      margin: 0px;
      padding: 0px;
      list-style: none;
    }
    ul.tabs li{
      background: none;
      color: #222;
      display: inline-block;
      padding: 10px 15px;
      cursor: pointer;
    }

    ul.tabs li.current{
      background: #ededed;
      color: #222;
    }

    .tab-content{
      display: none;
      background: #ededed;
      padding: 15px;
    }

    .tab-content.current{
      display: inherit;
}

.iris-picker{
 width:260px !important; 
 height:230px !important;
}

#edit-slug-box,#post-preview,#visibility{
  display: none;
}

#postbox-container-2{
  margin-top: -50px;
}
.hndle{
  background-color: #FFBA23;
}

#title{
  width: 80% !important;
  border-radius: 3px;
  border:1px solid #d3d3d3;
}




.accordion-section-content  .font-select {
  font-size: 16px;
  width: 210px;
  position: relative;
  display: inline-block;
  zoom: 1;
  *display: inline;
}

.accordion-section-content .font-select .fs-drop {
  background: #fff;
  border: 1px solid #aaa;
  border-top: 0;
  position: absolute;
  top: 29px;
  left: 0;
  -webkit-box-shadow: 0 4px 5px rgba(0,0,0,.15);
  -moz-box-shadow   : 0 4px 5px rgba(0,0,0,.15);
  -o-box-shadow     : 0 4px 5px rgba(0,0,0,.15);
  box-shadow        : 0 4px 5px rgba(0,0,0,.15);
  z-index: 999;
}

.accordion-section-content  .font-select > a {
  background-color: #fff;
  background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, #eeeeee), color-stop(0.5, white));
  background-image: -webkit-linear-gradient(center bottom, #eeeeee 0%, white 50%);
  background-image: -moz-linear-gradient(center bottom, #eeeeee 0%, white 50%);
  background-image: -o-linear-gradient(top, #eeeeee 0%,#ffffff 50%);
  background-image: -ms-linear-gradient(top, #eeeeee 0%,#ffffff 50%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#eeeeee', endColorstr='#ffffff',GradientType=0 );
  background-image: linear-gradient(top, #eeeeee 0%,#ffffff 50%);
  -webkit-border-radius: 4px;
  -moz-border-radius   : 4px;
  border-radius        : 4px;
  -moz-background-clip   : padding;
  -webkit-background-clip: padding-box;
  background-clip        : padding-box;
  border: 1px solid #aaa;
  display: block;
  overflow: hidden;
  white-space: nowrap;
  position: relative;
  height: 26px;
  line-height: 26px;
  padding: 0 0 0 8px;
  color: #444;
  text-decoration: none;
}

.accordion-section-content  .font-select > a span {
  margin-right: 26px;
  display: block;
  overflow: hidden;
  white-space: nowrap;
  line-height: 1.8;
  -o-text-overflow: ellipsis;
  -ms-text-overflow: ellipsis;
  text-overflow: ellipsis;
  cursor: pointer;
}

.accordion-section-content  .font-select > a div {
  -webkit-border-radius: 0 4px 4px 0;
  -moz-border-radius   : 0 4px 4px 0;
  border-radius        : 0 4px 4px 0;
  -moz-background-clip   : padding;
  -webkit-background-clip: padding-box;
  background-clip        : padding-box;
  background: #ccc;
  background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, #ccc), color-stop(0.6, #eee));
  background-image: -webkit-linear-gradient(center bottom, #ccc 0%, #eee 60%);
  background-image: -moz-linear-gradient(center bottom, #ccc 0%, #eee 60%);
  background-image: -o-linear-gradient(bottom, #ccc 0%, #eee 60%);
  background-image: -ms-linear-gradient(top, #cccccc 0%,#eeeeee 60%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cccccc', endColorstr='#eeeeee',GradientType=0 );
  background-image: linear-gradient(top, #cccccc 0%,#eeeeee 60%);
  border-left: 1px solid #aaa;
  position: absolute;
  right: 0;
  top: 0;
  display: block;
  height: 100%;
  width: 18px;
}

.accordion-section-content  .font-select > a div b {
  background: url(<?php echo plugins_url( '/images/fs-sprite.png', __FILE__); ?>) no-repeat 0 1px;
  display: block;
  width: 100%;
  height: 100%;
  cursor: pointer;
}

.accordion-section-content  .font-select .fs-drop {
  -webkit-border-radius: 0 0 4px 4px;
  -moz-border-radius   : 0 0 4px 4px;
  border-radius        : 0 0 4px 4px;
  -moz-background-clip   : padding;
  -webkit-background-clip: padding-box;
  background-clip        : padding-box;
}

.accordion-section-content  .font-select .fs-results {
  margin: 0 4px 4px 0;
  max-height: 190px;
  width: 200px;
  padding: 0 0 0 4px;
  position: relative;
  overflow-x: hidden;
  overflow-y: auto;
}

.accordion-section-content  .font-select .fs-results li {
  line-height: 80%;
  padding: 7px 7px 8px;
  margin: 0;
  list-style: none;
  font-size: 18px;
}

.accordion-section-content  .font-select .fs-results li.active {
  background: #3875d7;
  color: #fff;
  cursor: pointer;
}
.accordion-section-content .font-select .fs-results li em {
  background: #feffde;
  font-style: normal;
}

.accordion-section-content .font-select .fs-results li.active em {
  background: transparent;
}

.accordion-section-content .font-select-active > a {
  -webkit-box-shadow: 0 0 5px rgba(0,0,0,.3);
  -moz-box-shadow   : 0 0 5px rgba(0,0,0,.3);
  -o-box-shadow     : 0 0 5px rgba(0,0,0,.3);
  box-shadow        : 0 0 5px rgba(0,0,0,.3);
  border: 1px solid #5897fb;
}

.accordion-section-content .font-select-active > a {
  border: 1px solid #aaa;
  -webkit-box-shadow: 0 1px 0 #fff inset;
  -moz-box-shadow   : 0 1px 0 #fff inset;
  -o-box-shadow     : 0 1px 0 #fff inset;
  box-shadow        : 0 1px 0 #fff inset;
  background-color: #eee;
  background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, white), color-stop(0.5, #eeeeee));
  background-image: -webkit-linear-gradient(center bottom, white 0%, #eeeeee 50%);
  background-image: -moz-linear-gradient(center bottom, white 0%, #eeeeee 50%);
  background-image: -o-linear-gradient(bottom, white 0%, #eeeeee 50%);
  background-image: -ms-linear-gradient(top, #ffffff 0%,#eeeeee 50%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#eeeeee',GradientType=0 );
  background-image: linear-gradient(top, #ffffff 0%,#eeeeee 50%);
  -webkit-border-bottom-left-radius : 0;
  -webkit-border-bottom-right-radius: 0;
  -moz-border-radius-bottomleft : 0;
  -moz-border-radius-bottomright: 0;
  border-bottom-left-radius : 0;
  border-bottom-right-radius: 0;
}

.accordion-section-content .font-select-active > a div {
  background: transparent;
  border-left: none;
}

.accordion-section-content .font-select-active > a div b {
  background-position: -18px 1px;
}


.accordion-section-content  span#pal {
  top: 80px; 
}

.accordion-section-title::after {
  display: none;
}

    </style>
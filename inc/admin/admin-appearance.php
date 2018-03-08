<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Bail if accessed directly

/** 
*  jumpoff_admin_body_class
*  Adds an admin body class that we can use to hide or target elements with css
*
*  @return: $classes (string)
*/
function jumpoff_admin_body_class( $classes ){ 
  // Global Post
  global $post;

   if( !is_object($post) ) 
        return;
  // Make sure we're getting $post object
  setup_postdata( $post );

  // Returns an object that includes the screen’s ID, base, post type, taxonomy
  // @see https://developer.wordpress.org/reference/functions/get_current_screen
  $screen = get_current_screen();

  // Construct class form the post_name
  $page_name = 'admin-'.$post->post_name;
  
  // Construct class from post id
  $post_id = 'admin-post-'.$post->ID;
  
  if ( 'post' == $screen->base ) {
    $classes .= ' ' . $screen->post_type . ' ' . $post_id . ' ' . $page_name;
  }
  if(basename(get_page_template()) === 'page.php'){
    $classes .= ' admin-page-template-default';
  }
  
  // Return our admin classes
  return $classes;
  
  // Reset
  wp_reset_postdata( $post );
}
// Run our admin body class through abdmin_body_class
add_filter( 'admin_body_class', 'jumpoff_admin_body_class' );


/**
 * Remove Visual Editor
 */
//add_filter ( 'user_can_richedit' , create_function ( '$a' , 'return false;' ) , 50 );

/**
 * Remove Admin Bar from front end
 */
add_filter('show_admin_bar', '__return_false');  

/**
 * Remove Theme Picker
 */
remove_action( 'admin_color_scheme_picker', 'admin_color_scheme_picker' );
remove_action( 'additional_capabilities_display', 'additional_capabilities_display' );


/**
 * Remove Items form admin bar to clean stuff up
 */
function jumpoff_admin_bar_remove() {
  global $wp_admin_bar;

  $wp_admin_bar->remove_menu('wp-logo');          // Remove the WordPress logo
  $wp_admin_bar->remove_menu('about');            // Remove the about WordPress link
  $wp_admin_bar->remove_menu('wporg');            // Remove the WordPress.org link
  $wp_admin_bar->remove_menu('documentation');    // Remove the WordPress documentation link
  $wp_admin_bar->remove_menu('support-forums');   // Remove the support forums link
  $wp_admin_bar->remove_menu('feedback');         // Remove the feedback link
  //$wp_admin_bar->remove_menu('site-name');        // Remove the site name menu
  $wp_admin_bar->remove_menu('view-site');        // Remove the view site link
  $wp_admin_bar->remove_menu('updates');          // Remove the updates link
  $wp_admin_bar->remove_menu('comments');         // Remove the comments link
  $wp_admin_bar->remove_menu('new-content');      // Remove the content link
  //$wp_admin_bar->remove_menu('my-account'); 
}

add_action('wp_before_admin_bar_render', 'jumpoff_admin_bar_remove', 0);

/**
 * Admin Footer Text
 */
function jumpoff_custom_admin_footer() {
  _e( '<span id="footer-thankyou">Developed by <a href="http://urbaninfluence.com" target="_blank">Stephen Scaff</a></span>' );
}
// adding it to the admin area
add_filter( 'admin_footer_text', 'jumpoff_custom_admin_footer' );

?>
<?php 

function wpb_custom_new_menu() {
	register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
  }
  add_action( 'init', 'wpb_custom_new_menu' );



  add_filter( 'post_thumbnail_html', 'remove_wps_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_wps_width_attribute', 10 );
  
function remove_wps_width_attribute( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}


register_sidebar( array(
    'name' => 'Footer Area 1',
    'id' => 'footer-1',
    'description' => 'Appears in the footer area',
    'before_widget' => '<div class="col-lg-6 col-md-6 col-sm-12">',
    'after_widget' => '</div>',
    'before_title' => '<div class="footer-col>',
    'after_title' => '</div>',
   
    ) );
    
    register_sidebar( array(
    'name' => 'Footer Area 2',
    'id' => 'footer-2',
    'description' => 'Appears in the footer area',
    'before_widget' => '<div class="col-lg-6 col-md-6 col-sm-12">',
    'after_widget' => '</div>',
    'before_title' => '<div class="footer-col>',
    'after_title' => '</div>',
    
    ) );


    function my_custom_mime_types( $mimes ) {
 
      // New allowed mime types.
      $mimes['svg'] = 'image/svg+xml';
      $mimes['svgz'] = 'image/svg+xml';
      $mimes['webp'] = 'image/svg+xml';
      $mimes['doc'] = 'application/msword';
       
      // Optional. Remove a mime type.
      unset( $mimes['exe'] );
       
      return $mimes;
      }
      add_filter( 'upload_mimes', 'my_custom_mime_types' );
    
      // wenp end 
    
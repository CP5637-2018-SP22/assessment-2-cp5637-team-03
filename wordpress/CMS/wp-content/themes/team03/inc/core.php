<?php
/**
 * team03 core file.
 *
 * This is the template that includes all the other files for core featured of team03
 *
 * @package team03
 * @subpackage team03
 * @since 0.3
 */

/**
 * Include options function.
 */
require get_template_directory() . '/inc/options.php';


// Load customizer defaults values
require get_template_directory() . '/inc/customizer/defaults.php';


/**
 * Merge values from default options array and values from customizer
 *
 * @return array Values returned from customizer
 * @since team03 0.3
 */
function team03_get_theme_options() {
  $team03_default_options = team03_get_default_theme_options();

  return array_merge( $team03_default_options , get_theme_mod( 'team03_theme_options', $team03_default_options ) ) ;
}


/**
  * Write message for featured image upload
  *
  * @return array Values returned from customizer
  * @since team03 0.3
*/
function team03_slider_image_instruction( $content, $post_id ) {
  $allowed = array( 'page' );
  if ( in_array( get_post_type( $post_id ), $allowed ) ) {
    return $content .= '<p><b>' . esc_html__( 'Note', 'team03' ) . ':</b>' . esc_html__( ' The recommended size for image is 1170px by 500px while using it for slider', 'team03' ) . '</p>';
  } 
  return $content;
}
add_filter( 'admin_post_thumbnail_html', 'team03_slider_image_instruction', 10, 2);

/**
 * Add breadcrumb functions.
 */
require get_template_directory() . '/inc/breadcrumb-class.php';
/**
 * Add helper functions.
 */
require get_template_directory() . '/inc/helpers.php';

/**
 * Add structural hooks.
 */
require get_template_directory() . '/inc/structure.php';

/**
 * Add metabox
 */
require get_template_directory() . '/inc/metabox/metabox.php';

/**
 * modules additions.
 */
require get_template_directory() . '/inc/modules/modules.php';

/**
 * Custom widget additions.
 */
require get_template_directory() . '/inc/widgets/widgets.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer/customizer.php';

/**
 * Load woocommerce compatibility file.
 */
require get_template_directory() . '/inc/woocommerce.php';
/**
 * Load tgmpa
 */
require get_template_directory() . '/inc/tgmpa/tgm-hook.php';


/**
 * Merge values from default options array and values from customizer
 *
 * @return array Values returned from customizer
 * @since team03 Pro 1.0
 */
function team03_pro_get_theme_options() {
  $team03_pro_default_options = team03_pro_get_default_theme_options();

  return array_merge( $team03_pro_default_options , get_theme_mod( 'team03_pro_theme_options', $team03_pro_default_options ) ) ;
}

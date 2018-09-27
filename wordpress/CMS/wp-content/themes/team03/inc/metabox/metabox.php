<?php
/**
 * team03 metabox file.
 *
 * This is the template that includes all the other files for metaboxes of team03 theme
 * @package team03
 * @subpackage team03
 * @since 0.3
 */

// Include slider layout meta
require get_template_directory() . '/inc/metabox/sidebar-layout.php';

// Include header image meta
require get_template_directory() . '/inc/metabox/header-image.php';

// Include event meta
require get_template_directory() . '/inc/metabox/event.php';

/**
 * Adds meta box to the post editing screen
 */
function team03_custom_meta() {
	// Sidebar layout meta
    add_meta_box( 'team03_sidebar_layout_meta', esc_html__( 'Sidebar Layout', 'team03' ), 'team03_sidebar_position_callback', array( 'post', 'page', 'jetpack-testimonial' ) );
	
	// Header image meta
    add_meta_box( 'team03_header_image', esc_html__( 'Header Image', 'team03' ), 'team03_header_image_callback', array( 'post', 'page' ) );

    // Event meta
    add_meta_box( 'team03_event_meta', esc_html__( 'Event Meta', 'team03' ), 'team03_event_meta_callback', array( 'post', 'page' ) );
}
add_action( 'add_meta_boxes', 'team03_custom_meta' );



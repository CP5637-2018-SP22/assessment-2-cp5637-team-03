<?php
/**
 * team03 customizer default options
 *
 * @package team03
 * @subpackage team03
 * @since 0.3
 */


/**
 * Returns the default options for team03.
 *
 * @since team03 0.3
 * @return array An array of default values
 */
function team03_get_default_theme_options() {
	$team03_default_options = array(
		// Color layout options
		'header_title_color'           	=> '#ffffff',
		'header_tagline_color'          => '#ffffff',
		
		// Theme Options
		'loader_enable'         		=> false,
		'loader_icon'         			=> 'fa-spinner',
		'site_layout'         			=> 'wide',
		'sidebar_position'         		=> 'right-sidebar',
		'long_excerpt_length'           => 50,
		'read_more_text'		        => esc_html__( 'Read More', 'team03' ),
		'breadcrumb_enable'         	=> false,
		'breadcrumb_separator'         	=> '/',
		'pagination_enable'         	=> true,
		'pagination_type'         		=> 'default',
		'scroll_top_visible'        	=> true,
		'reset_options'      			=> false,
		'enable_frontpage_content' 		=> true,
		'archive_content_type' 			=> 'excerpt',
		'archive_image' 				=> false,
		'archive_meta' 					=> false,
		
		// Top bar options
		'top_bar_content_type'   		=> 'custom',
		'top_bar_show'           		=> false,
		'top_bar_field_number'   		=> 3,
		
		// slider
		'slider_enable'                 => 'disabled',
		'slider_content_effect'         => 'cubic-bezier(0.250, 0.250, 0.750, 0.750)',
		'slider_content_type'           => 'demo',
		'no_of_slider'                  => 2,
		'enable_slider_controls'        => true,
		'enable_slider_pager'           => true,
		'enable_slider_dragable'        => true,
		'slider_call_to_action'         => false,
		'slider_call_to_action_new_tab' => true,
		'enable_slider_caption' 		=> true,
		
		// about
		'about_section_enable'			=> 'disabled',
		
		
		// category blog two
		'category_blog_two_enable'		=> 'disabled',
		'category_blog_two_dragable'	=> true,
		'category_blog_two_autoplay'	=> true,
		'category_blog_two_title'		=> esc_html__( 'Second Category Blog', 'team03' ),
		'category_blog_two_count'		=> 8,
		'category_blog_two_type'		=> 'recent-posts',
		'category_blog_two_layout'		=> 4,
		
		// Upcoming Event
		'cat_blog_four_enable'            => 'static-frontpage',
		'cat_blog_four_title'             => esc_html__( 'Upcoming events', 'team03' ),
		'cat_blog_four_sub_title'         => esc_html__( 'How can we help you', 'team03' ),
		'cat_blog_four_content_type'      => 'category',
		'cat_blog_four_infinite_enable'   => false,
		'cat_blog_four_pager_enable'      => false,
		'cat_blog_four_arrows_enable'     => true,
		'cat_blog_four_autoplay_enable'   => false,
		'cat_blog_four_slide_to_show'     => 3,
		'cat_blog_four_slide_to_scroll'   => 1,
		'cat_blog_four_num_of_posts'      => 6,

		// category blog one
		'category_blog_one_enable'		=> 'disabled',
		'category_blog_one_dragable'	=> true,
		'category_blog_one_autoplay'	=> true,
		'category_blog_one_layout'		=> 6,
		'category_blog_one_title'		=> esc_html__( 'First Category Blog', 'team03' ),
		'category_blog_one_type'		=> 'category',
		'category_blog_one_icon'		=> 'fa-snapchat-ghost',
		
		// Partners
		'partner_enable'				=> 'disabled',
		'partner_title'					=> esc_html__( 'Our Partners', 'team03' ),
		'no_of_partner'					=> 3,
		'partner_layout'				=> 6,
		'partner_dragable'				=> true,
		'partner_autoplay'				=> true,
	);

	$output = apply_filters( 'team03_default_theme_options', $team03_default_options );
	// Sort array in ascending order, according to the key:
	if ( ! empty( $output ) ) {
		ksort( $output );
	}

	return $output;
}
<?php
/**
* Homepage (Static ) options
*
* @package team03
* @subpackage team03
* @since 0.3
*/

// Homepage (Static ) setting and control.
$wp_customize->add_setting( 'team03_theme_options[enable_frontpage_content]', array(
	'sanitize_callback'   => 'team03_sanitize_checkbox',
	'default'             => $options['enable_frontpage_content']
) );

$wp_customize->add_control( 'team03_theme_options[enable_frontpage_content]', array(
	'label'       => esc_html__( 'Enable Content', 'team03' ),
	'description' => esc_html__( 'Check to enable content on static front page only.', 'team03' ),
	'section'     => 'static_front_page',
	'type'        => 'checkbox'
) );
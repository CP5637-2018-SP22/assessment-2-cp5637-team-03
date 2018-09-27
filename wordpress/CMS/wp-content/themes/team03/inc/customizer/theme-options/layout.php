<?php
/**
* Layout options
*
* @package team03
* @subpackage team03
* @since 0.3
*/

// Add sidebar section
$wp_customize->add_section( 'team03_layout', array(
	'title'               => esc_html__('Layout','team03'),
	'description'         => esc_html__( 'Layout section options.', 'team03' ),
	'panel'               => 'team03_theme_options_panel'
) );

// Sidebar position setting and control.
$wp_customize->add_setting( 'team03_theme_options[sidebar_position]', array(
	'sanitize_callback'   => 'team03_sanitize_select',
	'default'             => $options['sidebar_position']
) );

$wp_customize->add_control( 'team03_theme_options[sidebar_position]', array(
	'label'               => esc_html__( 'Sidebar Position', 'team03' ),
	'section'             => 'team03_layout',
	'type'                => 'select',
	'choices'			  => team03_sidebar_position(),
) );

// Site layout setting and control.
$wp_customize->add_setting( 'team03_theme_options[site_layout]', array(
	'sanitize_callback'   => 'team03_sanitize_select',
	'default'             => $options['site_layout']
) );

$wp_customize->add_control( 'team03_theme_options[site_layout]', array(
	'label'               => esc_html__( 'Site Layout', 'team03' ),
	'section'             => 'team03_layout',
	'type'                => 'select',
	'choices'			  => team03_site_layout(),
) );

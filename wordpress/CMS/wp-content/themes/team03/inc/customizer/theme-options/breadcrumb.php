<?php
/**
* Breadcrumb options
*
* @package team03
* @subpackage team03
* @since 0.3
*/

$wp_customize->add_section( 'team03_breadcrumb', array(
	'title'             => esc_html__('Breadcrumb','team03'),
	'description'       => esc_html__( 'Breadcrumb section options.', 'team03' ),
	'panel'             => 'team03_theme_options_panel'
) );

// Breadcrumb enable setting and control.
$wp_customize->add_setting( 'team03_theme_options[breadcrumb_enable]', array(
	'sanitize_callback'	=> 'team03_sanitize_checkbox',
	'default'          	=> $options['breadcrumb_enable']
) );

$wp_customize->add_control( 'team03_theme_options[breadcrumb_enable]', array(
	'label'            	=> esc_html__( 'Enable Breadcrumb', 'team03' ),
	'section'          	=> 'team03_breadcrumb',
	'type'             	=> 'checkbox',
) );

// Breadcrumb seperator.
$wp_customize->add_setting( 'team03_theme_options[breadcrumb_separator]', array(
	'sanitize_callback'	=> 'sanitize_text_field',
	'default'          	=> $options['breadcrumb_separator']
) );

$wp_customize->add_control( 'team03_theme_options[breadcrumb_separator]', array(
	'label'            	=> esc_html__( 'Breadcrumb Seperator', 'team03' ),
	'section'          	=> 'team03_breadcrumb',
	'type'             	=> 'text',
	'input_attrs'		=> array(
		'style' => 'width:100px'
		),
	'active_callback'	=> 'team03_is_breadcrumb_enable'
) );
<?php
/**
* pagination options
*
* @package team03
* @subpackage team03
* @since 0.3
*/

// Add sidebar section
$wp_customize->add_section( 'team03_pagination', array(
	'title'               => esc_html__('Pagination','team03'),
	'description'         => esc_html__( 'Pagination section options.', 'team03' ),
	'panel'               => 'team03_theme_options_panel'
) );

// Sidebar position setting and control.
$wp_customize->add_setting( 'team03_theme_options[pagination_enable]', array(
	'sanitize_callback'   => 'team03_sanitize_checkbox',
	'default'             => $options['pagination_enable']
) );

$wp_customize->add_control( 'team03_theme_options[pagination_enable]', array(
	'label'               => esc_html__( 'Pagination Enable', 'team03' ),
	'section'             => 'team03_pagination',
	'type'                => 'checkbox',
) );

// Site layout setting and control.
$wp_customize->add_setting( 'team03_theme_options[pagination_type]', array(
	'sanitize_callback'   => 'team03_sanitize_select',
	'default'             => $options['pagination_type']
) );

$wp_customize->add_control( 'team03_theme_options[pagination_type]', array(
	'label'               => esc_html__( 'Pagination Type', 'team03' ),
	'section'             => 'team03_pagination',
	'type'                => 'select',
	'choices'			  => team03_pagination_options(),
	'active_callback'	  => 'team03_is_pagination_enable'
) );

<?php
/**
* About options
*
* @package team03
* @subpackage team03
* @since 0.3
*/

// Add about enable section
$wp_customize->add_section( 'team03_about_section', array(
	'title'             => esc_html__('About','team03'),
	'description'       => esc_html__( 'About section options.', 'team03' ),
	'panel'             => 'team03_sections_panel'
) );

// Add about enable setting and control.
$wp_customize->add_setting( 'team03_theme_options[about_section_enable]', array(
	'default'           => $options['about_section_enable'],
	'sanitize_callback' => 'team03_sanitize_select'
) );

$wp_customize->add_control( 'team03_theme_options[about_section_enable]', array(
	'label'             => esc_html__( 'Enable on', 'team03' ),
	'section'           => 'team03_about_section',
	'type'              => 'select',
	'choices'           => team03_enable_disable_options()
) );

// Add enable page select setting and control.
$wp_customize->add_setting( 'team03_theme_options[about_content_page]', array(
	'sanitize_callback' => 'team03_sanitize_page'
) );

$wp_customize->add_control( 'team03_theme_options[about_content_page]', array(
	'label'           	=> esc_html__( 'Select Page', 'team03' ),
	'description'		=> esc_html__( 'Set the image size of selected page to 1200px by 800px.','team03' ),
	'section'         	=> 'team03_about_section',
	'type'            	=> 'dropdown-pages',
	'active_callback' 	=> 'team03_is_about_active',
) );

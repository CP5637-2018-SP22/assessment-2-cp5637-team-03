<?php 

// Add archive section
$wp_customize->add_section( 'team03_archive_option', array(
	'title'             => esc_html__( 'Archive Options','team03' ),
	'description'       => esc_html__( 'These options works only on archive pages.', 'team03' ),
	'panel'             => 'team03_theme_options_panel',
) );

// Show archive content type setting and control.
$wp_customize->add_setting( 'team03_theme_options[archive_content_type]', array(
	'default'           => $options['archive_content_type'],
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( 'team03_theme_options[archive_content_type]', array(
	'label'             => esc_html__( 'Archive Content', 'team03' ),
	'section'           => 'team03_archive_option',
	'type'				=> 'radio',
	'choices'			=> array( 'excerpt' => esc_html__( 'Excerpt', 'team03' ),
								  'content' => esc_html__( 'Full Content', 'team03' )
									 ),
) );

// Show archive image setting and control.
$wp_customize->add_setting( 'team03_theme_options[archive_image]', array(
	'default'           => $options['archive_image'],
	'sanitize_callback' => 'team03_sanitize_checkbox',
) );

$wp_customize->add_control( 'team03_theme_options[archive_image]', array(
	'label'       => esc_html__( 'Hide Featured Image', 'team03' ),
	'description' => esc_html__( 'Check to hide featured images.', 'team03' ),
	'section'     => 'team03_archive_option',
	'type'        => 'checkbox',
) );

// Show archive meta setting and control.
$wp_customize->add_setting( 'team03_theme_options[archive_meta]', array(
	'default'           => $options['archive_meta'],
	'sanitize_callback' => 'team03_sanitize_checkbox',
) );

$wp_customize->add_control( 'team03_theme_options[archive_meta]', array(
	'label'             => esc_html__( 'Hide Meta', 'team03' ),
	'description'       => esc_html__( 'Check to hide meta like date, author, category.', 'team03' ),
	'section'           => 'team03_archive_option',
	'type'				=> 'checkbox',
) );

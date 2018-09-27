<?php
/**
 * Reset options
 *
 * @package team03
 * @subpackage team03
 * @since 0.3
 */

/**
* Reset section
*/
// Add reset enable section
$wp_customize->add_section( 'team03_reset_section', array(
	'title'             => esc_html__('Reset all settings','team03'),
	'description'       => esc_html__( 'Caution: All settings will be reset to default. Refresh the page after clicking Save & Publish.', 'team03' ),
) );

// Add reset enable setting and control.
$wp_customize->add_setting( 'team03_theme_options[reset_options]', array(
	'default'           => $options['reset_options'],
	'sanitize_callback' => 'team03_sanitize_checkbox',
	'transport'			  => 'postMessage'
) );

$wp_customize->add_control( 'team03_theme_options[reset_options]', array(
	'label'             => esc_html__( 'Check to reset all settings', 'team03' ),
	'section'           => 'team03_reset_section',
	'type'              => 'checkbox',
) );
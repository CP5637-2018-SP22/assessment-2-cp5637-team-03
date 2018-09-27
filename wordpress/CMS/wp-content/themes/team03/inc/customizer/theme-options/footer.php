<?php
/**
 * Footer options
 *
 * @package team03
 * @subpackage team03
 * @since 0.3
 */

/*Footer Section*/
$wp_customize->add_section( 'team03_section_footer',
	array(
		'title'      			=> esc_html__( 'Footer Options', 'team03' ),
		'priority'   			=> 900,
		'panel'      			=> 'team03_theme_options_panel',
	)
);

// scroll top visible
$wp_customize->add_setting( 'team03_theme_options[scroll_top_visible]',
	array(
		'default'       		=> $options['scroll_top_visible'],
		'sanitize_callback'		=> 'team03_sanitize_checkbox',
	)
);
$wp_customize->add_control( 'team03_theme_options[scroll_top_visible]',
    array(
		'label'      			=> esc_html__( 'Display Scroll Top Button', 'team03' ),
		'section'    			=> 'team03_section_footer',
		'type'		 			=> 'checkbox',
    )
);
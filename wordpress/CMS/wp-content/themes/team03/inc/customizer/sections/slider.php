<?php
/**
* Slider options
*
* @package team03
* @subpackage team03
* @since 0.3
*/

// Add slider enable section
$wp_customize->add_section( 'team03_slider_section', array(
	'title'             => esc_html__('Slider','team03'),
	'description'       => esc_html__( 'Slider section options.', 'team03' ),
	'panel'             => 'team03_sections_panel'
) );

// Add slider enable setting and control.
$wp_customize->add_setting( 'team03_theme_options[slider_enable]', array(
	'default'           => $options['slider_enable'],
	'sanitize_callback' => 'team03_sanitize_select'
) );

$wp_customize->add_control( 'team03_theme_options[slider_enable]', array(
	'label'             => esc_html__( 'Enable on', 'team03' ),
	'section'           => 'team03_slider_section',
	'type'              => 'select',
	'choices'           => team03_enable_disable_options()
) );

// Add slider effects setting and control.
$wp_customize->add_setting( 'team03_theme_options[slider_content_effect]', array(
	'default'           => $options['slider_content_effect'],
	'sanitize_callback' => 'team03_sanitize_select'
) );

$wp_customize->add_control( 'team03_theme_options[slider_content_effect]', array(
	'label'           => esc_html__( 'Transition Effects', 'team03' ),
	'section'         => 'team03_slider_section',
	'type'            => 'select',
	'active_callback' => 'team03_is_slider_active',
	'choices'         => team03_slider_effect(),
) );

// Add enable arrow controls setting and control.
$wp_customize->add_setting( 'team03_theme_options[enable_slider_controls]', array(
	'default'           => $options['enable_slider_controls'],
	'sanitize_callback' => 'team03_sanitize_checkbox'
) );

$wp_customize->add_control( 'team03_theme_options[enable_slider_controls]', array(
	'label'           => esc_html__( 'Enable Arrow Controls', 'team03' ),
	'section'         => 'team03_slider_section',
	'type'            => 'checkbox',
	'active_callback' => 'team03_is_slider_active',
) );

// Add enable slider pager setting and control.
$wp_customize->add_setting( 'team03_theme_options[enable_slider_pager]', array(
	'default'           => $options['enable_slider_pager'],
	'sanitize_callback' => 'team03_sanitize_checkbox'
) );

$wp_customize->add_control( 'team03_theme_options[enable_slider_pager]', array(
	'label'           => esc_html__( 'Enable Pager Controls', 'team03' ),
	'section'         => 'team03_slider_section',
	'type'            => 'checkbox',
	'active_callback' => 'team03_is_slider_active',
) );

// Add enable slider dragable setting and control.
$wp_customize->add_setting( 'team03_theme_options[enable_slider_dragable]', array(
	'default'           => $options['enable_slider_dragable'],
	'sanitize_callback' => 'team03_sanitize_checkbox'
) );

$wp_customize->add_control( 'team03_theme_options[enable_slider_dragable]', array(
	'label'           => esc_html__( 'Slider Dragable', 'team03' ),
	'section'         => 'team03_slider_section',
	'type'            => 'checkbox',
	'active_callback' => 'team03_is_slider_active',
) );

// Add enable slider caption setting and control.
$wp_customize->add_setting( 'team03_theme_options[enable_slider_caption]', array(
	'default'           => $options['enable_slider_caption'],
	'sanitize_callback' => 'team03_sanitize_checkbox'
) );

$wp_customize->add_control( 'team03_theme_options[enable_slider_caption]', array(
	'label'           => esc_html__( 'Enable Caption.', 'team03' ),
	'section'         => 'team03_slider_section',
	'type'            => 'checkbox',
	'active_callback' => 'team03_is_slider_active',
) );

// Add slider number setting and control.
$wp_customize->add_setting( 'team03_theme_options[no_of_slider]', array(
	'default'           => $options['no_of_slider'],
	'sanitize_callback' => 'team03_sanitize_number_range',
	'validate_callback' => 'team03_validate_no_of_slider',
) );

$wp_customize->add_control( 'team03_theme_options[no_of_slider]', array(
	'label'           => esc_html__( 'Number of slides', 'team03' ),
	'description'     => esc_html__( 'Notice: Please refresh after the number of slides is set to see the effects.', 'team03' ),
	'section'         => 'team03_slider_section',
	'type'            => 'number',
	'active_callback' => 'team03_is_slider_active',
	'input_attrs'     => array(
		'max' => 5,
		'min' => 1,
		'style' => 'width:100px'
	)
) );

/**
 * Page Content Type
 */
for ($i=1; $i <= $options['no_of_slider']; $i++) {
	// Show page drop-down setting and control
	$wp_customize->add_setting( 'team03_theme_options[slider_content_page_'.$i.']', array(
		'sanitize_callback' => 'team03_sanitize_page'
	) );

	$wp_customize->add_control( 'team03_theme_options[slider_content_page_'.$i.']', array(
		'label'           => sprintf( esc_html__( 'Page Slider # %s', 'team03' ), $i ),
		'section'         => 'team03_slider_section',
		'active_callback' => 'team03_is_slider_active',
		'type'				=> 'dropdown-pages'
	) );
}


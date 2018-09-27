<?php
/**
* Partners options
*
* @package team03
* @subpackage team03
* @since 0.3
*/

// Add Partners enable section
$wp_customize->add_section( 'team03_partner', array(
	'title'             => esc_html__('Partners','team03'),
	'description'       => esc_html__( 'Partners options.', 'team03' ),
	'panel'             => 'team03_sections_panel'
) );

// Add Partners enable setting and control.
$wp_customize->add_setting( 'team03_theme_options[partner_enable]', array(
	'default'           => $options['partner_enable'],
	'sanitize_callback' => 'team03_sanitize_select'
) );

$wp_customize->add_control( 'team03_theme_options[partner_enable]', array(
	'label'             => esc_html__( 'Enable on', 'team03' ),
	'section'           => 'team03_partner',
	'type'              => 'select',
	'choices'           => team03_enable_disable_options()
) );

// Add Partners title.
$wp_customize->add_setting( 'team03_theme_options[partner_title]', array(
	'default'           => $options['partner_title'],
	'sanitize_callback' => 'sanitize_text_field',
	'transport'         => 'postMessage',
) );

$wp_customize->add_control( 'team03_theme_options[partner_title]', array(
	'label'             => esc_html__( 'Title', 'team03' ),
	'section'           => 'team03_partner',
	'type'              => 'text',
	'active_callback'	=> 'team03_partner_active'
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial( 'team03_theme_options[partner_title]', array(
		'selector'            => '#our-partners .container .entry-header .entry-title',
		'render_callback'     => 'team03_partial_partner_title',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
	) );
}

// Add partner slider dragable.
$wp_customize->add_setting( 'team03_theme_options[partner_dragable]', array(
	'default'           => $options['partner_dragable'],
	'sanitize_callback' => 'team03_sanitize_checkbox'
) );

$wp_customize->add_control( 'team03_theme_options[partner_dragable]', array(
	'label'             => esc_html__( 'Enable Slide Dragable', 'team03' ),
	'section'           => 'team03_partner',
	'type'              => 'checkbox',
	'active_callback'	=> 'team03_partner_active'
) );

// Add category blog two slider auto play.
$wp_customize->add_setting( 'team03_theme_options[partner_autoplay]', array(
	'default'           => $options['partner_autoplay'],
	'sanitize_callback' => 'team03_sanitize_checkbox'
) );

$wp_customize->add_control( 'team03_theme_options[partner_autoplay]', array(
	'label'             => esc_html__( 'Enable Auto Slide', 'team03' ),
	'section'           => 'team03_partner',
	'type'              => 'checkbox',
	'active_callback'	=> 'team03_partner_active'
) );

// Add no of Partners.
$wp_customize->add_setting( 'team03_theme_options[no_of_partner]', array(
	'default'           => $options['no_of_partner'],
	'sanitize_callback' => 'absint',
	'validate_callback' => 'team03_validate_partner_count'
) );

$wp_customize->add_control( 'team03_theme_options[no_of_partner]', array(
	'label'             => esc_html__( 'No of partners', 'team03' ),
	'description'		=> esc_html__( 'Min 1 / Max 15. Notice: Please refresh after the number of features is set to see the effects.' , 'team03' ),
	'section'           => 'team03_partner',
	'type'              => 'number',
	'input_attrs' 		=> array(
		'min' => 1,
		'max' => 15,
		'style' => 'width:100px'
		),
	'active_callback'	=> 'team03_partner_active'
) );


for ( $i = 1; $i <= $options['no_of_partner']; $i++ ) { 

	// Add Partners image.
	$wp_customize->add_setting( 'team03_theme_options[partner_page_'. $i .']',
	  array(
	    'sanitize_callback' 	=> 'team03_sanitize_page',
	  )
	);
	$wp_customize->add_control( 'team03_theme_options[partner_page_'. $i .']',
	    array(
	    	'label'       		=> sprintf( esc_html__( 'Select Page # %s', 'team03' ), $i ),
			'section'     		=> 'team03_partner',
			'type'				=> 'dropdown-pages',
			'active_callback'	=> 'team03_partner_active',
	    )
	);
}

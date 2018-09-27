<?php
/**
 * Customizer active callbacks
 *
 * @package team03
 * @subpackage team03
 * @since 0.3
 */


/**
 * Check if loader is enabled.
 *
 * @since team03 0.3
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function team03_is_loader_enable( $control ) {
	return $control->manager->get_setting( 'team03_theme_options[loader_enable]' )->value();
}

/**
 * Check if breadcrumb is enabled.
 *
 * @since team03 0.3
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function team03_is_breadcrumb_enable( $control ) {
	return $control->manager->get_setting( 'team03_theme_options[breadcrumb_enable]' )->value();
}


/**
 * Check if pagination is enabled.
 *
 * @since team03 0.3
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */

function team03_is_pagination_enable( $control ) {
	return $control->manager->get_setting( 'team03_theme_options[pagination_enable]' )->value();
}

/**
 * Check if top bar is enabled.
 *
 * @since team03 0.6
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function team03_is_top_bar_enable( $control ) {
	return $control->manager->get_setting( 'team03_theme_options[top_bar_show]' )->value();
}
/**
 * Check if slider is enabled.
 *
 * @since team03 0.3
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */

function team03_is_slider_active( $control ) {
	if ( 'disabled' != $control->manager->get_setting( 'team03_theme_options[slider_enable]' )->value() )
		return true;

	return false;
}


/**
 * Check if slider call to action is enable.
 *
 * @since team03 0.3
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function team03_slider_call_to_action( $control ) {
	if ( 'disabled' != $control->manager->get_setting( 'team03_theme_options[slider_enable]' )->value() && true == $control->manager->get_setting( 'team03_theme_options[slider_call_to_action]' )->value() )
		return true;

	return false;
}


/**
 * Check if about is enabled.
 *
 * @since team03 0.3
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function team03_is_about_active( $control ) {
	if ( 'disabled' != $control->manager->get_setting( 'team03_theme_options[about_section_enable]' )->value() )
		return true;

	return false;
}

/**
 * Check if category blog one is enable.
 *
 * @since team03 0.3
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function team03_category_blog_one_active( $control ) {
	if ( 'disabled' != $control->manager->get_setting( 'team03_theme_options[category_blog_one_enable]' )->value() )
		return true;

	return false;
}

/**
 * Check if cat blog four is enabled
 *
 * @since team03 0.3
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function team03_is_cat_blog_four_enabled( $control ) {
	if ( 'disabled' != $control->manager->get_setting( 'team03_theme_options[cat_blog_four_enable]' )->value() )
		return true;

	return false;
}
/**
 * Check if cat blog four is category.
 *
 * @since team03 Pro 1.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function team03_is_content_type_cat_blog_four_enabled( $control ) {
	if ( team03_is_cat_blog_four_enabled( $control ) && 'category' == $control->manager->get_setting( 'team03_theme_options[cat_blog_four_content_type]' )->value() )
		return true;

	return false;
}

/**
 * Check if category blog one type is multiple category.
 *
 * @since team03 0.3
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function team03_category_blog_one_multiple_category( $control ) {
	if ( 'disabled' != $control->manager->get_setting( 'team03_theme_options[category_blog_one_enable]' )->value() && 'multiple-category' == $control->manager->get_setting( 'team03_theme_options[category_blog_one_type]' )->value() )
		return true;

	return false;
}

/**
 * Check if category blog two is enable.
 *
 * @since team03 0.3
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function team03_category_blog_two_active( $control ) {
	if ( 'disabled' != $control->manager->get_setting( 'team03_theme_options[category_blog_two_enable]' )->value() )
		return true;

	return false;
}

/**
 * Check if category blog two type is multiple category.
 *
 * @since team03 0.3
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function team03_category_blog_two_multiple_category( $control ) {
	if ( 'disabled' != $control->manager->get_setting( 'team03_theme_options[category_blog_two_enable]' )->value() && 'multiple-category' == $control->manager->get_setting( 'team03_theme_options[category_blog_two_type]' )->value() )
		return true;

	return false;
}

/**
 * Check if category blog three is enable.
 *
 * @since team03 0.3
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function team03_category_blog_first_active( $control ) {
	if ( 'disabled' != $control->manager->get_setting( 'team03_theme_options[category_blog_one_enable]' )->value() )
		return true;

	return false;
}

/**
 * Check if category blog three type is sub category.
 * 
 * @since team03 0.3
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function team03_category_blog_first_sub_category( $control ) {
	if ( 'disabled' != $control->manager->get_setting( 'team03_theme_options[category_blog_one_enable]' )->value() && 'sub-category' == $control->manager->get_setting( 'team03_theme_options[category_blog_one_type]' )->value() )
		return true;

	return false;
}


/**
 * Check if partner is enable.
 *
 * @since team03 0.3
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function team03_partner_active( $control ) {
	if ( 'disabled' != $control->manager->get_setting( 'team03_theme_options[partner_enable]' )->value() )
		return true;

	return false;
}
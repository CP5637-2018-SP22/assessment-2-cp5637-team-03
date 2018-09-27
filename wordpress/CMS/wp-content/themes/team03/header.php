<?php
	/**
	 * The header for our theme.
	 *
	 * This is the template that displays all of the <head> section and everything up until <div id="content">
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
	 *
	 * @package team03
	 * @subpackage team03
     * @since 0.3
	 */

	/**
	 * team03_doctype hook
	 *
	 * @hooked team03_doctype -  10
	 *
	 */
	do_action( 'team03_doctype' );

?>
<head>
<?php
	/**
	 * team03_before_wp_head hook
	 *
	 * @hooked team03_head -  10
	 *
	 */
	do_action( 'team03_before_wp_head' );

	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<?php
	/**
	 * team03_page_start hook
	 *
	 * @hooked team03_page_start -  10
	 *
	 */
	do_action( 'team03_page_start' );

	/**
	 * team03_top_bar hook
	 *
	 * @hooked team03_add_top_bar -  10
	 *
	 */
	do_action( 'team03_top_bar' );

	/**
	 * team03_header hook
	 *
	 * @hooked team03_header_start       - 10
	 * @hooked team03_site_branding_start- 20
	 * @hooked team03_site_logo          - 30
	 * @hooked team03_site_header        - 40
	 * @hooked team03_site_branding_end  - 50
	 * @hooked team03_navigation         - 60
	 * @hooked team03_header_end         - 100
	 *
	 */
	do_action( 'team03_header' );

	/**
	 * team03_mobile_menu hook
	 *
	 * @hooked team03_mobile_menu -  10
	 *
	 */
	do_action( 'team03_mobile_menu' );

	/**
	 * team03_content_start hook
	 *
	 * @hooked team03_content_start -  10
	 *
	 */
	do_action( 'team03_content_start' );

	if( is_home() || !is_front_page() ) { 
		/**
		 * team03_banner_image_action hook
		 *
		 * @hooked team03_custom_header -  10
		 */
		do_action( 'team03_banner_image_action' );
	}
	/**
	 * team03_modules hook
	 *
	 * @hooked team03_content_start -  10
	 *
	 */
	do_action( 'team03_modules' );

	/**
	 * team03_loader_action hook
	 *
	 * @hooked team03_loader -  10
	 *
	 */
	do_action( 'team03_loader_action' );

	/**
	 * team03_breadcrumb_action hook
	 *
	 * @hooked team03_add_breadcrumb -  10
	 *
	 */
	do_action( 'team03_breadcrumb_action' );
	/**
	* team03_primary_content hook
	*
	* @hooked team03_add_slider_section - 10
	* @hooked team03_add_about_section - 20
	* @hooked team03_add_category_blog_one - 30
	* @hooked team03_add_category_blog_two - 50
	* @hooked team03_add_category_blog_three - 60
	*
	*/
	do_action( 'team03_primary_content' );
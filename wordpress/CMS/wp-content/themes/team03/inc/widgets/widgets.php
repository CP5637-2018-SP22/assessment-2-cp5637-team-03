<?php
/**
 * team03 widgets inclusion
 *
 * This is the template that includes all custom widgets of team03
 *
 * @package team03
 * @subpackage team03
 * @since 0.3
 */

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function team03_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'team03' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'team03' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	for ($i=1; $i < 4; $i++) {
		register_sidebar( array(
			'name'          => esc_html__( 'Footer ', 'team03' ).$i,
			'id'            => 'footer-'.$i,
			'description'   => esc_html__( 'Add footer widgets here.', 'team03' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
	}
}
add_action( 'widgets_init', 'team03_widgets_init' );

/**
 * Add popular post widget
 */
require get_template_directory() . '/inc/widgets/recent-posts.php';

/**
 * Include Social Link widget file
 */
require get_template_directory() . '/inc/widgets/social-link.php';

/**
 * Register widgets
 */
function team03_register_widget() {
	// Register Recent Post widget
	register_widget( 'team03_Recent_Posts' );

	// Register Social Link widget
	register_widget( 'team03_Social_Link' );
}
add_action( 'widgets_init', 'team03_register_widget' );
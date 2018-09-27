<?php
/**
 * team03 options
 *
 * @package team03
 * @subpackage team03
 * @since 0.3
 */

/**
 * Site Layout
 * @return array site layout options
 */
function team03_site_layout() {
  $team03_site_layout = array(
    'wide'  => esc_html__( 'Wide', 'team03' ),
    'boxed' => esc_html__( 'Boxed', 'team03' ),
  );

  $output = apply_filters( 'team03_site_layout', $team03_site_layout );

  return $output;
}

/**
 * Sidebar position
 * @return array Sidbar positions
 */
function team03_sidebar_position() {
  $team03_sidebar_position = array(
    'right-sidebar' => esc_html__( 'Right', 'team03' ),
    'left-sidebar'  => esc_html__( 'Left', 'team03' ),
    'no-sidebar'    => esc_html__( 'No Sidebar', 'team03' ),
  );

  $output = apply_filters( 'team03_sidebar_position', $team03_sidebar_position );

  return $output;
}

/**
 * Header image options
 * @return array Header image options
 */
function team03_header_image() {
  $team03_header_image = array(
    'enable' => esc_html__( 'Enable( Featured Image )', 'team03' ),
    'show-both' => esc_html__( 'Show Both( Featured and Header Image )', 'team03' ),
    'disable'  => esc_html__( 'Disable', 'team03' ),
  );

  $output = apply_filters( 'team03_header_image', $team03_header_image );

  return $output;
}

/**
 * Pagination
 *
 * @return array site pagination options
 */
function team03_pagination_options() {
  $options = team03_get_theme_options();
  $team03_pagination_options = array(
    'numeric'=> esc_html__( 'Numeric', 'team03' ),
    'default'=> esc_html__( 'Default(Older/Newer)', 'team03' ),
  );

  $pagination_type = $options['pagination_type'];
  if ( class_exists( 'Jetpack' ) && Jetpack::is_module_active( 'infinite-scroll' ) ) {
        $team03_pagination_options['infinite-click'] = 'Infinite Click';
        $team03_pagination_options['infinite-scroll'] = 'Infinite Scroll';
    } elseif( 'infinite-click' == $pagination_type || 'infinite-scroll' == $pagination_type ) {
      $options['pagination_type'] = 'numeric';
      set_theme_mod( 'team03_theme_options', $options );
    }

  $output = apply_filters( 'team03_pagination_options', $team03_pagination_options );

  return $output;
}


/**
 * Slider
 * @return array slider options
 */
function team03_enable_disable_options() {
  $team03_enable_disable_options = array(
    'static-frontpage'  => esc_html__( 'Static Frontpage', 'team03' ),
    'disabled'          => esc_html__( 'Disabled', 'team03' ),
  );

  $output = apply_filters( 'team03_enable_disable_options', $team03_enable_disable_options );

  return $output;
}


/**
 * Enabling options
 * @return array Enable options
 */
function team03_enable_entire_option() {
  $team03_enable_entire_option = array(
    'static-frontpage'  => esc_html__( 'Static Frontpage', 'team03' ),
    'disabled'          => esc_html__( 'Disabled', 'team03' ),
    'entire-site'          => esc_html__( 'Entrie Site', 'team03' ),
  );

  $output = apply_filters( 'team03_enable_entire_option', $team03_enable_entire_option );

  return $output;
}


/**
 * Slider effects
 * @return array Slider effects
 */
function team03_slider_effect() {
  $team03_slider_effect = array(
    'fade'                                        => esc_html__( 'Fade', 'team03' ),
    'cubic-bezier(0.250, 0.250, 0.750, 0.750)'    => esc_html__( 'Linear', 'team03' ),
  );

  $output =  apply_filters( 'team03_slider_effect', $team03_slider_effect );

  // Sort array in ascending order, according to the key:
  if ( ! empty( $output ) ) {
    ksort( $output );
  }

  return $output;
}



/**
 * Category blog two content type
 * @return array Category blog two content type options
 */
function team03_category_blog_two_type() {
  $team03_category_blog_two_type = array(
    'multiple-category' => esc_html__( 'Multiple Category', 'team03' ),
    'recent-posts'      => esc_html__( 'Recent Posts', 'team03' ),
  );

  $output = apply_filters( 'team03_category_blog_two_type', $team03_category_blog_two_type );

  return $output;
}

/**
 * Category blog two content layout
 * @return array Category blog two content type options
 */
function team03_category_blog_two_layout() {
  $team03_category_blog_two_layout = array(
    3  => esc_html__( '3 Column', 'team03' ),
    4  => esc_html__( '4 Column', 'team03' ),
  );

  $output = apply_filters( 'team03_category_blog_two_layout', $team03_category_blog_two_layout );

  return $output;
}


/**
 * Category blog three content layout
 * @return array Category blog three content type options
 */
function team03_category_blog_first_layout() {
  $team03_category_blog_first_layout = array(
    4  => esc_html__( '4 Column', 'team03' ),
    5  => esc_html__( '5 Column', 'team03' ),
    6  => esc_html__( '6 Column', 'team03' ),
  );

  $output = apply_filters( 'team03_category_blog_first_layout', $team03_category_blog_first_layout );

  return $output;
}

/**
 * Category blog three content type
 * @return array Category blog three content type options
 */
function team03_category_blog_first_type() {
  $team03_category_blog_first_type = array(
    'category'          => esc_html__( 'Categories', 'team03' ),
    'sub-category'      => esc_html__( 'Sub Categories', 'team03' ),
  );

  $output = apply_filters( 'team03_category_blog_first_type', $team03_category_blog_first_type );

  return $output;
}

/**
 * Upcoming Event Content type
 * @return array cat blog four content type
 */
function team03_cat_blog_four_content_type() {
  $team03_cat_blog_four_content_type = array(
    'category' => esc_html__( 'Category', 'team03' ),
  );

  $output = apply_filters( 'team03_cat_blog_four_content_type', $team03_cat_blog_four_content_type );
  
  return $output;
}

/**
 * Upcoming Event content layout
 * @return array Category blog four content type options
 */
function team03_category_blog_four_layout() {
  $team03_category_blog_four_layout = array(
    2  => esc_html__( '2 Column', 'team03' ),
    3  => esc_html__( '3 Column', 'team03' ),
    4  => esc_html__( '4 Column', 'team03' ),
  );

  $output = apply_filters( 'team03_category_blog_four_layout', $team03_category_blog_four_layout );

  return $output;
}
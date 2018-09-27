<?php
/**
 * Menu
 *
 * This is the template for all registered menus
 *
 * @package team03
 * @subpackage team03
 * @since 0.3
 */

if ( ! function_exists( 'team03_navigation' ) ) :
	/**
	 * Add primary menu
	 *
	 * @since team03 0.3
	 *
	 */
	function team03_navigation() {
		?>
        <?php if ( has_nav_menu( 'primary' ) ) : ?>
			<nav id="site-navigation" class="main-navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'ul', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
        <?php 
        endif;
	}
endif;
add_action( 'team03_header', 'team03_navigation', 60 );


if ( ! function_exists( 'team03_mobile_menu' ) ) :
	/**
	 * Add mobile menu
	 */

	function team03_mobile_menu() { ?>
		<!-- Mobile Menu -->
        <?php if ( has_nav_menu( 'primary' ) ) : ?>
	        <nav id="sidr-left-top" class="mobile-menu sidr left">
	          <div class="site-branding text-center">
	          	<?php team03_site_logo();?>
	          	<?php team03_site_header(); ?>
	          </div>
	          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'ul' ) ); ?>
	        </nav><!-- end left-menu -->

	        <a id="sidr-left-top-button" class="menu-button right" href="#sidr-left-top"><i class="fa fa-bars"></i></a>
	    <?php endif; 
	}
endif;
add_action( 'team03_mobile_menu','team03_mobile_menu', 70 );
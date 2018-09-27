<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package team03
 * @subpackage team03
 * @since 0.3
 */

/**
* team03_footer_content hook
*
* @hooked team03_add_partner - 10
*
*/
do_action( 'team03_footer_content' );

/**
* team03_content_end hook
*
* @hooked team03_content_end -  100
*
*/
do_action( 'team03_content_end' );


/**
* team03_footer hook
*
* @hooked team03_footer_start -  10
* @hooked team03_footer -  30
* @hooked team03_copyright -  40
* @hooked team03_footer_end -  100
*
*/
do_action( 'team03_footer' );


/**
* team03_back_to_top hook
*
* @hooked team03_back_to_top -  10
*
*/
do_action( 'team03_back_to_top' );

wp_footer(); ?>

</body>
</html>

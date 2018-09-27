<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package team03
 * @subpackage team03
 * @since 0.3
 */

get_header(); ?>

<?php 
/**
 * team03_page_section hook
 *
 * @hooked team03_page_section -  10
 *
 */
do_action( 'team03_page_section' );?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', 'single' );

			/**
			* Hook team03_action_post_pagination
			*  
			* @hooked team03_post_pagination 
			*/
			do_action( 'team03_action_post_pagination' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
if ( team03_is_sidebar_enable() ) {
	get_sidebar();
} 

/**
 * team03_page_section_end hook
 *
 * @hooked team03_page_section_end -  10
 *
 */
do_action( 'team03_page_section_end' );

get_footer();

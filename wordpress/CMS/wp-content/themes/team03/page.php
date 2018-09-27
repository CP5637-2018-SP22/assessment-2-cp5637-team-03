<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package team03
 * @subpackage team03
 * @since 0.3
 */

get_header(); 
if ( true === apply_filters( 'team03_filter_frontpage_content_enable', true ) ) : 

/**
 * team03_page_section hook
 *
 * @hooked team03_page_section -  10
 *
 */
do_action( 'team03_page_section' );
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

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
endif;

get_footer();

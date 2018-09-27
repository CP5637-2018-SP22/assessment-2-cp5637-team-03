<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package team03
 * @subpackage team03
 * @since 0.3
 */

get_header(); 

/**
 * team03_page_section hook
 *
 * @hooked team03_page_section -  10
 *
 */
do_action( 'team03_page_section' );
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'team03' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; 

		/**
		* Hook - team03_action_pagination.
		*
		* @hooked team03_default_pagination 
		* @hooked team03_numeric_pagination 
		*/
		do_action( 'team03_action_pagination' ); 
		?>

		</main><!-- #main -->
	</section><!-- #primary -->

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

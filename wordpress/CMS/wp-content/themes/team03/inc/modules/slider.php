<?php
/**
 * Slider section
 *
 * This is the template for the content of slider section
 *
 * @package team03
 * @subpackage team03
 * @since team03 0.3
 */
if ( ! function_exists( 'team03_add_slider_section' ) ) :
  /**
   * Add slider section
   *
   *@since team03 0.3
   */
  function team03_add_slider_section() {

    // Check if slider is enabled on frontpage
    $slider_enable = apply_filters( 'team03_section_status', true, 'slider_enable' );
    if ( true !== $slider_enable ) {
      return false;
    }

    // Get slider section details
    $section_details = array();
    $section_details = apply_filters( 'team03_filter_slider_section_details', $section_details );

    if ( empty( $section_details ) ) {
      return;
    }

    // Render slider section now.
    team03_render_slider_section( $section_details );
  }
endif;
add_action( 'team03_primary_content', 'team03_add_slider_section', 10 );


if ( ! function_exists( 'team03_get_slider_section_details' ) ) :
  /**
   * Slider section details.
   *
   * @since team03 0.3
   * @param array $input Slider section details.
   */
  function team03_get_slider_section_details( $input ) {
    $options = team03_get_theme_options();
    $ids = array();

        for ( $i = 1; $i <= $options['no_of_slider']; $i++ ) {
        $id = null;
        if ( isset( $options[ 'slider_content_page_'.$i ] ) ) {
            $id = $options[ 'slider_content_page_'.$i ];
        }
        if ( ! empty( $id ) ) {
            $ids[] = absint( $id );
        }
    }

    // Bail if no valid pages are selected.
    if ( empty( $ids ) ) {
    return $input;
    }

    $args = array(
        'no_found_rows'  => true,
        'orderby'        => 'post__in',
        'post_type'      => 'page',
        'post__in'       => $ids,
    );

    // Fetch posts.
    $posts = get_posts( $args );

    if ( ! empty( $posts ) ) {
        $i = 1;
        foreach ( $posts as $key => $post ) {
            $page_id = $post->ID;
            $img_array = null;
            if ( has_post_thumbnail( $page_id ) ) {
                $img_array = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
            } else {
                $img_array[0] =  get_template_directory_uri().'/assets/uploads/no-featured-image-1170x500.png';
            }

            if ( isset( $img_array ) ) {
                $content[$i]['img_array'] = $img_array;
            }

            $content[$i]['url']      = get_permalink( $page_id );
            $content[$i]['title']    = get_the_title( $page_id );
            $content[$i]['excerpt']  = team03_trim_content( 15, $post  );
            $content[$i]['alt']      = get_the_title( $page_id );

            $i++;
        }
    }

    if ( ! empty( $content ) ) {
      $input = $content;
    }
    return $input;
  }
endif;
// Slider section content details.
add_filter( 'team03_filter_slider_section_details', 'team03_get_slider_section_details' );


if ( ! function_exists( 'team03_render_slider_section' ) ) :
  /**
   * Start slider section
   *
   * @return string Slider content
   * @since team03 0.3
   *
   */
   function team03_render_slider_section( $content_details = array() ) {
        $options          = team03_get_theme_options();
        $slider_type      = ! empty( $options['slider_content_type'] ) ? $options['slider_content_type'] : 'demo';
        $slider_effect    = ( $options['slider_content_effect'] == 'fade' ) ? 'linear' : $options['slider_content_effect'];
        $slider_fade      = ( $options['slider_content_effect'] == 'fade' ) ? 'true' : 'false';
        $slider_control   = ( $options['enable_slider_controls'] == true ) ? 'true' : 'false';
        $slider_pager     = ( $options['enable_slider_pager'] == true ) ? 'true' : 'false';
        $slider_dragable  = ( $options['enable_slider_dragable'] == true ) ? 'true' : 'false';

        if ( empty( $content_details ) ) {
          return;
        } ?>
        <section id="main-slider">
            <div class="regular" data-effect="<?php echo esc_attr( $slider_effect ); ?>" data-slick='{ "slidesToShow": 1, "slidesToScroll": 1, "infinite": true, "speed": 1000, "pauseOnHover": false, "dots": <?php echo esc_attr( $slider_pager ); ?>, "arrows": <?php echo esc_attr( $slider_control ); ?>, "autoplay": true, "fade": <?php echo esc_attr( $slider_fade ); ?>, "draggable": <?php echo esc_attr( $slider_dragable ); ?> }'>
                <?php foreach ( $content_details as $content ): ?>
                    <div class="slider-item" style="background-image: url('<?php echo esc_url( $content['img_array'][0] ); ?>')">
                        <div class="black-overlay"></div>
                        <?php  
                        $enable_slider_caption = $options['enable_slider_caption'];
                        if ( $enable_slider_caption ) : ?>
                          <div class="container">
                              <div class="main-slider-contents">
                                  <a href="<?php echo esc_url( $content['url'] ); ?>"><h2 class="title"><?php echo esc_html( $content['title'] ); ?></h2></a>

                                  <?php if ( $content['excerpt'] ) : ?>
                                    <p class="desc"><?php echo esc_html( $content['excerpt'] ); ?></p>
                                  <?php endif;?>
                                  <div class="buttons">
                                      <?php if ( ! empty( $options['read_more_text'] ) ) : ?>
                                          <a href="<?php echo esc_url( $content['url'] ); ?>" class="btn btn-blue"><?php echo esc_html( $options['read_more_text'] ); ?><i class="fa fa-angle-right"></i></a>
                                      <?php endif; ?>
                                  </div>
                              </div><!-- end .main-slider-contents -->
                          </div><!-- end .container -->
                        <?php endif; ?>
                    </div><!-- end .slider-item -->
                <?php endforeach; ?>
            </div><!-- end .regular -->
        </section><!-- end #main-slider -->
<?php
    }
endif;
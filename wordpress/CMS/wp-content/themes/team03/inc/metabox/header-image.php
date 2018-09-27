<?php
/**
 * Header Image Metabox
 *
 * @package team03
 * @subpackage team03
 * @since 0.3
 */
/**
 * Outputs the content of the sidebar position
 */
function team03_header_image_callback( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'team03_nonce' );
    $stored_header_image_option = get_post_meta( $post->ID, 'team03-header-image', true );

    $header_image_options       = team03_header_image();
    ?>

    <p>
     <label for="team03-header-image" class="team03-row-title"><?php esc_html_e( 'Header Image', 'team03' )?></label>
     <select name="team03-header-image" id="team03-header-image">
      <option value=""><?php esc_html_e( 'Default ( Customizer Header Image )', 'team03' ); ?></option>

        <?php foreach ( $header_image_options as $header_image_option => $value ) { ?>
         <option value="<?php echo esc_attr( $header_image_option );?>" <?php if ( isset ( $stored_header_image_option ) ) selected( $stored_header_image_option, $header_image_option ); ?>><?php echo esc_html( $value ); ?></option>
        <?php } ?>
     </select>
    </p>
    <?php
}


/**
 * Saves the sidebar position input
 */
function team03_sidebar_header_image_save( $post_id ) {

    // Checks save status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'team03_nonce' ] ) && wp_verify_nonce( sanitize_key( $_POST[ 'team03_nonce' ] ), basename( __FILE__ ) ) ) ? 'true' : 'false';

    // Exits script depending on save status
    if ( $is_autosave || $is_revision || ! $is_valid_nonce ) {
        return;
    }

    // Checks for input and sanitizes/saves if needed
    if( isset( $_POST[ 'team03-header-image' ] ) ) {
        update_post_meta( $post_id, 'team03-header-image', sanitize_text_field( $_POST[ 'team03-header-image' ] ) );
    }

}
add_action( 'save_post', 'team03_sidebar_header_image_save' );
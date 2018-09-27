<?php

/**
 * @package team03
 * @subpackage team03
 * @since 0.3
 *
 * Outputs the content of the sidebar position
 */
function team03_sidebar_position_callback( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'team03_nonce' );
    $stored_sidebar_position = get_post_meta( $post->ID, 'team03-sidebar-position', true );

    $sidebar_positions       = team03_sidebar_position();
    ?>

    <p>
     <label for="team03-sidebar-position" class="team03-row-title"><?php esc_html_e( 'Sidebar Position', 'team03' )?></label>
     <select name="team03-sidebar-position" id="team03-sidebar-position">
      <option value=""><?php esc_html_e( 'Default ( to customizer option )', 'team03' ); ?></option>

        <?php foreach ( $sidebar_positions as $sidebar_position => $value ) { ?>
         <option value="<?php echo esc_attr( $sidebar_position );?>" <?php if ( isset ( $stored_sidebar_position ) ) selected( $stored_sidebar_position, $sidebar_position ); ?>><?php echo esc_html( $value ); ?></option>
        <?php } ?>
     </select>
    </p>
    <?php
}


/**
 * Saves the sidebar position input
 */
function team03_sidebar_layout_save( $post_id ) {

    // Checks save status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'team03_nonce' ] ) && wp_verify_nonce( sanitize_key( $_POST[ 'team03_nonce' ] ), basename( __FILE__ ) ) ) ? 'true' : 'false';

    // Exits script depending on save status
    if ( $is_autosave || $is_revision || ! $is_valid_nonce ) {
        return;
    }

    // Checks for input and sanitizes/saves if needed
    if( isset( $_POST[ 'team03-sidebar-position' ] ) ) {
        update_post_meta( $post_id, 'team03-sidebar-position', sanitize_text_field( $_POST[ 'team03-sidebar-position' ] ) );
    }

}
add_action( 'save_post', 'team03_sidebar_layout_save' );
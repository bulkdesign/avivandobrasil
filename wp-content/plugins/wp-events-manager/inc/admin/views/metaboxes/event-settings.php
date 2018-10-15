<?php
/*
 * @author leehld
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit;

global $post;
$post_id    = $post->ID;
$prefix     = 'tp_event_';
$date_start = get_post_meta( $post->ID, $prefix . 'date_start', true ) ? date( 'd-m-Y', strtotime( get_post_meta( $post->ID, $prefix . 'date_start', true ) ) ) : '';
$time_start = get_post_meta( $post->ID, $prefix . 'time_start', true ) ? date( 'H:i', strtotime( get_post_meta( $post->ID, $prefix . 'time_start', true ) ) ) : '';

$date_end = get_post_meta( $post->ID, $prefix . 'date_end', true ) ? date( 'd-m-Y', strtotime( get_post_meta( $post->ID, $prefix . 'date_end', true ) ) ) : '';
$time_end = get_post_meta( $post->ID, $prefix . 'time_end', true ) ? date( 'H:i', strtotime( get_post_meta( $post->ID, $prefix . 'time_end', true ) ) ) : '';

$qty      = get_post_meta( $post_id, $prefix . 'qty', true );
$price    = get_post_meta( $post_id, $prefix . 'price', true );
$location = get_post_meta( $post_id, $prefix . 'location', true );
$today    = date( "d-m-Y", strtotime( 'today' ) );
$tomorrow = date( "d-m-Y", strtotime( 'tomorrow' ) );
?>
<div class="event_meta_box_container">
    <div class="event_meta_panel">
		<?php do_action( 'tp_event_admin_event_metabox_before_fields', $post, $prefix ); ?>
        <div class="option_group">
            <p class="form-field">
                <label for="_qty"><?php _e( 'Quantidade Disponível', 'wp-events-manager' ) ?></label>
                <input type="number" min="0" step="1" class="short" name="<?php echo esc_attr( $prefix ) ?>qty" id="_qty" value="<?php echo esc_attr( absint( $qty ) ) ?>">
            </p>
        </div>
        <div class="option_group">
            <p class="form-field">
                <label for="_price"><?php printf( '%s(%s)', __( 'Preço', 'wp-events-manager' ), wpems_get_currency_symbol() ) ?></label>
                <input type="number" step="any" min="0" class="short" name="<?php echo esc_attr( $prefix ) ?>price" id="_price" value="<?php echo esc_attr( floatval( $price ) ) ?>" />
            </p>
            <p class="event-meta-notice">
				<?php echo esc_html__( 'Deixe 0 se o evento é gratuito', 'wp-events-manager' ); ?>
            </p>
        </div>

        <div class="option_group">
            <div class="form-field" id="event-time-metabox">
                <label><?php echo esc_html__( 'Início/Fim', 'wp-events-manager' ); ?></label>
                <label hidden for="_date_start"></label>
                <input type="text" class="short date-start" name="<?php echo esc_attr( $prefix ) ?>date_start" id="_date_start"
                       value="<?php echo $date_start ? esc_attr( $date_start ) : esc_attr( $today ); ?>">
                <label hidden for="_time_start"></label>
                <input type="text" class="short time-start" name="<?php echo esc_attr( $prefix ) ?>time_start" id="_time_start"
                       value="<?php echo $time_start ? esc_attr( $time_start ) : '' ?>">
                <span class="time-connect"> <?php echo esc_html__( 'to', 'wp-events-manager' ); ?></span>
                <label hidden for="_date_end"></label>
                <input type="text" class="short date-end" name="<?php echo esc_attr( $prefix ) ?>date_end" id="_date_end"
                       value="<?php echo $date_end ? esc_attr( $date_end ) : esc_attr( $tomorrow ); ?>">
                <label hidden for="_time_end"></label>
                <input type="text" class="short time-end" name="<?php echo esc_attr( $prefix ) ?>time_end" id="_time_end"
                       value="<?php echo $time_end ? esc_attr( $time_end ) : '' ?>">
            </div>
        </div>

		<?php wp_nonce_field( 'event_nonce', 'event-nonce' ); ?>
		<?php do_action( 'tp_event_admin_event_metabox_after_fields', $post, $prefix ); ?>
    </div>
</div>
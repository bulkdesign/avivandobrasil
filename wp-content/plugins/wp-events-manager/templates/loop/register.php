<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( wpems_get_option( 'allow_register_event' ) == 'no' ) {
	return;
}

$event    = new WPEMS_Event( get_the_ID() );
$user_reg = $event->booked_quantity( get_current_user_id() );

if ( absint( $event->qty ) == 0 || get_post_meta( get_the_ID(), 'tp_event_status', true ) === 'expired' ) {
	return;
}
?>

<div class="entry-register">
    <div class="row">
        <div class="col s12 m8 push-m2">
            <ul class="event-info" style="margin-left: 0; margin-right: 0">
                <li class="price">
                    <span style="display: inline-flex"><i class="tiny material-icons">location_on</i><?php the_field('local'); ?></span>
                    <br>
                    <span style="display: inline-flex"><i class="tiny material-icons">schedule</i>
                        <?php if (get_field('data_do_treinamento')): ?>
                            <?php the_field('data_do_treinamento'); ?>
                        <?php endif; ?>
                        <?php if (get_field('data_do_evento')): ?>
                            <?php the_field('data_do_evento'); ?>
                        <?php endif; ?>
                    </span>
                    <br>
                    <span class="label"><?php _e( 'Valor:', 'wp-events-manager' ) ?></span>
                    <span class="detail bold"><?php printf( '%s', $event->is_free() ? __( 'Free', 'wp-events-manager' ) : wpems_format_price( $event->get_price() ) ) ?></span>
                </li>
            </ul>
        </div>
    </div>

	<?php if ( is_user_logged_in() ) { ?>
		<?php
		$registered_time = $event->booked_quantity( get_current_user_id() );
		if ( $registered_time && wpems_get_option( 'email_register_times' ) === 'once' && $event->is_free() ) { ?>
            <p><?php echo __( 'You have registered this event before.', 'wp-events-manager' ); ?></p>
		<?php } else { ?>
            <a class="amarelo texto-menos-escuro event_register_submit event_auth_button event-load-booking-form"
               data-event="<?php echo esc_attr( get_the_ID() ) ?>"><?php _e( 'Comprar ingresso', 'wp-events-manager' ); ?></a>
		<?php } ?>
	<?php } else { ?>
        <p><?php echo sprintf( __( 'You must <a href="%s">login</a> before register event.', 'wp-events-manager' ), wpems_login_url() ); ?></p>
	<?php } ?>

</div>
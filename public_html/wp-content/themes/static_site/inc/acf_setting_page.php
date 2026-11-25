<?php
function demo_acf_output_notification() {
    $has_notice = get_field( 'notification_bar', 'options' );

    if ( ! $has_notice || ! $has_notice['notification_onoff'] ) {
        return;
    }
    ?>

    <div class="notification-bar">
        <div class="notification-bar__wrapper">
            <p class="notification-bar__text"><?php echo wp_kses_post( $has_notice['notification_message'] ); ?></p>
        </div>
    </div>
    <?php
}
// Notification to be placed after opening body tag.
add_action( 'wp_body_open', 'demo_acf_output_notification' );
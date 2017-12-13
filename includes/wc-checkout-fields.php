<?php



/**
from https://www.themelocation.com/how-to-add-custom-field-to-woocommerce-checkout-page/
* Add the field to the checkout page

*/

/*********************** Pour ********************/
add_action( 'woocommerce_after_order_notes', 'gift_name_checkout_field' );
function gift_name_checkout_field( $checkout ) {
    echo '<div id="gift_name_checkout_field"><h2>' . __('Je souhaites faire un cadeau :') . '</h2>';
    woocommerce_form_field( 'gift_field_message', array(
    'type'         => 'text',
    'class'         => array('form-row-wide'),
    'label'         => __('Pour'),
    'placeholder'   => __('Prénom de l\'enfant'),
    'required'     => false,
    ), $checkout->get_value( 'gift_field_name' ));
    echo '</div>';
}
add_action('woocommerce_checkout_process', 'gift_name_checkout_field_process');
function gift_name_checkout_field_process() {
    // if the field is set, if not then show an error message.
    if ( ! $_POST['gift_field_name'] )
    wc_add_notice( __( 'Please enter value.' ), 'error' );
}
add_action( 'woocommerce_checkout_update_order_meta', 'gift_name_checkout_field_update_order_meta' );
function gift_name_checkout_field_update_order_meta( $order_id ) {
    if ( ! empty( $_POST['gift_field_name'] ) ) {
        update_post_meta( $order_id, 'Cadeau - Pour :', sanitize_text_field( $_POST['gift_field_name'] ) );
    }
}

/*********************** De la part de ********************/
add_action( 'woocommerce_after_order_notes', 'gift_from_checkout_field' );
function gift_from_checkout_field( $checkout ) {
    woocommerce_form_field( 'gift_field_from', array(
    'type'         => 'textarea',
    'class'         => array('form-row-wide'),
    'label'         => __('De la part de :'),
    'placeholder'   => __('Votre prénom'),
    'required'     => false,
    ), $checkout->get_value( 'gift_field_from' ));
    echo '</div>';
}
add_action('woocommerce_checkout_process', 'gift_from_checkout_field_process');
function gift_from_checkout_field_process() {
    // if the field is set, if not then show an error message.
    if ( ! $_POST['gift_field_from'] )
    wc_add_notice( __( 'Please enter value.' ), 'error' );
}
add_action( 'woocommerce_checkout_update_order_meta', 'gift_from_checkout_field_update_order_meta' );
function gift_from_checkout_field_update_order_meta( $order_id ) {
    if ( ! empty( $_POST['gift_field_from'] ) ) {
        update_post_meta( $order_id, 'Cadeau - De la part de :', sanitize_text_field( $_POST['gift_field_from'] ) );
    }
}

/*********************** Message ********************/
add_action( 'woocommerce_after_order_notes', 'some_custom_checkout_field' );
function some_custom_checkout_field( $checkout ) {
    echo '<div id="some_custom_checkout_field"><h2>' . __('Je souhaites faire un cadeau :') . '</h2>';
    woocommerce_form_field( 'gift_field_message', array(
    'type'         => 'textarea',
    'class'         => array('form-row-wide'),
    'label'         => __('Message'),
    'placeholder'   => __('Votre message'),
    'required'     => false,
    ), $checkout->get_value( 'gift_field_message' ));
    echo '</div>';
}
add_action('woocommerce_checkout_process', 'some_custom_checkout_field_process');
function some_custom_checkout_field_process() {
    // if the field is set, if not then show an error message.
    if ( ! $_POST['gift_field_message'] )
    wc_add_notice( __( 'Please enter value.' ), 'error' );
}
add_action( 'woocommerce_checkout_update_order_meta', 'some_custom_checkout_field_update_order_meta' );
function some_custom_checkout_field_update_order_meta( $order_id ) {
    if ( ! empty( $_POST['gift_field_message'] ) ) {
        update_post_meta( $order_id, 'Cadeau - Message', sanitize_text_field( $_POST['gift_field_message'] ) );
    }
}


?>

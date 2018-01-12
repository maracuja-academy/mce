<?php



/**
from https://www.themelocation.com/how-to-add-custom-field-to-woocommerce-checkout-page/
* Add the field to the checkout page

*/

function cartHasSubscription(){
    foreach( WC()->cart->get_cart() as $cart_item_key => $values ) {
        $_product = $values['data'];
        // echo "<pre>";
        // print_r($_product);
        // echo "</pre>";
        if( 268 == $_product->id ) {
             return true;
        }
    }
    return false;
}
  

/*CHECKBOX*/
add_action( 'woocommerce_after_order_notes', 'gift_card_checkout_checkbox' );
function gift_card_checkout_checkbox( $checkout ) {
   
    if (cartHasSubscription()){

        echo "<h3>";
         woocommerce_form_field( 'gift-card-checkbox', array(
        'type'          => 'checkbox',
        'class'         => array('input-checkbox'),
        'label'         => __("Je souhaite joindre une carte cadeau à l'abonnement"),
        'required'  => false,
        ), $checkout->get_value( 'gift-card-checkbox' ));

        echo "</h3> ";
    }
    echo "<div id='gift-card-command'>";
}

add_action( 'woocommerce_checkout_update_order_meta', 'gift_card_checkout_checkbox_update_order_meta' );
function gift_card_checkout_checkbox_update_order_meta( $order_id ) {
    if ( ! empty( $_POST['gift-card-checkbox'] ) ) {
        update_post_meta( $order_id, 'Carte cadeau ?:', sanitize_text_field( $_POST['gift-card-checkbox'] ) );
    }
}


/*********************** Pour ********************/
add_action( 'woocommerce_after_order_notes', 'gift_name_checkout_field' );
function gift_name_checkout_field( $checkout ) {

    woocommerce_form_field( 'gift_field_name', array(
    'type'         => 'text',
    'class'         => array('form-row-wide'),
    'label'         => __('Pour'),
    'placeholder'   => __('Prénom de l\'enfant'),
    'required'     => false,
    ), $checkout->get_value( 'gift_field_name' ));
    
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
    
}

add_action( 'woocommerce_checkout_update_order_meta', 'gift_from_checkout_field_update_order_meta' );
function gift_from_checkout_field_update_order_meta( $order_id ) {
    if ( ! empty( $_POST['gift_field_from'] ) ) {
        update_post_meta( $order_id, 'Cadeau - De la part de :', sanitize_text_field( $_POST['gift_field_from'] ) );
    }
}

/*********************** Message ********************/
add_action( 'woocommerce_after_order_notes', 'gift_message_checkout_field' );
function gift_message_checkout_field( $checkout ) {
    woocommerce_form_field( 'gift_field_message', array(
    'type'         => 'textarea',
    'class'         => array('form-row-wide'),
    'label'         => __('Message'),
    'placeholder'   => __('Votre message'),
    'required'     => false,
    ), $checkout->get_value( 'gift_field_message' ));
    echo '</div>';
    
}

add_action( 'woocommerce_checkout_update_order_meta', 'some_custom_checkout_field_update_order_meta' );
function some_custom_checkout_field_update_order_meta( $order_id ) {
    if ( ! empty( $_POST['gift_field_message'] ) ) {
        update_post_meta( $order_id, 'Cadeau - Message', sanitize_text_field( $_POST['gift_field_message'] ) );
    }
}



/*********************** Pour ********************/
add_action( 'woocommerce_after_order_notes', 'how_know_field' );
function how_know_field( $checkout ) {

    woocommerce_form_field( 'how_field', array(
    'type'         => 'text',
    'class'         => array('form-row-wide'),
    'label'         => __('Comment avez-vous découvert notre magazine ?'),
    'placeholder'   => __('(Facebook, un ami, )'),
    'required'     => false,
    ), $checkout->get_value( 'how_field' ));
    
}

add_action( 'woocommerce_checkout_update_order_meta', 'gift_name_checkout_field_how_know' );
function gift_name_checkout_field_how_know( $order_id ) {
    if ( ! empty( $_POST['how_field'] ) ) {
        update_post_meta( $order_id, 'a connu Maracuja par :', sanitize_text_field( $_POST['how_field'] ) );
    }
}


/*********************** Add JS ********************/

function add_jscript() {
echo '<script > jQuery(document).ready(function(){
    app.command()}) </script>';
}
 
add_action( 'woocommerce_after_checkout_form', 'add_jscript');

?>

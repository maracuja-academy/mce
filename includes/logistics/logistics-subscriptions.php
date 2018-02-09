<?php


/*************************************************************/
/*************************************************************/
/*************************************************************/
/*************************************************************/
/******** AFFICHE L'ETAT DE L'ABONNEMENT DANS L'ADMIN ********/
/*************************************************************/

add_filter( 'manage_edit-shop_order_columns', 'shop_order_columns' );
function shop_order_columns( $columns ){
    $new_columns = (is_array($columns)) ? $columns : array();

    $new_columns['subscription'] = 'Abonnement';

    return $new_columns;
}
add_action( 'manage_shop_order_posts_custom_column', 'display_subscription_stage' );
function display_subscription_stage( $column ){
    global $post, $the_order;

    if ( empty( $the_order ) || $the_order->get_id() != $post->ID ) {
        $the_order = wc_get_order( $post->ID );
    }


    if ( $column == 'subscription' ) {  
        $stage = $the_order->get_meta(SUBSCRIPTION_STAGE_META_KEY);
        if ($stage != null ) {
            echo $stage.'/6';
            foreach ($the_order->get_items() as $item){
                if($item->get_variation_id() == SUBSCRIPTION_VAR_ID_CM){
                    echo ' CM';
                }elseif ($item->get_variation_id() == SUBSCRIPTION_VAR_ID_CE){
                    echo ' CE';
                }
            }
        }else{
            echo '-';
        }

    }

}

/*************************************************************/
/********* APRES LA COMMANDE PASSEE *******/
/*************************************************************/


function action_woocommerce_new_order( $order_id ) { 
    $order = wc_get_order($order_id);
    //SI ABONNEMENT => INITIALISATION
    if(orderIsSubscription($order)){
        $order = wc_get_order($order_id);
        $order->add_meta_data( SUBSCRIPTION_STAGE_META_KEY, 0);
        $order->save();
    }

}
add_action( 'woocommerce_process_shop_order_meta', 'action_woocommerce_new_order', 10, 3 ); //FROM ADMIN
add_action( 'woocommerce_thankyou', 'action_woocommerce_new_order' ); //FROM CHECKOUT



/*************************************************************/
/********* LORSQUE QU'ON PASSE UNE COMMANDE A TERMINEE *******/
/*************************************************************/
function action_woocommerce_order_status_changed(  $order_id, $old_status, $new_status ) {
    //SI ABONNEMENT INITIALISE, VALIDATION DE L'EDITION EN COURS
    if($new_status == 'completed') {
        $order = wc_get_order($order_id);
        if(orderIsSubscription($order)){
            $current_edition = get_option(CURRENT_EDITION_OPTION_KEY);
            $order->update_meta_data(SUBSCRIPTION_STAGE_META_KEY, 1);
            $order->add_meta_data(SUBSCRIPTION_CURRENT_EDITION_META_KEY, $current_edition );
            $order->save();
        }
    }
};       
add_action( 'woocommerce_order_status_changed', 'action_woocommerce_order_status_changed', 10, 3 );



/**
 * Handle a custom 'customvar' query var to get orders with the 'customvar' meta.
 * @param array $query - Args for WP_Query.
 * @param array $query_vars - Query vars from WC_Order_Query.
 * @return array modified $query
 */
function handle_custom_query_var( $query, $query_vars ) {
    if ( ! empty( $query_vars[SUBSCRIPTION_CURRENT_EDITION_META_KEY] ) ) {
        $query['meta_query'][] = array(
            'key' => SUBSCRIPTION_CURRENT_EDITION_META_KEY,
            'value' => esc_attr( $query_vars[SUBSCRIPTION_CURRENT_EDITION_META_KEY] ),
        );
    }

    return $query;
}
add_filter( 'woocommerce_order_data_store_cpt_get_orders_query', 'handle_custom_query_var', 10, 2 );


/*************************************************************/
/********* META BOX SUBSCRIPTION *******/
/*************************************************************/
// Adding Meta container admin shop_order pages
add_action( 'add_meta_boxes', 'sub_add_meta_boxes' );

function sub_add_meta_boxes()
{
    add_meta_box( 'mv_other_fields', __('Abonnement','woocommerce'), 'mv_add_other_fields_for_packaging', 'shop_order', 'side', 'core' );
}


// Adding Meta field in the meta container admin shop_order pages
function mv_add_other_fields_for_packaging()
{
    global $post;

    $stage = get_post_meta( $post->ID, SUBSCRIPTION_STAGE_META_KEY, true );
    if ( $stage != null ) {
        echo 'Magazine reçus : '. $stage.'/6';
    }else{
        echo 'Aucun abonnement en cours sur cette commande.';
    }

    // $meta_field_data = get_post_meta( $post->ID, 'testfield', true ) ? get_post_meta( $post->ID, 'testfield', true ) : '';
    // echo '<input type="hidden" name="mv_other_meta_field_nonce" value="' . wp_create_nonce() . '">
    // <p style="border-bottom:solid 1px #eee;padding-bottom:13px;">
    //     <input type="text" style="width:250px;";" name="my_field_name" placeholder="' . $meta_field_data . '" value="' . $meta_field_data . '"></p>';

}


// Save the data of the Meta field
// add_action( 'save_post', 'mv_save_wc_order_other_fields', 10, 1 );
// if ( ! function_exists( 'mv_save_wc_order_other_fields' ) )
// {

//     function mv_save_wc_order_other_fields( $post_id ) {

//         // We need to verify this with the proper authorization (security stuff).

//         // Check if our nonce is set.
//         if ( ! isset( $_POST[ 'mv_other_meta_field_nonce' ] ) ) {
//             return $post_id;
//         }
//         $nonce = $_REQUEST[ 'mv_other_meta_field_nonce' ];

//         //Verify that the nonce is valid.
//         if ( ! wp_verify_nonce( $nonce ) ) {
//             return $post_id;
//         }

//         // If this is an autosave, our form has not been submitted, so we don't want to do anything.
//         if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
//             return $post_id;
//         }

//         // Check the user's permissions.
//         if ( 'page' == $_POST[ 'post_type' ] ) {

//             if ( ! current_user_can( 'edit_page', $post_id ) ) {
//                 return $post_id;
//             }
//         } else {

//             if ( ! current_user_can( 'edit_post', $post_id ) ) {
//                 return $post_id;
//             }
//         }
//         // --- Its safe for us to save the data ! --- //

//         // Sanitize user input  and update the meta field in the database.
//         update_post_meta( $post_id, '_my_field_slug', $_POST[ 'my_field_name' ] );
//     }
// }


function orderIsSubscription($order){
    foreach ($order->get_items() as $item) {
        if($item->get_product_id() == SUBSCRIPTION_PRODUCT_ID){
            return true;
        } 
    }
    return false;
}
?>

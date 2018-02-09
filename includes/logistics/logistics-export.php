<?php

function buildExport($time, $filters, $infos){

    $saved_exports = get_option(OPTION_CSV_SAVED_EXPORTS);    
    $saved_exports[] = ["time" => $time, 'filters' => $filters , 'infos' => $infos, 'completed' => false ] ;
    update_option(OPTION_CSV_SAVED_EXPORTS, $saved_exports);
    return; 
}

function deleteExport($index_option){
    $saved_exports = get_option(OPTION_CSV_SAVED_EXPORTS);   
    unset($saved_exports[$index_option]);
    update_option(OPTION_CSV_SAVED_EXPORTS, $saved_exports);  
}

function valideCommands($index_option){
    $saved_exports = get_option(OPTION_CSV_SAVED_EXPORTS);  
    $options = $saved_exports[$index_option];
    $time  = $options['time'];


    $current_edition = get_option(CURRENT_EDITION_OPTION_KEY);
    //VALIDE SUBSCRIPTIONS
    $orders_sub = getSubscriptionsOrders($time);

    foreach ($orders_sub as $order){
        $order_stage = $order->get_meta(SUBSCRIPTION_STAGE_META_KEY);
        $order->update_meta_data(SUBSCRIPTION_STAGE_META_KEY, ($order_stage + 1));
        $order->update_meta_data(SUBSCRIPTION_CURRENT_EDITION_META_KEY, $current_edition);
        $order->save();
    }
    
    $orders_processing = getProcessingOrders($time);
    foreach ($orders_processing as $order){
        $order_stage = $order->get_meta(SUBSCRIPTION_STAGE_META_KEY);
        if($order_stage != ''){
            $order->update_meta_data(SUBSCRIPTION_STAGE_META_KEY, 1);
            $order->update_meta_data(SUBSCRIPTION_CURRENT_EDITION_META_KEY, $current_edition);
        }
        $order->set_status('completed');
        $order->save();
    }

    //Valide export
    $options['completed'] = true;
    $saved_exports[$index_option] = $options;
    update_option(OPTION_CSV_SAVED_EXPORTS, $saved_exports);  
}

/*************************************************************/
/*************** DISPLAY **********************/
/*************************************************************/
function getOrdersToDeliver($time, $filters = false){
    $current_edition = get_option(CURRENT_EDITION_OPTION_KEY);

    $cards = [];
    $orders_simple = [ITEM_TYPE_CM_1=>[],ITEM_TYPE_CM_2=>[],ITEM_TYPE_CE_3=>[],ITEM_TYPE_CM_3=>[]];
    $orders_mix = [];
    $notes = [];
    $orders = array_merge(getSubscriptionsOrders($time),getProcessingOrders($time));

    $index = 0;
    foreach($orders as $order){
            
        if($note = $order->get_customer_note()){
            $notes[] = ['id'=> $order->get_order_number(), 'note' => $note];
        }

        $items = $order->get_items();
        $old_sub = ($order->get_status() == 'completed')? true : false;
        $card_code = ($order->get_meta(GIFT_CARD_KEY) && !$old_sub)?'K'.$index:false;
        $item_type = false;

        ////MIX ?
        if ( (count($items) > 1) || $card_code) {
     
            $code = [];
            foreach($items as $item){
                if($old_sub && ($item->get_product_id() != SUBSCRIPTION_PRODUCT_ID)){
                    continue;
                };
                $item_type = itemType($item);
                $code[] = uCode($item,$item_type);
            }

            if($card_code){
                $output = drawOrder($order,implode(" ", $code),$card_code);
                $orders_mix[ITEM_TYPE_CARD][]= $output;
                $cards[$item_type][] = drawCard($order,$card_code);
                
            }else{
                if(count($code)>1){
                    $orders_mix[$item_type][] = drawOrder($order,implode(" ", $code),$card_code); // Item type of the last item (not important for the sort)
                }else{
                    $orders_simple[$item_type][] = drawOrder($order,implode(" ", $code));
                }
            }

        //UNIQUE ITEM
        }else{
            $item = reset($items);
            $item_type = itemType($item);
            $item_value = drawOrder($order,uCode($item,$item_type));
            if($item->get_quantity() > 1){
                $orders_mix[$item_type][] = $item_value;
            }else{
                $orders_simple[$item_type][] = $item_value;
            }
            
        }

        $index++;
    }

    return ['simple'=>$orders_simple, 
    'mix'=>$orders_mix,
    'cards'=>$cards,
    'count'=> count($orders),
    'notes' => $notes];

};


function uCode($item, $code){
    if($item->get_quantity() > 1)
        return $item->get_quantity().'_'.$code;
    else
        return $code;
}

function itemType($item){
    if($item->get_product_id() == SUBSCRIPTION_PRODUCT_ID){
        if($item->get_variation_id() == SUBSCRIPTION_VAR_ID_CE){
            return ITEM_TYPE_CE_3;
        }else{
            return ITEM_TYPE_CM_3;  
        }
    }else{
        if($item->get_product_id() == EDITION_1_ID){
            return ITEM_TYPE_CM_1;
        }else{
            return ITEM_TYPE_CM_2;
        }
    }
}

function getProcessingOrders($time){

    $current_edition = get_option(CURRENT_EDITION_OPTION_KEY);

    //NEW ORDERS
    $args = array(
        'limit' => -1, 
        'orderby' => 'modified',
        'order' => 'ASC',
        'status' => 'processing',
        'date_created' => '<' . $time,
    );

    return wc_get_orders($args);


}

function getSubscriptionsOrders($time){

    $current_edition = get_option(CURRENT_EDITION_OPTION_KEY);

//'pending', 'processing', 'on-hold', 'completed', 'refunded, 'failed', 'cancelled',
    //OLD ORDERS SUBSCRIPTIONS
    $args = array(
        'limit' => -1, 
        'orderby' => 'modified',
        'order' => 'ASC',
        'status' => 'completed',
        'date_created' => '<' . $time,
        SUBSCRIPTION_CURRENT_EDITION_META_KEY => ($current_edition - 1)
    );

    
    return wc_get_orders($args);

}


?>

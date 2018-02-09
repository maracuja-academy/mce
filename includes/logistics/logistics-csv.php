<?php


/*

@param type
ITEM_EXPORTS_TYPE_CARDS
ITEM_EXPORTS_TYPE_SIMPLE
ITEM_EXPORTS_TYPE_MIX
 */
function downloadCSV($index_option, $type = false, $filter = false){
    $saved_exports = get_option(OPTION_CSV_SAVED_EXPORTS);    
    $options = $saved_exports[$index_option];
    $time = $options['time'];
    $export_orders = getOrdersToDeliver($time);

    //PREPARE CSV   
    if($type){
        $csv_name = $type;
        $types = [$type];
        $header = ['id','code','for','from','message'];
    }else{
        $csv_name = "commands";
        $types = [ITEM_EXPORTS_TYPE_MIX,ITEM_EXPORTS_TYPE_SIMPLE];
        $header = ['id','address','code'];
    }

    $all_orders[] = $header;
    foreach ($types as $t) {
        $index = 0;
        if($filter && isset($export_orders[$t][$filter])) {
            $all_orders = $export_orders[$t][$filter];
        }else{
            foreach ($export_orders[$t] as $orders) {
                $all_orders = array_merge($all_orders, $orders);
                $index++;
            }            
        }
    }

    createCSV($all_orders, $time, $csv_name);

}


function drawOrder($order, $code, $card_code = false){
    $output = [];
    //$header_array = ['id','address','code'];

    $gender = $order->get_meta(GENDER_KEY);
    if( $gender == 'Monsieur') $gender = "M.";
    elseif ($gender == 'Madame') $gender = "Mme";

    $first_name = $order->get_shipping_first_name();
    $last_name = $order->get_shipping_last_name();
    $company = $order->get_shipping_company();
    $address_street = $order->get_shipping_address_1() . ' ' . $order->get_shipping_address_2();
    $city = $order->get_shipping_city();
    $state = $order->get_shipping_state();
    $postcode = $order->get_shipping_postcode()  ;  
    $country = '';
    if(null != $order->get_shipping_country()){
        $country_code = WC()->countries->countries[$order->get_shipping_country()];
        $country = ($country_code != "France")? $country_code : '';
    }
    $address = '';
    $address .= ($company != '') ? $company . "\n" : '';
    $address .= $gender . ' ' . $first_name . ' ' . $last_name . "\n" ;  
    $address .= $address_street . "\n";
    $address .= $postcode . ' ' . $city . "\n";   

    //INTERNATIONAL
    if($country != ''){
        $address .= $country;
        $code .= ' ' . 'EXT';
    }

    $output['id'] = $order->get_order_number();

    $output['address'] = mb_strtoupper($address);
    
    $output['code'] = ($card_code)?$card_code . ' ' . $code : $code;

    // return $output;
    return array_values($output);
}

function drawCard($order, $code){
    $output = [];
    $output['id'] = $order->get_order_number();
    $output['code'] = $code;
    $output['for'] = $order->get_meta(GIFT_CARD_FOR_KEY);
    $output['from'] = $order->get_meta(GIFT_CARD_FROM_KEY);
    $output['message'] = $order->get_meta(GIFT_CARD_MESSAGE_KEY);
    return $output;
}

function getLogisticCode($items){
    $logisticCode = "";

        //$item['item_meta']
        foreach ($items as $item){
            //$product = $order->get_product_from_item( $item );
            $quantity =  $item->get_quantity();
            $logisticCode .= $quantity.'_'.$item->get_variation_id();
            $logisticCode .= ' ';
        }
    return $logisticCode;
}
function formatName($name){
    return ucfirst(strtolower($name));
}



function createCSV($data,$time, $csv_name){
      // output headers so that the file is downloaded rather than displayed
      // 
    ob_end_clean();
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.$csv_name.date('j-m-y_h:i:s', $time).'.csv');
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    echo "\xEF\xBB\xBF"; // UTF-8 BOM
     
    // create a file pointer connected to the output stream
    $file = fopen('php://output', 'w');
     
     
    // // output each row of the data
    foreach ($data as $row)
    {
        fputcsv($file, $row, ',');
    }
     
    exit();  
}
?>

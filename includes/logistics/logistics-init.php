<?php


/*************************************************************/
/******** INITIALISATION DES ABONNEMENTS POUR LE LANCEMENT ********/
/*************************************************************/
function initSubscriptions(){

    //INIT EDITION NUMVER
    add_option(CURRENT_EDITION_OPTION_KEY, 2 );
    add_option(OPTION_CSV_SAVED_EXPORTS, [] );
    add_option(OPTION_EXPORTED_INFOS, 0);

    //ACTIVE ABO CM
    $args = array(
        'limit' => -1, 
        'status' => array('completed','on-hold','processing'),
    );
    $orders = wc_get_orders($args);
    //SET SUBSCRIPTION STAGE    
   foreach($orders as $order) {
        foreach ($order->get_items() as $item){
            
            //IF ABONNEMENT
            if($item->get_product_id() == SUBSCRIPTION_PRODUCT_ID){
                //ABO DEJA COMMENCE
                if($order->get_status() == 'completed'){
                    $order->add_meta_data( SUBSCRIPTION_STAGE_META_KEY, 1);
                    $order->add_meta_data(SUBSCRIPTION_CURRENT_EDITION_META_KEY, 2 );
                }else{
                    $order->add_meta_data( SUBSCRIPTION_STAGE_META_KEY, 0);
                    if($order->get_status() == 'on-hold' 
                        && $order->get_payment_method() != 'cheque'){
                        $order->set_status('processing');
                    }
                }
                $order->save();
            }
        }
    }
    echo count($orders).' oderrs initiated';
}


/*
  <section style="margin-top : 40px; width : 100%">
        <form action="<?php echo ADMIN_LOGISTIC_URL ?>" method="post" >      
            <input type="hidden" value="true" name="active_subscription" />
            
            <button   type="submit" class="button">Initialiser abonnements </button> <p>(Pour ajout de commande manuel)</p>
        </form>
    </section>
 */


?>

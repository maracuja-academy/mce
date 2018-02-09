<?php 

require_once( __DIR__ . '/logistics-defines.php');
// require_once( __DIR__ . '/logistics-init.php');
require_once( __DIR__ . '/logistics-export.php');
require_once( __DIR__ . '/logistics-csv.php');
require_once( __DIR__ . '/logistics-subscriptions.php');

/*************************************************************/
/*************** PAGE ADMIN LOGISTIQUE **********************/
/*************************************************************/
add_action( 'admin_menu', 'my_admin_menu' );
function my_admin_menu() {
    add_menu_page( 'Logistique', 'Logistique', 'manage_options', 'maracuja-logistics.php', 'maracuja_logistic', 'dashicons-email-alt', 6  );
}


function maracuja_logistic(){
    
    if (isset($_POST['active_subscription'])) {
       initSubscriptions();

    }else if (isset($_GET['update_edition']) && is_numeric($_GET['update_edition'])) {
       $current_edition = $_GET['update_edition'];
       update_option(CURRENT_EDITION_OPTION_KEY, $current_edition);
       $time = time() ;
    $orders = getOrdersToDeliver($time );
    }else if(isset($_GET['load_orders']) && $_GET['load_orders'] == 1){
        $time = time() ;
        $orders = getOrdersToDeliver($time );
        
    }else if (isset($_POST['export_commands'])) {
        $time = $_POST['export_commands'];
        $infos = $_POST['export_infos'];
        buildExport($time, [] , $infos);   
    }else if (isset($_POST['download_csv'])){
        $index = $_POST['download_csv'];
        if($_POST['submit'] == 'download'){
            switch ($_POST['filters']) {
                case 'all' :
                    downloadCSV($index);
                break;
                case 'mix' :
                    downloadCSV($index, ITEM_EXPORTS_TYPE_MIX);
                break;
                case 'simple' :
                    downloadCSV($index, ITEM_EXPORTS_TYPE_SIMPLE);
                break;
                case 'cm' :
                    downloadCSV($index, ITEM_EXPORTS_TYPE_SIMPLE, ITEM_TYPE_CM_3);
                break;
                case 'ce' :
                    downloadCSV($index, ITEM_EXPORTS_TYPE_SIMPLE, ITEM_TYPE_CE_3);
                break;
                case 'cards' :
                    downloadCSV($index, ITEM_EXPORTS_TYPE_CARDS);
                break;
            }

        }elseif ($_POST['submit'] == 'cards') {
            downloadCSV($index, 'cards');
        
        }elseif ($_POST['submit'] == "validate") {
            valideCommands($index, 'cards');
        }elseif ($_POST['submit'] == "delete") {
            deleteExport($index);
        }
   
    }

 ?>
    <div class="wrap" style="width:100%">
        
        <div style="float:right; margin-right: 30px">
        <?php 
            $current_edition = get_option(CURRENT_EDITION_OPTION_KEY);
            echo '<p>Numéro actuel : #'. $current_edition ;
            echo '(<a href="'.ADMIN_LOGISTIC_URL.'&update_edition='.($current_edition-1).'">-</a>';
            echo ' <a href="'.ADMIN_LOGISTIC_URL.'&update_edition='.($current_edition+1).'">Nouveau numéro</a>)';
            echo '</p>';
        ?>
        </div>
        <h1>Gestion de la logistique</h1>
    </div>
        
    <section >
    <div >
        <p>Combien d'enveloppes tonton Vincent doit-il préparer aujourd'hui ?!</p>
        <a class="button" href="<?php echo ADMIN_LOGISTIC_URL ?>&load_orders=1">
        Combien d'enveloppes ?</a>
        <?php            
        if(isset($orders)){
            $infos = detailOrders($orders);
            
        ?>
        <div style=" background-color: white; width: 90%; padding: 5px 2% 20px 2%;margin : 10px 0; border-radius : 10px; display :block; ">
            <h2>Les commandes du jours</h2>
            <?php echo $infos; ?>
            <div>
                <h4><?php echo count($orders['notes']) ?> Notes</h4>
                <ul>
                    <?php foreach($orders['notes'] as $note) { ?>
                    <li><a href="post.php?post=<?php echo $note['id'] ?>&action=edit" target="_blank"><?php echo $note['id'] ?></a> - <span><?php echo $note['note'] ?></span></li>
                    <?php } ?>
                </ul>
            </div>
            <form action="<?php echo ADMIN_LOGISTIC_URL ?>" method="post" >
               
                <input type="hidden" value="<?php echo $time ?>" name="export_commands" /> 
                 <input type="hidden" value="<?php echo $infos ?>" name="export_infos" /> 

                <button type="submit" class="button">Se mettre au boulot !</button>
            </form>

        <?php }  ?> 
        </div>
    </div>

    <div >
        <h2>Preparation de commandes :</h2>
        <?php
            if($exports = get_option(OPTION_CSV_SAVED_EXPORTS)){
                
                $index = count($exports)-1 ;
                foreach(array_reverse($exports) as $exp){
                    if ($exp['completed']) {
                        echo '<div style="background-color:#D6E4CC; width: 90%; padding: 5px 2% 20px 2%; border-radius : 10px; border : 1px solid #DDD; display :block; margin: 15px 0;">';
                        echo "<h2> Commandes au ". date('j/m/y h:i:s', $exp['time']) . " </h2>";
                        echo $exp['infos'] . '</div>';
                        
                    }else{
                        ?>

                        <form style="background-color:white; width: 90%; padding: 5px 2% 20px 2%; border-radius : 10px; border : 1px solid #DDD; display :block; margin: 15px 0;" action="<?php echo ADMIN_LOGISTIC_URL ?>" method="post" >
                            <h2><?php echo "Commandes au ". date('j/m/y h:i:s', $exp['time']) ?></h2>
                            <p><?php echo $exp['infos'] ?></p>
                            <input type="hidden" value="<?php echo $index ?>" name="download_csv" />

                            <div style="background:'#e5edf0';border-radius : 10px;">
                                <select name="filters">
                                    <option value="all" selected>Toutes les commandes</option>
                                    <option value="mix">Commandes composées</option>
                                    <option value="simple">Commandes simples</option>
                                    <option value="cm">Commandes CM#<?php echo $current_edition ?></option>
                                    <option value="ce">Commandes CE#<?php echo $current_edition ?></option>
                                    <!-- <option value="old">Anciens Numéros</option> -->
                                    <option value="cards">Cartes cadeaux</option>
                                </select>
                                <button name="submit" class="button" value="download">Telecharger CSV</button>
                            </div>
                            <br>
                            <button style="background-color: red"  name="submit" class="button" value="validate" >Valider toutes les commandes</button>
                            <!-- <button  name="submit" class="button" value="delete"  >X</button> -->
                        </form>
                        <?php

                    }
                    $index--;
                }//end foreach
                
                 
            }
        ?>
    </div>
    </section>



 
    <?php


}

function detailOrders($orders){
    $total_mix = [];

    $total_mix = multi_array_count($orders['mix']);
    
    $ce = count($orders['simple'][ITEM_TYPE_CE_3]);
    $cm = count($orders['simple'][ITEM_TYPE_CM_3]);
    $cm2 = count($orders['simple'][ITEM_TYPE_CM_2]);
    $cm1 = count($orders['simple'][ITEM_TYPE_CM_1]);

    $infos =  '<p><strong>'. $orders['count'] . ' commandes</strong> au total. Ça vaut pas un pichet de mouquire !</p> <p>';

    $infos .= $cm1 . ' CM#1 - ';
    $infos .= $cm2 . ' CM#2 - ';                
    $infos .= $cm . ' CM#3 - ';
    $infos .= $ce . ' CE#3 - ';

    $infos .= $total_mix . ' mix (';
    $infos .= multi_array_count($orders['cards']) . ' cartes cadeaux) ['. count($orders['notes']). ' notes]</p>';
    return $infos;
}

function multi_array_count($array){
    $count = 0;
    foreach ($array as $type) {
        $count+= count($type);
    }
    return $count;
}




?>

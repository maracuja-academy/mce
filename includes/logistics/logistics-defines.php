<?php

define("ADMIN_LOGISTIC_URL", 'admin.php?page=maracuja-logistics.php');
define("CURRENT_EDITION_OPTION_KEY", 'current_edition');

define('SUBSCRIPTION_STAGE_META_KEY', 'subscription_stage');
define('SUBSCRIPTION_CURRENT_EDITION_META_KEY', 'subscription_edition');
define('SUBSCRIPTION_PRODUCT_ID', 268);
define('SUBSCRIPTION_VAR_ID_CE', 434);
define('SUBSCRIPTION_VAR_ID_CM', 433);
define('EDITION_1_ID', 120);
define('EDITION_2_ID', 270);


define('ITEM_EXPORTS_TYPE_MIX','mix');
define('ITEM_EXPORTS_TYPE_SIMPLE','simple');
define('ITEM_EXPORTS_TYPE_CARDS','cards');
define('ITEM_TYPE_CE_3','CE#3'); // CORRESPOND EN REALITE A L'EDITION ACTUELLE DE L'ABO CE
define('ITEM_TYPE_CM_3','CM#3'); // PAREIL POUR CM (TODO : automatiser)
define('ITEM_TYPE_CM_1','CM#1');
define('ITEM_TYPE_CM_2','CM#2');
define('ITEM_TYPE_CARD','MIX');


define('GIFT_CARD_KEY','Carte cadeau ?:');
define('GIFT_CARD_FOR_KEY','Cadeau - Pour :');
define('GIFT_CARD_FROM_KEY','Cadeau - De la part de :');
define('GIFT_CARD_MESSAGE_KEY','Cadeau - Message');
define('GENDER_KEY','billing_gender');

define('OPTION_CSV_SAVED_EXPORTS', 'csv_saved_exports');
define('OPTION_EXPORTED_INFOS', 'exported_infos');

define('FORM_EXPORT_OPTION_CM','export_cm');
define('FORM_EXPORT_OPTION_CE','export_ce');
define('FORM_EXPORT_OPTION_OLD','export_old');

function print_pre($var){
    echo '<pre>';
    print_r($var);
    echo '</pre>';

}
?>

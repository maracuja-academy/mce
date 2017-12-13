<?php 

add_filter('show_admin_bar', '__return_false'); 



require_once( __DIR__ . '/includes/woocommerce.php');
require_once( __DIR__ . '/includes/theme-options.php');
require_once( __DIR__ . '/includes/wc-checkout-fields.php');

?>

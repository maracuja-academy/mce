<?php 

add_filter('show_admin_bar', '__return_false'); 




function my_theme_options( $wp_customize ) {

    //Nom de l'activité
    $wp_customize->add_setting('your_theme_activity');    
    $wp_customize->add_control( new WP_Customize_Control( 
        $wp_customize, 
        'activity_name_control',
        array(
            'label'    => "Nom de l'activité", 
            'section'  => 'title_tagline',
            'settings' => 'your_theme_activity',
            'priority' => 10,
        ) 
    ));


    

    //ID de l'activité
    $wp_customize->add_setting('your_theme_activity_id');    
    $wp_customize->add_control( new WP_Customize_Control( 
        $wp_customize, 
        'activity_id_control',
        array(
            'label'    => "Id de l'activité (Nom en minuscule et sans accents)", 
            'section'  => 'title_tagline',
            'settings' => 'your_theme_activity_id',
            'priority' => 10,
        ) 
    ));
    $wp_customize->remove_control('site_icon');

    $wp_customize->add_section( 'theme_facebook' , array(
        'title'      => "Facebook",
        'priority'   => 30,
    ) );

    /******* Facebok ********/

    //Facebook app ID
    $wp_customize->add_setting('fb_app_id');    
    $wp_customize->add_control( new WP_Customize_Control( 
        $wp_customize, 
        'fb_app_id_control',
        array(
            'label'    => "Facebook app ID", 
            'section'  => 'theme_facebook',
            'settings' => 'fb_app_id',
            'priority' => 10,
        ) 
    ));

    //Facebook page ID
    $wp_customize->add_setting('fb_page_id');    
    $wp_customize->add_control( new WP_Customize_Control( 
        $wp_customize, 
        'fb_page_id_control',
        array(
            'label'    => "Facebook page ID", 
            'section'  => 'theme_facebook',
            'settings' => 'fb_page_id',
            'priority' => 10,
        ) 
    ));



    //Opengraph title
    $wp_customize->add_setting('opengraph_title');    
    $wp_customize->add_control( new WP_Customize_Control( 
        $wp_customize, 
        'opengraph_title_control',
        array(
            'label'    => "Opengraph title", 
            'section'  => 'theme_facebook',
            'settings' => 'opengraph_title',
            'type'     => 'textarea',
            'priority' => 10,
        ) 
    ));

    //Opengraph description
    $wp_customize->add_setting('opengraph_description');    
    $wp_customize->add_control( new WP_Customize_Control( 
        $wp_customize, 
        'opengraph_description_control',
        array(
            'label'    => "Opengraph description", 
            'section'  => 'theme_facebook',
            'settings' => 'opengraph_description',
            'type'     => 'textarea',
            'priority' => 10,
        ) 
    ));

    //Opengraph image url
    $wp_customize->add_setting('opengraph_image');    
    $wp_customize->add_control( new WP_Customize_Control( 
        $wp_customize, 
        'opengraph_image_control',
        array(
            'label'    => "Opengraph image url", 
            'section'  => 'theme_facebook',
            'settings' => 'opengraph_image',
            'priority' => 10,
        ) 
    ));
}
add_action( 'customize_register' , 'my_theme_options' );

function mce_scripts(){
    wp_enqueue_style( 'style', get_stylesheet_uri().'?2' ); 
    wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js', array ( 'jquery' ), 1.0, true);
    // wp_enqueue_script( 'autocomplete', get_template_directory_uri() . '/js/jquery.autocomplete.js?1', array ( 'jquery' ), 1.0, true);

}
add_action( 'wp_enqueue_scripts', 'mce_scripts' );




//WOOCOMMERCE

add_filter('add_to_cart_redirect', 'themeprefix_add_to_cart_redirect');
function themeprefix_add_to_cart_redirect() {
    global $woocommerce;
    $checkout_url = $woocommerce->cart->get_checkout_url();
    return $checkout_url;
}


/* WOO COMERCE*/

//Add New Pay Button Text
add_filter( 'woocommerce_product_single_add_to_cart_text', 'themeprefix_cart_button_text' ); 
 
function themeprefix_cart_button_text() {
    return __( 'Commander', 'woocommerce' );
}

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<section id="main">';
}

function my_theme_wrapper_end() {
  echo '</section>';
}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
// add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 25 );


?>

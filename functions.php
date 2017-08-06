<?php 

add_filter('show_admin_bar', '__return_false'); 




function my_theme_options( $wp_customize ) {

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

    $wp_customize->add_setting('your_theme_activity_color');    
    $wp_customize->add_control( new WP_Customize_Color_Control( 
        $wp_customize, 
        'activity_color_control',
        array(
            'label'    => __( "Couleur de l'activité", 'mytheme' ), 
            'section'  => 'title_tagline',
            'settings' => 'your_theme_activity_color',
            'priority' => 10,
        ) 
    ));
}
add_action( 'customize_register' , 'my_theme_options' );

function mce_scripts(){
    wp_enqueue_style( 'style', get_stylesheet_uri() ); 
}
add_action( 'wp_enqueue_scripts', 'mce_scripts' );
?>

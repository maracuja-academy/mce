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
}
add_action( 'customize_register' , 'my_theme_options' );

function mce_scripts(){
    wp_enqueue_style( 'style', get_stylesheet_uri() ); 
    wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js', array ( 'jquery' ), 1.0, true);
}
add_action( 'wp_enqueue_scripts', 'mce_scripts' );
?>

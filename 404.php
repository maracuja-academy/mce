<?php
/**
 * The template for displaying 404 pages (not found).
 *
 */
    function asset($name){
        echo get_template_directory_uri().'/images/'.$name;
    }
   
    get_header(); 
    $act_id = get_theme_mod('your_theme_activity_id');
?>
<div class="container">

    <h2>Cette page n’existe pas !</h2>
    <a href="/" class="button">Aller à l'accueil</a>

    <p><img src="<?php asset( $act_id . '/404.png')?>"></p>
    

</div>


<?php get_footer(); ?>

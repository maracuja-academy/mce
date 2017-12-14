
<?php 
/**
 *Template Name: Equitation Commande
 */
 

function asset($name){
    echo get_template_directory_uri().'/images/'.$name;
}

$subtitle = get_post_custom_values('subtitle', get_the_ID())[0];

get_header(); ?>

<section class="bg-beige"> 
    <div class="container group">
        <?php woocommerce_content(); ?>
    </div>
</section>



<?php get_footer(); ?>

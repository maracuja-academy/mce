
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

<section id="section-preview" class="bg-white" >
    <div class="container ">
        <h2>Feuilletez un extrait</h2>
        
        <iframe src="//v.calameo.com/?bkcode=005173341f26319a7a2f3&mode=mini&disablemousewheel=true&bgcolor=FFFFFF&page=2" width="1080" height="675" frameborder="0" scrolling="no" allowtransparency allowfullscreen ></iframe>


    </div>
</section>


<?php get_footer(); ?>

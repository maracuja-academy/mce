
<?php 
//https://really-simple-ssl.com/knowledge-base/how-to-install-an-ssl-certificate-on-mamp/
/**
 *Template Name: Foot Commande
 */

function asset($name){
    echo get_template_directory_uri().'/images/'.$name;
}

$title = get_post_custom_values('page_title', get_the_ID())[0];

get_header(); ?>


<section class="bg-grass"> 
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="<?php asset('foot/bookx4.png')?>">
            </div>
            <div class="col-6 vertical-container" style='height: 240px'>
                <div class="box">
                    <h3>Offre club</h3>
                    <h2><?php echo $title ?></h2>
                    <a href="#particulier">Vous souhaitez ce magazine votre enfant ?</a>
                </div>
            </div>
        </div>
    </div>
</section>



<?php while ( have_posts() ) : the_post(); ?>
    <?php the_content() ?>
<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>

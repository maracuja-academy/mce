
<?php 
/**
 *Template Name: Equitation Commande
 */

function asset($name){
    echo get_template_directory_uri().'/images/'.$name;
}

$subtitle = get_post_custom_values('subtitle', get_the_ID())[0];

get_header(); ?>

<header class="bg-grass"> 
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="<?php asset('equit-bookx4.png')?>">
            </div>
            <div class="col-6 vertical-container">
                <div class="box">
                    <h2><?php echo $subtitle ?></h2>
                </div>
            </div>
        </div>
    </div>
</header>

<section id="section-commande" > 
<div class="container">

    <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content() ?>
    <?php endwhile; // end of the loop. ?>
 
</div> 
</section>

<?php get_footer(); ?>

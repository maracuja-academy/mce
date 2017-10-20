
<?php 
/**
 *Template Name: Equitation Club
 */

function asset($name){
    echo get_template_directory_uri().'/images/'.$name;
}


get_header(); ?>
<div id="club">


<section class="clearfix bg-club">
    <div class="container">
        <h3>OFFRE CLUB</h3>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php the_title( '<h2>', '</h2>' ); ?>
        <div class="row">
            <div class="col-6">
            </div>
            <div class="col-6">
                <?php the_content(); ?>
            </div>
        </div>
        <?php endwhile;?>
    </div>
</section>

<section id="testimonial" class="bg-beige">
    <div class="container">
        <h2>Ils nous ont fait confiance.</h2>
        <p>Ils ont offert « Mon cahier d’entrainement » 
    à leurs licenciés.</p>
        <div class="row">
            <div class="col-6">
                <img src="<?php asset('equitation/logo-tursan.png') ?>" alt="Les Écuries de Val de Tursan logo"  /><br>
                <p>Les Écuries du Val de Tursan</p>
            </div>
            <div class="col-6">
                <img src="<?php asset('equitation/logo-ornon.png') ?>" alt="Le centre équestre d’Éperon d’Ornon logo"  /><br>
                <br>Le centre équestre d’Éperon d’Ornon</p>
            </div>
        </div>

    </div>


</section>

<section id="offer">
    <div class="container">
        <div class="row">
            <div class="col-6 " style="text-align: center;">
                <h2>Protitez d’une offre exclusive
                sur notre dernière édition.</h2>
                <p>Nous sommes convaincus que l’équitation est un formidable vecteur éducatif. En tant que centre équestre, nous aimerons vous permettre d’offrir ce cahier à vos licenciés à moindre coût.</p><br>
                <p>
                    <i>✓</i> 20% de réduction à partir de 10 cahiers <br>
                    <i>✓</i> de la livraison gratuite
                </p>
                <em>Avec le code <strong>CLUB2017</strong> avant jusqu’au 1er Novembre 2017 !</em>
                <a href="/cahier/automne2017/" class="button">J'en profite !</a>
            </div>
            <div class="col-6">
                <img src="<?php asset('equitation/bookx4.png') ?>" alt="Le centre équestre d’Éperon d’Ornon logo"/><br>
            </div>
        </div>
    </div>
    
</section>


</div>
<?php get_footer(); ?>

<script type="text/javascript">
jQuery(document).ready(function(){
    app.landing()

})
</script>

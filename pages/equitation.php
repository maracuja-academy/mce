
<?php 
/**
 *Template Name: Equitation Home
 */



function asset($name){
    echo get_template_directory_uri().'/images/'.$name;
}


get_header('equit'); ?>

<!-- <div id="menu" >

    <div class="book-logo"></div>
    <div class="hamburger" onclick="app.menuToggle()"></div>
    <nav>
        <a href="#section-book">Le magazine</a>
        <a href="#section-collaboration">Contenu</a>
        <a href="#section-preview">Feuilletez un extrait</a>
        <a href="#section-team">L'équipe</a>
        <a href="/cart/?add-to-cart=254">Commander</a>
    </nav>

</div> -->

<div class="bg-sky">
    <section id="section-intro" class="row ">
        <div class="container">
            <div class="col-6">
                <h2>Parce qu’apprendre devrait toujours être passionnant ! </h2>
            </div>
            <div class="col-6 video">
                <iframe width="720" height="410" src="https://www.youtube.com/embed/yT3mFdK7_DQ" frameborder="0" gesture="media" modestbranding="1" allow="encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="col-6">
                <h3>Le premier magazine éducatif <br>pour progresser  <br>grâce à sa passion de l’équitation.</h3>
                <p>Conçu avec des professeurs des écoles et des moniteurs d’équitation.</p>
                <a href="#section-content" class="button">Je découvre</a>
            </div>
            
        
        </div>
    </section>
    <section id="section-noel" class=" ">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    
                    <h2 class="font-comics">Le cadeau de Noël !</h2>
                    <h3>Offrez une expérience unique aux plus jeunes !</h3>
                    <div class="content">
                        <div class="couv-noel"></div>
                        <div class="info">
                            <div class="offer vertical-container">
                                <p class="box">
                                    Un magazine<br>tous les 2 mois<br>pour progresser<br>grâce à l’équitation !
                                    <strong class="font-comics">1 AN • 23€</strong>
                                    <span>au lieu de <del>27€</del></span>
                                </p>
                            </div>
                            <a href="/checkout/?add-to-cart=268" class="button">Je m'abonne</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
</div>
<section>
    <div class="container">
        <div class="row">
           
            <div id="section-why" class="col-6">
                <h2>Pourquoi ce magazine ?</h2>
                <h3>Parce qu’apprendre devrait toujours être passionnant ! </h3>
                <ul>
                    <li>Parce que nous croyons que “prendre du plaisir à apprendre” est clé pour nos enfants. 
                    </li>
                    <li>Parce que l’équitation est une fabuleuse passion qui favorise le respect des autres, de la vie animale et du milieu naturel. </li>
                    <li>Parce que donner du sens aux apprentissages, et notamment à travers sa passion, permet d’apprendre en diminuant la sensation d’effort.  </li>
                </ul>
            </div>
            
          

             <div class="col-6 section-testimonial">
                <h2>Conçu pour les enfants, <br> envié par les plus grands !</h2>
                
                <blockquote>
                    <p>L’idée m'a conquise et mes élèves aussi : C’est un super outil pour leur transmettre la culture équestre tout en donnant du sens aux matières scolaires. </p> 
                    <img src="<?php asset('equitation/testimonial-mathilde.jpg') ?>" alt="Mathilde Trinchero" />
                    <span>Mathilde Trinchero</span><br>
                    <strong>Monitrice et <a href="https://www.youtube.com/watch?v=z-iR6FjGcZw">Youtubeuse</a></strong>
                </blockquote>

            </div>


        </div>
    </div>
     
    <div class="container">
        <div class="row  section-testimonial">
            <div class="col-6">
                <blockquote>
                    <p>J’aurais adoré, plus jeune, avoir ce regard sur mon apprentissage</p> 
                    <img src="<?php asset('equitation/testimonial-alexandra.jpg') ?>" alt="Alexandra Martel" />
                    <span>Alexandra Martel</span><br>
                    <strong>Fondatrice de <a href="https://www.horsealot.com/wall/profile/alexandra/">Horsealot</a></strong>
                </blockquote>
            </div>
            <div class="col-6">
                <blockquote>
                    <p>En plus du programme scolaire, je trouve ça chouette que ma fille approfondisse sa culture équestre</p> 
                    <br>
                    <span>Hélène </span><br>
                    <strong>Maman de Amandine, 10 ans</strong>
                </blockquote>
            </div>
        </div>
    </div>
</section>
<hr class="container">
<section id="section-content">
    <div class="container">
        <div class="row">
            <h2>Feuilleter un extrait</h2>
            <iframe src="//v.calameo.com/?bkcode=005173341f26319a7a2f3&mode=mini&disablemousewheel=true&page=2" width="1080" height="675" frameborder="0" scrolling="no" allowtransparency allowfullscreen ></iframe>
            <h3>Retrouvez dans chaque numéro :</h3>
            <ul>
                <li><i>✓</i> Des révisions du programme scolaire grâce à l’équitation </li>
                <li><i>✓</i> De l’actualité équestre </li>
                <li><i>✓</i> Des quiz sur l’hippologie </li>
                <li><i>✓</i> Des vidéos, des jeux et plein d’autres surprises… </li>
            </ul>
        </div>
    </div>
</section>
<hr class="container">
<section id="section-command">
    <div class="container">
        <div class="row">
            <h2>Recevez Mon cahier d’entrainement chez vous !</h2>  

            <div class="col-4">
                <img src="<?php asset('equitation/gift-card.jpg') ?>" />
                <h3>En cette période de Noël, offrez une expérience unique à vos proches !</h3>
            </div>
            <div class="col-4">
                <p>L’ enfant à qui vous offrez cet abonnement recevra 6 magazines “Mon cahier d’entrainement” pendant 1 an. Il recevra également une jolie carte cadeau avec votre message lors de la réception du 1er numéro.</p>
                <h3 class="font-comics">Offre spéciale Noël : 1 an 23€ </h3>
                <p class="promo">au lieu de <del>27€</del></p>
                <a href="/checkout?add-to-cart=254" class="button">S'abonner</a>
            </div>
            <div class="col-4 sell-alone">
                 <img src="<?php asset('equitation/couv-automne-unite.jpg') ?>" />
                 <div>
                     <h3>Commander le magazine à l’unité</h3>
                     <p>4,50€</p>
                     <a class="button2" href="/boutique">Choisir</a>
                 </div>
            </div>
        </div>
    </div>
</section>
 <!-- 
    <div id="section-stages" class="container">
        <div class="row">
            <div class="col-6">
                <h2>Nos stages de révisions sportives et équestres.</h2>
                <p>En partenariat avec les centres équestres, nous organisons des journées de stages de révisions scolaires et équestres.</p>
                <h3>Prochain stages : </h3>
                <ul>
                    <li>
                        <strong>Les Ecuries du Val de Tursan, Landira (33)</strong>
                        Jeudi 4 Janvier 2018 - CM1-CM2-6e
                    </li>
                    <li>
                        <strong>Poney Club de La Voile , Cabanac-Et-Villagrains (33)</strong>
                        Mercredi 27 décembre - CM1-CM2-6 
                    </li>
                </ul>
                <p><strong>Vous êtes intéressé par ces stages pour votre centre équestre ou celui de votre enfant, <a href="#section-contact">contactez-nous</a>. </strong></p>
            </div>
            <div class="col-6">
                <img src="<?php asset('equitation/gift-card.jpg') ?>" />
            </div>

        </div>

    </div> -->
<!--
    <div id="section-contact" class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <h2>Une question ? Ecrivez-nous.</h2>
                <p>Vous avez une question, des conseils, critiques, idées à nous proposer, c’est par ici :</p>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content() ?>
                <?php endwhile; // end of the loop. ?>
     
            </div>
            <div class="col-4"></div>
        </div>

    </div> -->

<hr class="container">

    <section id="section-social" class="container">
        <h2>Suivez-nous !</h2>
        <a class="facebook" href="https://facebook.com/moncahierequitation" alt="Facebook" title="Facebook" target = "_blank" ></a>

    </section>




<script type="text/javascript">
jQuery(document).ready(function(){
    app.landing()

})
</script>
<?php get_footer('equit'); ?>

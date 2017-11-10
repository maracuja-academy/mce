<!-- LANDING PAGE http://blog.viviansarazin.com/landing-page-checklist/ -->

<?php 
/**
 *Template Name: Gym Landing Page 
 */

function asset($name){
    echo get_template_directory_uri().'/images/'.$name;
}


get_header(); ?>
<div id="landing">

<div id="menu" >
    

    <div class="book-logo"></div>
    <div class="hamburger" onclick="app.menuToggle()"></div>
    <nav>
        <a href="#section-book">Le magazine</a>
        <a href="#section-collaboration">Contenu</a>
        <a href="#section-preview">Feuilletez un extrait</a>
        <a href="#section-contact">En savoir plus</a>
        <a href="#section-team">L'équipe</a>
        
    </nav>

</div>




<section id="section-book" class="clearfix">
    <div class="container">
        <div class="row">
        <div class="col-6">
            <img src="<?php asset('gym/book.png') ?>" alt="Mon cahier d'entrainement Couverture"  />
        </div>
        <div class="col-6 vertical-container">
            <div class="box">
                <h2>Parce que prendre du plaisir à apprendre est la clé du monde de demain,</h2>
                <p>nous réalisons le premier magazine de révisions scolaires et sportives ! Votre enfant redécouvrira le français et les mathématiques grâce à sa passion pour la gymnastique.</p>
                <a href="/commande" class="button">Ça m'intéresse</a>
            </div>
        </div>
        </div>
    </div>
</section>


<section id="section-collaboration" class="bg-beige">
    <div class="container">
        <h2>Conçu en collaboration<br> avec des enseignants et des professeurs de gymnatisque !</h2>
        <img src="<?php asset('gym/book-open.png') ?>" width="662">

        <div class="row">
            <div class="col-6">
                <img src="<?php asset('gym/picto-gym.png')?>">
                <div class="detail">
                    <h3>Culture gym</h3>
                    <p>Des rubriques pour en découvrir toujours plus sur le monde de la gymnastique : L’hygiène et la santé dans le sport, les agrès, les championnats. </p>
                </div>
            </div>
            <div class="col-6">
                <img src="<?php asset('gym/picto-school.png')?>">
                <div class="detail">
                    <h3>Révisions scolaires</h3>
                    <p>En s’appuyant sur des textes issus du monde de la gymnastique, vos licenciés révisent de façon ludique et efficace.</p>
                </div>
            </div>
        </div>

</section>


<section id="section-preview" class="bg-white">
    <div class="container">
        <h2>Feuilletez un extrait</h2>
        
        <iframe src="//v.calameo.com/?bkcode=005173341647d8f52db80&mode=mini&disablemousewheel=true&bgcolor=FFFFFF&page=2" width="1080" height="675" frameborder="0" scrolling="no" allowtransparency allowfullscreen ></iframe>

    </div>
</section>

<section id="section-contact" class="bg-beige">
    <div class="container">
        <h2>Vous êtes intéressés ?</h2>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content() ?>
            <?php endwhile; // end of the loop. ?>
     
    </div> 
</section>



<section id="section-team" class="bg-white">
    <div class="container">
        
        <h2>Une équipe de passionnés au service du sport passion !</h2>
        <div class="row">
            

            <div class="col-4" >
                <div class="member" style="background-image:url(<?php asset('photo-anne.png')?>)">
                    <div class="bg"></div>
                    <h3>Anne</h3>
                    <p>Passionné de sport (Galop 7 équitation), Anne est professeur des écoles et participe à la création des contenus éducatifs.</p>
                </div>
            </div>
            <div class="col-4">
                <div class="member" style="background-image:url(<?php asset('photo-antoine.jpg')?>)">
                     <div class="bg"></div>
                    <h3>Antoine</h3>
                    <p>Avec une sensibilité particulière pour l’illustration jeunesse, Antoine est graphiste et apporte aux magazines couleurs et esthétisme.</p>
                </div>
            </div>
            <div class="col-4">
                <div class="member"style="background-image:url(<?php asset('photo-damien.png')?>)">
                     <div class="bg"></div>
                    <h3>Damien</h3>
                    <p>Passionné d’éducation, Damien est designer de formation. Il s’est spécialisé dans le développement d’applications et a travaillé avec plusieurs startups.</p>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-4">
                <div class="member" style="background-image:url(<?php asset('photo-julia.png')?>)">
                    <div class="bg"></div>
                    <h3>Julia</h3>
                    <p>C’est aussi grâce à Julia que les contenus éducatifs sont améliorés et validés ! Elle est professeur des écoles depuis plus de 15 ans.</p>
                </div>
            </div>
             <div class="col-4">
                <div class="member" style="background-image:url(<?php asset('photo-remy.png')?>)">
                    <div class="bg"></div>
                    <h3>Rémy</h3>
                    <p>Passionné de sport. Rémy a décidé de mettre son experience de la communication et de l’évènementiel au service de l’éveil des jeunes générations.</p>
                </div>
            </div>
     <!--        <div class="col-3" >
                <div class="member" style="">
                    <div class="bg"></div>
                    <h3>Valentine</h3>
                    <p>Experte gymnastique</p>
                </div>
            </div> -->

            <div class="col-4">
                <div class="member" style="background-image:url(<?php asset('photo-vincent.png')?>)">
                     <div class="bg"></div>
                    <h3>Vincent</h3>
                    <p>Convaincu que l’éducation est en pleine mutation, Vincent a décidé de se dédier pleinement à des projets qui lient motivation et apprentissage.</p>
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

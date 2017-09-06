<!-- LANDING PAGE http://blog.viviansarazin.com/landing-page-checklist/ -->

<?php 
/**
 *Template Name: Equitation Landing Page 
 */

function asset($name){
    echo get_template_directory_uri().'/images/'.$name;
}


get_header(); ?>


<div id="menu" >
    <a href="/commande" class="button">Commander</a>

    <div class="book-logo"></div>
    <div class="hamburger" onclick="app.menuToggle()"></div>
    <nav>
        <a href="#section-book">Le cahier</a>
        <a href="#section-preview">Feuilletez un extrait</a>
        <a href="#section-pricing">Tarif</a>
        <a href="#section-who">Qui sommes-nous ?</a>

    </nav>

</div>




<section id="section-book" class="bg-grass clearfix">
    <div class="container">
        <div class="row">
        <div class="col-6">
            <img src="<?php asset('book-cover-equit-automne.png') ?>" alt="" width="350" height="410" />
        </div>
        <div class="col-6 vertical-container">
            <div class="box">
                <h2>Le premier cahier d'entrainement personnalisé par votre centre équestre !</h2>
                <p>Grâce à leur passion de l’équitation et du club, engagez vos jeunes cavaliers dans des révisions sportives et scolaires en prenant du plaisir !</p>
            </div>
        </div>
        </div>
    </div>
</section>

<section class="bg-halo">
    <div class="container">
        <h2>Notre ambition : que ce cahier vous permette de fédérer votre
        communauté autour de valeurs éducatives et sportives.</h2>
    </div>
</section>

<section id="section-personalise" class="bg-white">
    <div class="container">
        
        <h2>Un cahier, à votre image, pour faire progresser<br>vos jeunes cavaliers en prenant du plaisir.</h2>
        <div class="row">
            <div class="col-4">
                <img src="<?php asset('equit-picto-unique.png')?>">
                <h3>Un cahier unique</h3>
                <p>✓ Logo de votre centre équestre sur la page de couverture</p>
                <p>✓ Intégration d’une vidéo dictée du moniteur de vos jeunes cavaliers</p>
            </div>
            <div class="col-4">
                <img src="<?php asset('equit-picto-hippologie.png')?>">
                <h3>Hippologie</h3>
                <p>Le pansage, l’anatomie du cheval, les couleurs de robes du poney. Une rubrique pour en découvrir toujours plus sur le monde équestre.</p>
            </div>
            <div class="col-4">
                <img src="<?php asset('equit-picto-read.png')?>">
                <h3>Révisions scolaires</h3>
                <p>En s’appuyant sur des textes équestres, vos jeunes cavaliers révisent de façon ludique et efficace.</p>
            </div>

        </div>
        <p><a class="button" href="/commande">Commander</a></p>

</section>
<section class="bg-halo">
    <div class="container">
        <h2>Retrouvez, avant chaque vacances scolaires, une nouvelle édition de « Mon cahier d’entrainement »</h2>
    </div>
</section>
<section class="bg-white separator">
    <div class="container">
        <h2>Présentation du cahier par Mathilde Trinchero, <br>monitrice d'équitation et youtubeuse équestre ! </h2>
        <div id="video">
            <iframe width="853" height="480" src="https://www.youtube.com/embed/z-iR6FjGcZw" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</section>
<section id="section-preview" class="bg-white">
    <div class="container">
        <h2>Feuilletez un extrait :</h2>
        
        <iframe src="//v.calameo.com/?bkcode=0051733419284511fa3c2&mode=mini&disablemousewheel=true" width="1080" height="675" frameborder="0" scrolling="no" allowtransparency allowfullscreen ></iframe>

        <h3>Contactez-nous vite pour mettre en place l'édition Automne pour les vacances de Toussaint !</h3>
        <a class="button" href="/commande">Commander</a>
    </div>
</section>


<section class="bg-halo">
    <h2>Conçu en collaboration<br>avec des enseignants et des moniteurs d’équitation !</h2>
</section>


<section id="section-pricing" class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="<?php asset('book-open-equit.jpg') ?>" alt="" width="630" height="313" class="alignnone size-full wp-image-564" />
            </div>    
            <div class="col-4">
                <h2>Le prix juste.</h2>
                <h3>5€ / cahier</h3>
                <p>
                    Un projet clé en main : <br>
                    <i>✓</i> Edition du cahier  <br>
                    (format A5 – 36 pages) <br>
                    <i>✓</i> Intégrations de vos données  <br>
                    (vidéos, textes, logo,…) <br>
                    <i>✓</i> Livraison dans votre club
                </p>
                <p class="asterisque">
                    * 5€ TTC à partir de 30 cahiers par club <br>
                    6,5€ TTC en dessous de 30 cahiers par club
                </p>
            </div>
        </div>
    </div>
</section>



<section id="section-contact" class="bg-grass"> 
<div class="container">
    <h2>Vous êtes intéressé ?</h2>
    <h3>Contactez-nous</h3>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content() ?>
        <?php endwhile; // end of the loop. ?>
 
</div> 
</section>



<section class="bg-halo" id="section-who">
    <h2>Qui sommes-nous ?</h2>
</section>

<section id="section-team" class="bg-white">
    <div class="container">
        
        <h2>Une équipe de passionnés au service du sport passion !</h2>
        <div class="row">
            <div class="col-3">
                <img src="<?php asset('photo-anne.png')?>">
                <h3>Anne</h3>
                <p>Comme vos jeunes cavaliers, Anne est, avant tout, passionnée d’équitation. Son galop 7 et son métier d’enseignant lui ont permis de réaliser le contenu du cahier d’une manière éducative et technique.</p>
            </div>
            <div class="col-3">
                <img src="<?php asset('photo-julia.png')?>">
                <h3>Julia</h3>
                <p>C’est aussi grâce à Julia que les contenus éducatifs sont améliorés et validés ! Elle est professeur des écoles depuis plus de 15 ans.</p>
            </div>
            <div class="col-3">
                <img src="<?php asset('photo-vincent.png')?>">
                <h3>Vincent</h3>
                <p>Co-fondateur de « Mon cahier d’entrainement » et convaincu que l’éducation est en pleine mutation, Vincent a décidé de se dédier pleinement à des projets qui lient motivation et apprentissage.</p>
            </div>
            <div class="col-3">
                <img src="<?php asset('photo-damien.png')?>">
                <h3>Damien</h3>
                <p>Passionné d’éducation, Damien est designer de formation. Il s’est spécialisé dans le développement d’applications mobiles et a travaillé avec plusieurs startups.</p>
            </div>
           
        </div>
</section>
<section class="bg-halo">
    <h2>Notre mission</h2>
</section>

<section id="section-mission">
    <div class="container">
    <h3>Permettre aux centres équestres de fédérer leur communauté autour de valeurs sportives et éducatives.</h3>

    <p><strong>Nous sommes convaincus que l’apprentissage tout au long de la vie est la clé du monde de demain et nous sommes persuadés que l’équitation est un fabuleux vecteur d’éducation qui peut aider les enfants à apprendre grâce à leur passion.  </strong></p>
    <p>L’équitation est pour nous complémentaire à ce que les enfants peuvent apprendre à l’école. En plus de la notion de respect de ses engagements et de responsabilités vis à vis de son poney, l’enfant développe une confiance en soi souvent impressionnante. Créer le lien entre l’école, la famille et le centre équestre nous a semblé être un équilibre exemplaire pour les futurs adultes. <br>
        Nous avons donc créé un cahier de vacances “nouvelle génération” où le programme de Cm1, Cm2 et 6ème est abordé grâce à du contenu issu du monde de l’équitation. Ces cahiers, réalisés en partenariat avec des moniteurs d’équitation, permettent également de réviser l’hippologie à travers des exercices ludiques .</p>

    <p></p>
    </div>
</section>
<?php get_footer(); ?>

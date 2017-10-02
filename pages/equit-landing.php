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
    

    <div class="book-logo"></div>
    <div class="hamburger" onclick="app.menuToggle()"></div>
    <nav>
        <a href="#section-book">Le cahier</a>
        <a href="#section-collaboration">Contenu</a>
        <a href="#section-preview">Feuilletez un extrait</a>
        <a href="#section-team">L'équipe</a>
        <a href="/cahier/automne2017/">Commander</a>
    </nav>

</div>




<section id="section-book" class="bg-grass clearfix">
    <div class="container">
        <div class="row">
        <div class="col-6">
            <img src="<?php asset('equitation/book-automne.png') ?>" alt="" width="350" height="410" />
        </div>
        <div class="col-6 vertical-container">
            <div class="box">
                <h2>Le premier magazine de révisions scolaires et équestres !</h2>
                <p>Votre enfant redécouvrira l’école grâce à sa passion pour l’équitation.</p>
                <a href="/cahier/automne2017/" class="button">Commander</a>
            </div>
        </div>
        </div>
    </div>
</section>


<section id="section-collaboration" class="bg-beige">
    <div class="container">
        <h2>Conçu en collaboration<br> avec des enseignants et des moniteurs d’équitation !</h2>
        <img src="<?php asset('equitation/book-open.png') ?>" width="662">

        <div class="row">
            <div class="col-6">
                <img src="<?php asset('equitation/picto-hippologie.png')?>">
                <div class="detail">
                    <h3>Hippologie</h3>
                    <p>Le pansage, l’anatomie du cheval, les couleurs de robes du poney. Une rubrique pour en découvrir toujours plus sur le monde équestre.</p>
                </div>
            </div>
            <div class="col-6">
                <img src="<?php asset('equitation/picto-school.png')?>">
                <div class="detail">
                    <h3>Révisions scolaires</h3>
                    <p>En s’appuyant sur des textes équestres, vos jeunes cavaliers révisent de façon ludique et efficace.</p>
                </div>
            </div>
        </div>

</section>

<section class="bg-white">
    <div class="container">
        <h2>Présentation du cahier par Mathilde Trinchero, <br>monitrice d'équitation et youtubeuse équestre ! </h2>
        <div id="video">
            <iframe width="853" height="480" src="https://www.youtube.com/embed/z-iR6FjGcZw" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</section>

<section id="section-content" class="bg-white">
    <div class="container">
        <h2>Des thématiques équestres<br>adaptées au cycle 3 (CM1-CM2-6e) </h2>
        <div class="row">
            <div class="col-4 dwh">
                <h3>Le pansage</h3>
            </div>
            <div class="col-4 mouth">
                <h3>La bouche du Cheval</h3>
            </div>
            <div class="col-4 maths">
                <p><i>✓</i>Les aires et périmètres </p>
                <p><i>✓</i>Les multiplications </p>
                <p><i>✓</i>Les grands nombres</p>
                <h3>Maths</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-4 francais">
                <p><i>✓</i>Le verbe et son sujet </p>
                <p><i>✓</i>Les compléments du verbe</p>
                <p><i>✓</i>Les accords sujet/verbe</p>
                <h3>Français</h3>
            </div>
            <div class="col-4 leprevost">
                <h3>Pénélope Leprevost</h3>
            </div>
            <div class="col-4 foot">
                <h3>L’entretien des sabots</h3>
            </div>
        </div>
        
    </div>
</section>


<section id="section-preview" class="bg-beige">
    <div class="container">
        <h2>Feuilletez un extrait</h2>
        
        <iframe src="//v.calameo.com/?bkcode=0051733419284511fa3c2&mode=mini&disablemousewheel=true&bgcolor=F2F4E7" width="1080" height="675" frameborder="0" scrolling="no" allowtransparency allowfullscreen ></iframe>

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
                    <p> Anne est passionnée d’équitation. Son galop 7 et son métier d’enseignant lui ont permis de réaliser le contenu du cahier d’une manière éducative et technique.</p>
                </div>
            </div>
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
        </div>
        <div class="row">
            <div class="col-6">
                <div class="member" style="background-image:url(<?php asset('photo-vincent.png')?>)">
                     <div class="bg"></div>
                    <h3>Vincent</h3>
                    <p>Convaincu que l’éducation est en pleine mutation, Vincent a décidé de se dédier pleinement à des projets qui lient motivation et apprentissage.</p>
                </div>
            </div>
            <div class="col-6">
                <div class="member"style="background-image:url(<?php asset('photo-damien.png')?>)">
                     <div class="bg"></div>
                    <h3>Damien</h3>
                    <p>Passionné d’éducation, Damien est designer de formation. Il s’est spécialisé dans le développement d’applications et a travaillé avec plusieurs startups.</p>
                </div>
            </div>
        </div>
        
</section>


<?php get_footer(); ?>

<script type="text/javascript">
jQuery(document).ready(function(){
    app.landing()

})
</script>

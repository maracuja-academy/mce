
<?php 
/**
 *Template Name: Page Foot Landing
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
        <a href="#section-content">En détail</a>
        <a href="#section-contact">Intéressé ?</a>
        <a href="#section-team">L'équipe</a>
        <a href="/commande">Commander</a>
    </nav>
</div>




<section id="section-book" class="bg-grass clearfix">
    <div class="container">
        <div class="row">
    	<div class="col-6">
            <img src="<?php asset('foot/book.png') ?>" alt="Mon cahier d'entrainement Football"/>
        </div>
    	<div class="col-6 vertical-container">
    		<div class="box">
            	<h2>Parce que prendre du plaisir à apprendre est la clé du monde de demain,</h2>
            	<p>nous réalisons le premier magazine de révisions scolaires et sportives ! Fédérer votre communauté autour de valeurs éducatives et sportives. Vos licenciés redécouvriront le français et les mathématiques grâce à leur passion du football.</p>
            	<a href="/commande" class="button">Commander</a>
            </div>
    	</div>
        </div>
    </div>
</section>

<section id="section-video" class="bg-white ">
    <div class="container ">
        <h2>Notre ambition : que ce cahier vous permette de fédérer votre
        communauté autour de valeurs éducatives et sportives.</h2>
        <div id="video">
            <iframe src="https://www.youtube.com/embed/7FLeLqxlgVk" width="853" height="480" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
        </div>
    </div>
</section>

<section id="section-content" class="bg-beige">
    <div class="container">
        
        <h2>Un magazine conçu en collaboration avec des enseignants et des responsables technique de clubs !</h2>
        <div class="row">
            <div class="col-6">
                <div class="img-container">
                <img src="<?php asset('foot/pct-sportif.png') ?>" alt="Ballon" /></div>

                <h3>Entrainement sportif</h3>
                <p>Séances jongleries, passes, feintes... <br/> Dès qu'ils auront un moment, vos joueurs s'entraîneront grâce à vous.</p>
            </div>
            <div class="col-6">
                <div class="img-container">
                <img src="<?php asset('foot/picto-school.png') ?>" alt="École" /></div>
                <h3>Entrainement scolaire</h3>
                <p>En s'appuyant sur des textes issus de leur passion, <br>vos joueurs révisent de façon ludique et efficace.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="img-container">
                <img src="<?php asset('foot/pct-foot.png') ?>" alt="joueur de football " /></div>
                <h3>Ateliers en club</h3>
                <p>Durant les stages, les animateurs sportifs auront un support pour lier les exercices du magazine avec des défis sportifs.</p>
            </div>
            <div class="col-6">
                <div class="img-container">
                <img src="<?php asset('foot/pct-club.png') ?>" alt="foot shirt" /></div>
                <h3>Culture Foot</h3>
                <p>Rien de mieux que des quiz, pour apprendre 
et réviser l’histoire du football, les termes techniques…</p>
            </div>
        </div>
    </div>
</section>


<section id="section-preview" class="bg-white">
    <div class="container">
        <h2>Feuilletez un extrait :</h2>
   
        <iframe src="//v.calameo.com/?bkcode=005173341ffc29f71a5e0&mode=mini&disablemousewheel=true&bgcolor=FFFFFF&page=2" width="1080" height="675" frameborder="0" scrolling="no" allowtransparency allowfullscreen ></iframe>

    </div>
</section>


<section id="section-contact" class="bg-beige"> 
<div class="container">
    <h2>Intéressé ?<br>Contactez-nous</h2>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content() ?>
        <?php endwhile; // end of the loop. ?>
 
</div> 
</section>


<section id="section-team" class="bg-white separator">
	<div class="container">
        <div class="row">
		<h2>Une équipe de passionnés au service du sport passion !</h2>
            <div class="col-4">
                <img src="<?php asset('photo-antoine.jpg')?>" alt="Antoine Morandi"/><br>
                <h3>Antoine</h3>
                <p>Avec une sensibilité particulière pour l’illustration jeunesse, Antoine est graphiste et apporte aux magazines couleurs et esthétisme.</p>
            </div>
            <div class="col-4">
                <img src="<?php asset('photo-damien.png')?>" alt="Damien Romito"/>
                <h3>Damien</h3>
                <p>Passionné d’éducation, Damien est designer de formation. Il s’est spécialisé dans le développement d’applications et a travaillé avec plusieurs startups.</p>
            </div>
            <div class="col-4">
                <img src="<?php asset('photo-jeremy.png')?>" alt="Jérémy Cassy" /><br>
                <h3>Jérémy</h3>
                <p>Professeur d'EPS en collège, Jérémy est également Responsable Technique en club et côtoie depuis plus de 20 ans les clubs en tant que sportif et encadrant.</p>
            </div>
        </div>
        <div class="row">

            <div class="col-4">
                <img src="<?php asset('photo-julia.png')?>" alt="Julia Brethous" /><br>
                <h3>Julia</h3>
                <p>C’est grâce à Julia que les contenus éducatifs sont améliorés et validés! Elle est professeur des écoles depuis plus de 15 ans.</p>
            </div>
            <div class="col-4">
                <img src="<?php asset('photo-remy.png')?>" alt="Rémy Ayoub" /><br>
                <h3>Rémy</h3>
                <p>Passionné de sport. Rémy a décidé de mettre son experience de la communication et de l’évènementiel au service de l’éveil des jeunes générations.</p>
            </div>
            <div class="col-4">
                <img src="<?php asset('photo-vincent.png')?>" alt="Vincent Rebière" /><br>
                <h3>Vincent</h3>
                <p>Convaincu que l’éducation est en pleine mutation, Vincent a décidé de se dédier pleinement à des projets qui lient motivation et apprentissage.</p>
            </div>            

        </div>
	</div>
</section>

<section id="section-mission" class="bg-white ">
	<div class="container">
		<h2>Permettre au club de fédérer sa communauté autour de valeurs sportives et éducatives.</h2>

		<p>Le football est le 3ème lieu éducatif en France. 
Nous sommes convaincus que l'apprentissage tout au long de la vie est la clé du monde de demain et nous sommes persuadés que le football est un fabuleux vecteur d'éducation qui peut aider les jeunes à apprendre grâce à leur passion.
Nous avons créé un cahier de vacances "nouvelle génération" ou le programme de Cm1, Cm2 et 6ème (U10 - U12) est abordé grâce à du contenu issus du monde du football. Des contenus, réalisés en partenariat avec des RTJ permettent également de réviser les "gammes" sportives à travers des exercices ludiques .
		</p>
	</div>
</section>
</div>


<?php get_footer(); ?>


<script type="text/javascript">
jQuery(document).ready(function(){
    app.landing()

})
</script>

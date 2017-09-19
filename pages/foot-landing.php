
<?php 
/**
 *Template Name: Page Foot Landing
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
        <a href="#section-preview">Feuilletez un extrait</a>
        <a href="#section-pricing">Tarif</a>
        <a href="#section-team">Qui sommes nous ?</a>
    </nav>
</div>




<section id="section-book" class="bg-grass clearfix">
    <div class="container">
        <div class="row">
    	<div class="col-6">
            <img src="<?php asset('foot/book-cover.png') ?>" alt="" width="350" height="410" />
        </div>
    	<div class="col-6 vertical-container">
    		<div class="box">
            	<h2>Le premier cahier 
d’entrainement sportif et scolaire  personnalisé par le club !</h2>
            	<p> Grâce à leur passion du football et du club, engagez vos jeunes joueurs dans des révisions sportives, scolaires et ludiques cette année !</p>
            	<a href="/commande" class="button">Commander</a>
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
<section id="section-video" class="bg-white separator">
    <div class="container ">
        <h2>Présentation du cahier avec Jaroslav Plašil</h2>
        <div id="video">
            <iframe src="https://www.youtube.com/embed/7FLeLqxlgVk" width="853" height="480" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
        </div>
    </div>
</section>


<section class="bg-halo">
    <h2>Conçu en collaboration <br>
    avec des enseignants et des responsables techniques de clubs!</h2>
</section>
<section id="section-preview" class="bg-white">
    <div class="container">
        <h2>Feuilletez un extrait :</h2>
        <iframe style="margin: 0 auto;" src="//v.calameo.com/?bkcode=005173341d9c5a3b1323b&amp;mode=mini&disablemousewheel=true&bgcolor=FFFFFF" width="1080" height="675" frameborder="0" scrolling="no" allowfullscreen="allowfullscreen"></iframe>
    </div>
</section>
<section class="bg-halo">
    <h2>Retrouvez à chaque vacances scolaires  <br>
    une nouvelle édition de Mon cahier d’entrainement !</h2>
</section>
<section id="section-pricing" class="bg-white ">
    <div class="container">
        <div class="row">
            <div class="col-6">
                
            </div>
            <div class="col-6">

            </div>
        </div>
    </div>
    <h2>Le prix juste !</h2>
    <h2>2,5 € / cahier *</h2>
    <img src="http://www.footdefrancais.fr/wp-content/uploads/2017/07/livre-open.png" alt="" width="300" height="273" class="alignnone size-full wp-image-566" />

    <p>Un projet clé en main :<br>
    Edition du cahier (format A5 - 36 pages)<br>
    Livraison dans votre club
    </p>
    <em>* 2,5€ TTC à partir de 50 cahiers par club
    3,5€ TTC en dessous de 50 cahiers par club
    +1€ pour la personnalisation </em>

    &nbsp;

</section>

<section id="section-contact" class="bg-grass"> 
<div class="container">
    <h2>Vous êtes intéressés ?</h2>
    <h3>Contactez-nous</h3>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content() ?>
        <?php endwhile; // end of the loop. ?>
 
</div> 
</section>

<section id="section-axes" class="bg-white">
	<div class="container">
		
		<h2>Un cahier, à votre image, <br>pour faire progresser vos U10 - U12</h2>
	    <div class="row">
        	<div class="col-6">
    			<div class="img-container">
    			<img src="http://www.footdefrancais.fr/wp-content/uploads/2017/07/pct-sportif.png" alt="" width="100" height="100" class="alignnone size-full wp-image-557" /></div>

    			<h3>Entraînement sportif</h3>
    			<p>Séances jongleries, passes, feintes... <br/> Cet été, vos joueurs s'entraîneront grâce à vous.</p>
    		</div>
    		<div class="col-6">
    			<div class="img-container">
    			<img src="http://www.footdefrancais.fr/wp-content/uploads/2017/07/pct-scolaire.png" alt="" width="100" height="77" class="alignnone size-large wp-image-560" /></div>
    			<h3>Entraînement scolaire</h3>
    			<p>En s'appuyant sur des textes issus de leur passion, <br>vos joueurs révisent de façon ludique et efficace.</p>
    		</div>
        </div>
        <div class="row">
    		<div class="col-6">
    			<div class="img-container">
    			<img src="http://www.footdefrancais.fr/wp-content/uploads/2017/07/pct-foot.png" alt="" width="100" height="115" class="alignnone size-large wp-image-559" /></div>
    			<h3>Culture Foot</h3>
    			<p>Rien de mieux que des quiz, pour apprendre <br> et réviser l'histoire du football, les termes techniques...</p>
    		</div>
    		<div class="col-6">
    			<div class="img-container">
    			<img src="http://www.footdefrancais.fr/wp-content/uploads/2017/07/pct-club.png" alt="" width="100" height="87" class="alignnone size-large wp-image-558" /></div>
    			<h3>Culture Club</h3>
    			<p>Et si vos joueurs approfondissaient la culture du club, <br>son projet, ses partenaires, son comité directeur...</p>
		    </div>
        </div>
	</div>
</section>

<section id="section-team" class="bg-halo">
	<div class="container">
		<h2>Qui sommes-nous ?</h2>
	</div>
</section>

<section id="team" class="bg-white separator">
	<div class="container">
        <div class="row">
		<h4>Une équipe de passionnés au service du sport passion !</h4>
    		<div class="col-3">
                                   <img src="http://www.footdefrancais.fr/wp-content/uploads/2017/07/photo-julia.png" alt="" width="196" height="200" class="alignnone size-full wp-image-551" />
    			<h3>Julia</h3>
    			<p>C’est grâce à Julia que les contenus éducatifs sont améliorés et validés! Elle est professeur des écoles depuis plus de 15 ans.</p>
    		</div>
    		<div class="col-3">
    			<img src="http://www.footdefrancais.fr/wp-content/uploads/2017/07/photo-vincent.png" alt="" width="199" height="200" class="alignnone size-large wp-image-552" />
    			<h3>Vincent</h3>
    			<p>Fondateur de footdefrançais et convaincu que l'éducation est en pleine mutation, Vincent a décidé de se dédier pleinement à des projets qui lient motivation et apprentissage.</p>
    		</div>
    		<div class="col-3">
    			<img src="http://www.footdefrancais.fr/wp-content/uploads/2017/07/photo-jeremy.png" alt="" width="197" height="200" class="alignnone size-large wp-image-550" />
    			<h3>Jérémy</h3>
    			<p>Professeur d'EPS en collège, Jérémy est également Responsable Technique en club et côtoie depuis plus de 20 ans les clubs en tant que sportif et encadrant.</p>
    		</div>
    		<div class="col-3">
    			<img src="http://www.footdefrancais.fr/wp-content/uploads/2017/07/photo-damien.png" alt="" width="185" height="200" class="alignnone size-full wp-image-549" />
    			<h3>Damien</h3>
    			<p>Passionné d’éducation, Damien est designer de formation. Il s'est spécialisé dans le développement d'applications mobiles et a travaillé avec plusieurs startups.</p>
    		</div>
        </div>
	</div>
</section>

<section id="section-mission" class="bg-white separator">
	<div class="container">
		<h2>Notre mission</h2>
		<h3>Permettre au club de fédérer sa communauté autour de valeurs sportives et éducatives.</h3>
		<h4>La passion du football et de l'éducation !</h4>
		<p>
		Le football est le 3ème lieu éducatif en France. 
Nous sommes convaincus que l'apprentissage tout au long de la vie est la clé du monde de demain et nous sommes persuadés que le football est un fabuleux vecteur d'éducation qui peut aider les jeunes à apprendre grâce à leur passion.
Nous avons créé un cahier de vacances "nouvelle génération" ou le programme de Cm1, Cm2 et 6ème (U10 - U12) est abordé grâce à du contenu issus du monde du football. Des contenus, réalisés en partenariat avec des RTJ permettent également de réviser les "gammes" sportives à travers des exercices ludiques .
		</p>
	</div>
</section>



<?php get_footer(); ?>


<script type="text/javascript">
jQuery(document).ready(function(){
    app.landing()

})
</script>

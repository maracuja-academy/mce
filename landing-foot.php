<!-- LANDING PAGE http://blog.viviansarazin.com/landing-page-checklist/ -->

<?php 
/**
 *Template Name: Landing Page Foot
 */

get_header(); ?>
<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));</script>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.9&appId=1207890805895643";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="menu" >
    <div class="book-logo"></div>
    <div class="hamburger" onclick="app.menuToggle()"></div>
    <nav>
        <a href="#section-book">Le cahier</a>
        <a href="#section-preview">Feuilletez un extrait</a>
        <a href="#section-pricing">Tarif</a>
        <a href="#section-team">Qui sommes nous ?</a>
        <a href="#section-social">Communiquez avec nous</a>
    </nav>
</div>




<section id="section-book" class="bg-grass clearfix">
    <div class="container">
        <div class="row">
    	<div class="col-6">
            <img src="http://www.footdefrancais.fr/wp-content/uploads/2017/07/EffetLivre.png" alt="" width="286" height="406" class="alignnone size-full wp-image-564" />
        </div>
    	<div class="col-6 vertical-container">
    		<div class="box">
            	<h2>Le premier cahier d'entraînement personnalisé par le club !</h2>
            	<p> Grâce à leur passion du football et du club, engagez vos jeunes joueurs dans des révisions sportives, scolaires et ludiques cet été !</p>
            	<a href="#section-contact" class="button">Personnalisez le vôtre !</a>
            </div>
    	</div>
        </div>
    </div>
</section>

<section class="bg-red">
    <div class="container">
        <h2>Notre ambition : que ce cahier vous permette de fédérer votre
        communauté autour de valeurs éducatives et sportives.</h2>
    </div>
</section>

<section id="section-video" class="bg-white separator">
    <div class="container ">
        <h2>Découvrez :</h2>
        <iframe src="https://www.youtube.com/embed/8-sr8xKZRK0" width="853" height="480" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
    </div>
</section>

<section id="section-preview" class="bg-white">
    <div class="container">
        <h2>Feuilletez un extrait :</h2>
        <iframe style="margin: 0 auto;" src="//v.calameo.com/?bkcode=00517334145f71a2ff041&amp;mode=mini" width="1080" height="675" frameborder="0" scrolling="no" allowfullscreen="allowfullscreen"></iframe>
    </div>
</section>
<section class="bg-red">
    <h2>Conçu en collaboration
    avec des enseignants et des responsables techniques de clubs!</h2>
</section>
<section id="section-pricing" class="bg-white ">
    <h2>Le prix juste !</h2>
    <h2>5 € / cahier *</h2>
    <img src="http://www.footdefrancais.fr/wp-content/uploads/2017/07/livre-open.png" alt="" width="300" height="273" class="alignnone size-full wp-image-566" />

    <p>Un projet clé en main :<br>
    Edition du cahier (format A5 - 64 pages)<br>
    Intégrations de vos données (vidéos, textes, logo,...)<br>
    Livraison dans votre club
    </p>
    <em>* 5€ TTC à partir de 50 cahiers par club
    6,5€ TTC en dessous de 50 cahiers par club</em>

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

<section id="section-team" class="bg-red">
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

<section id="section-social" class="bg-white separator">
	<div class="container">
		<h2>Communiquez avec nous !</h2>
        <div class="row">
    		<div class="col-4">
    			<a href="mailto:contact@footdefrancais.fr" class="contact-email" target="_blank"></a>
    			<p>Email</p>

    		</div>
    		<div class="col-4">	
    			<a href="https://www.facebook.com/footdefrancais/" class="contact-fb" target="_blank"></a>
    			<p>Facebook</p>
    		</div>
    		<div class="col-4">	
    			<a href="https://twitter.com/footdef" class="contact-tw" target="_blank"></a>
    			<p>Twitter</p>
    		</div>
        </div>
	</div>
</section>

<section class="social clearfix bg-white">
    <div class="container">
        <div class="fb-like" data-href="https://www.facebook.com/footdefrancais/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>
        <a class="twitter-share-button"
          href="https://twitter.com/intent/tweet?text=Le premier cahier de révisions scolaires et sportives cahier.footdefrancais.fr"
          >Tweet</a>

    </div>
</section>
<?php get_footer(); ?>

<!-- LANDING PAGE http://blog.viviansarazin.com/landing-page-checklist/ -->

<?php 
/**
 *Template Name: Landing Page Equitation
 */
$asset_dir = get_template_directory_uri().'/images/';

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
            <img src="<?php echo $asset_dir.'book-cover-equit.png' ?>" alt="" width="276" height="382" class="alignnone size-full wp-image-564" />
        </div>
    	<div class="col-6 vertical-container">
    		<div class="box">
            	<h2>Le premier cahier de vacances personnalisé par votre poney club !</h2>
            	<p>Grâce à leur passion de l’équitation et du club, engagez vos jeunes cavaliers dans des révisions sportives, scolaires en prenant du plaisir !</p>
            	<a href="#section-contact" class="button">Personnalisez votre cahier!</a>
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

<section id="section-preview" class="bg-white">
    <div class="container">
        <h2>Feuilletez un extrait :</h2>
        <!-- <iframe style="margin: 0 auto;" src="//v.calameo.com/?bkcode=00517334145f71a2ff041&amp;mode=mini" width="1080" height="675" frameborder="0" scrolling="no" allowfullscreen="allowfullscreen"></iframe> -->
        <iframe src="//v.calameo.com/?bkcode=0051733419284511fa3c2&mode=mini" width="1080" height="675" frameborder="0" scrolling="no" allowtransparency allowfullscreen style="margin:0 auto;"></iframe>
    </div>
</section>
<section class="bg-red">
    <h2>Conçu en collaboration
    avec des enseignants et des responsables techniques de clubs!</h2>
</section>

<?php get_footer(); ?>

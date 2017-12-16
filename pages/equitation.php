
<?php 
/**
 *Template Name: Equitation Home
 */



function asset($name){
    echo get_template_directory_uri().'/images/'.$name;
}


get_header('equit'); ?>




    <section id="section-intro" class="row ">
        <div class="container">
            <div class="col-6">
                <h2>Parce qu’apprendre devrait toujours être passionnant ! </h2>
            </div>
            <div class="col-6 video">
                <iframe width="720" height="410" src="https://www.youtube.com/embed/yT3mFdK7_DQ?showinfo=0&modestbranding=1" modestbranding=1 frameborder="0" showinfo=0 gesture="media"  allow="encrypted-media"  allowfullscreen></iframe>
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
                </div>
            </div>
            <div class="row">
                <div class="col-3 couv-noel"> 
                    <div></div>
                </div>
                <div class="col-3 offer">
                    <div class=" vertical-container">
                        <p class="box">
                            Un magazine<br>tous les 2 mois<br>pour progresser<br>grâce à l’équitation !
                            <strong class="font-comics">1 AN • 23€</strong>
                            <span>au lieu de <del>27€</del></span>
                        </p>
                    </div>
                    <a href="/boutique/abonnement" class="button">Je m'abonne</a>
                </div>

            </div>
            
        </div>
    </section>
</div>
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
                    <strong>Monitrice et <a href="https://www.youtube.com/watch?v=z-iR6FjGcZw" target="_blank">Youtubeuse équestre</a></strong>
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
                    <strong>Cavalière et fondatrice de <a href="https://www.horsealot.com/wall/profile/alexandra/" target="_blank">Horsealot</a></strong>
                </blockquote>
            </div>
            <div class="col-6">
                <blockquote>
                    <p>Azilis m'a pris le cahier des mains et l'a fait en une après-midi ! Elle n'as pas eu l'impression de travailler.</p> 
                    <br>
                    <span>Heidi </span><br>
                    <strong>Maman de Azilis (CM2)</strong>
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
                <a href="/boutique/abonnement" class="button">S'abonner</a>
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
 
    <section id="section-stages" >
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h2>Nos stages de révisions sportives et équestres.</h2>
                    <p>En partenariat avec les centres équestres, nous organisons des journées de stages de révisions scolaires et équestres.</p>
                    <h3>Prochain stages : </h3>
                    <ul>
                        <li>
                            <p><a href="https://www.facebook.com/ecuriesduvaldetursan" title="Les Écuries du Val de Tursan">Les Écuries du Val de Tursan</a> Landira (33)</strong><br>
                            Jeudi 4 Janvier 2018 - CM1-CM2-6e</p>
                        </li>
                        <li>
                            <p><a href="https://www.facebook.com/poneyclubdelavoile" title="Poney Club de La Voile ">Poney Club de La Voile </a> Cabanac-Et-Villagrains (33)</strong><br>
                            Mercredi 27 décembre - CM1-CM2-6 </p>
                        </li>
                    </ul>
                    <p><strong>Vous êtes intéressé par ces stages pour votre centre équestre ou celui de votre enfant, <a href="#section-contact">contactez-nous</a>. </strong></p>
                </div>
                <div class="col-6">
                    <img src="<?php asset('equitation/photo-stages.jpg') ?>" title="stages Mon cahier d'entrainement" alt="stages Mon cahier d'entrainement"/>
                </div>

            </div>
        </div>
    </section>

    <section id="section-contact" class="container">
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

    </section> 

<hr class="container">

    <section id="section-social" class="container">
        <h2>Suivez-nous !</h2>
        <a class="facebook" href="https://facebook.com/moncahierequitation" alt="Facebook" title="Facebook" target = "_blank" ></a>

    </section>




<script type="text/javascript">
jQuery(document).ready(function(){
    app.landing()
    var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame ||
    function(callback) {
        window.setTimeout(callback, 1000 / 60);
    };
    window.requestAnimationFrame = requestAnimationFrame;

})





var flakes = [],
    canvas = document.getElementById("canvas"),
    ctx = canvas.getContext("2d"),
    flakeCount = 100,
    mX = -100,
    mY = -100

    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

function snow() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    for (var i = 0; i < flakeCount; i++) {
        var flake = flakes[i],
            x = mX,
            y = mY,
            minDist = 150,
            x2 = flake.x,
            y2 = flake.y;

        var dist = Math.sqrt((x2 - x) * (x2 - x) + (y2 - y) * (y2 - y)),
            dx = x2 - x,
            dy = y2 - y;

        if (dist < minDist) {
            var force = minDist / (dist * dist),
                xcomp = (x - x2) / dist,
                ycomp = (y - y2) / dist,
                deltaV = force / 2;

            flake.velX -= deltaV * xcomp;
            flake.velY -= deltaV * ycomp;

        } else {
            flake.velX *= .98;
            if (flake.velY <= flake.speed) {
                flake.velY = flake.speed
            }
            flake.velX += Math.cos(flake.step += .05) * flake.stepSize;
        }

        ctx.fillStyle = "rgba(255,255,255," + flake.opacity + ")";
        flake.y += flake.velY;
        flake.x += flake.velX;
            
        if (flake.y >= canvas.height || flake.y <= 0) {
            reset(flake);
        }


        if (flake.x >= canvas.width || flake.x <= 0) {
            reset(flake);
        }

        ctx.beginPath();
        ctx.arc(flake.x, flake.y, 3, 0, Math.PI * 2);
        ctx.fill();
    }
    requestAnimationFrame(snow);
};

function reset(flake) {
    flake.x = Math.floor(Math.random() * canvas.width);
    flake.y = 0;
    flake.size = (Math.random() * 3) + 2;
    flake.speed = (Math.random() * 1) + 0.5;
    flake.velY = flake.speed;
    flake.velX = 0;
    flake.opacity = (Math.random() * 0.5) + 0.1;
}

function init() {
    for (var i = 0; i < flakeCount; i++) {
        var x = Math.floor(Math.random() * canvas.width),
            y = Math.floor(Math.random() * canvas.height),
            size = 3,
            speed = (Math.random() * 0.5) + 0.5,
            opacity = 1/Math.floor((Math.random() * 3)) - 0.2;

        flakes.push({
            speed: speed,
            velY: speed,
            velX: 0,
            x: x,
            y: y,
            size: size,
            stepSize: (Math.random()) / 100,
            step: 0,
            opacity: opacity
        });
    }

    snow();
};

var canvas = document.getElementById('canvas');
var bg_sky = jQuery('#bg-sky').height()
canvas.height = bg_sky
console.log(bg_sky)



init();

</script>
<?php get_footer('equit'); ?>
<!-- LANDING PAGE http://blog.viviansarazin.com/landing-page-checklist/ -->

<?php 
/**
 *Template Name: Dance with Him
 */

function asset($name){
    echo get_template_directory_uri().'/images/'.$name;
}
$subtitle = get_post_custom_values('subtitle', get_the_ID())[0];


get_header(); ?>


<section id="section-header" class="bg-grass"> 
    <div class="container">
        <div class="row">
            <div class="col-6 vertical-container">
                 <div class="box">
                    <img src="<?php asset('book-cover-equit.png')?>">
                </div>
            </div>
            <div class="col-6 ">
                    <h2><?php  echo $subtitle; ?></h2>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_content() ?>
                    <?php endwhile; // end of the loop. ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="section-preview" class="bg-white">
    <div class="container">
        <h2>Feuilletez un extrait :</h2>
        <!-- <iframe style="margin: 0 auto;" src="//v.calameo.com/?bkcode=00517334145f71a2ff041&amp;mode=mini" width="1080" height="675" frameborder="0" scrolling="no" allowfullscreen="allowfullscreen"></iframe> -->
        
        <iframe src="//v.calameo.com/?bkcode=0051733419284511fa3c2&mode=mini&disablemousewheel=true" width="1080" height="675" frameborder="0" scrolling="no" allowtransparency allowfullscreen ></iframe>

        <a class="button" href="#section-header">Le cahier est-il disponible dans mon club ?</a>
    </div>
</section>


<?php get_footer(); ?>

<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); 

$exercice_type = get_post_custom_values('exercice_type', get_the_ID())[0];
$youtube_id = get_post_custom_values('youtube_id', get_the_ID())[0];

$fb_video_id = get_post_custom_values('fb_video_id', get_the_ID())[0];

$corrige_url = get_post_custom_values('corrige_url', get_the_ID())[0];

$post_type = get_post_type()

?>

<?php while ( have_posts() ) : the_post(); ?>

<article>
    <header>
    	<?php the_title( '<h2>', '</h2>' ); ?>
    	<?php if ($exercice_type) {
            echo '<h3>' . $exercice_type . '</h3>' ;
        }elseif ($post_type == "corriges") {
            echo '<h2>Corrigés</h2>' ;
            if(function_exists('the_ratings')) { 
                echo '<div class="rating">As-tu aimé cette séance ? ';
                the_ratings(); 
                echo '</div>';
            } 

        }
        ?>
    </header>
        


    <div class="container">
        <div id="content">
            <?php the_content(); ?>
        </div>
        <?php if($youtube_id != "") { ?>
            <div id="video">
            <iframe  width="853" height="480" src="https://www.youtube.com/embed/<?php echo $youtube_id ?>?autoplay=1" frameborder="0" allowfullscreen ></iframe>
            <?php if(function_exists('the_ratings')) { 
                echo '<div class="rating">As-tu aimé cette vidéo ? ';
                the_ratings(); 
                echo '</div>';
            } ?> 
            </div>
        <?php } ?>
        <?php if($fb_video_id != "") { ?>
            <div id="video">
                <iframe style="border: none; overflow: hidden;" src="https://www.facebook.com/plugins/video.php?href=<?php echo $fb_video_id ?>&amp;show_text=0&amp;width=560" width="560" height="315" frameborder="0" scrolling="no" allowfullscreen="allowfullscreen"><span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_start">﻿</span></iframe>
            <?php if(function_exists('the_ratings')) { 
                echo '<div class="rating">As-tu aimé cette vidéo ? ';
                the_ratings(); 
                echo '</div>';
            } ?> 
            </div>
        <?php } ?>
        <br>
        <?php if ($corrige_url) {
            echo '<a href="/corriges/'. $corrige_url .'" class="button">Voir le corrigé</a>' ;
        }?>

    </div>


</article>
<?php endwhile;?>

<?php get_footer(); ?>

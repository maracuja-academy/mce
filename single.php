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
$post_type = get_post_type()

?>

<?php while ( have_posts() ) : the_post(); ?>

<article>
    <header>
    	<?php the_title( '<h1>', '</h1>' ); ?>
    	<?php if ($exercice_type) {
            echo '<h2>' . $exercice_type . '</h2>' ;
        }elseif ($post_type == "corriges") {
            echo '<h2>Corrigés</h2>' ;
        }
        ?>
    </header>
        


    <div class="container">
        <div id="content">
                    <?php the_content(); ?>
        </div>
        <?php if($youtube_id != "") { ?>
            <iframe id="video" src="https://www.youtube.com/embed/<?php echo $youtube_id ?>" frameborder="0" allowfullscreen></iframe>
        <?php } ?>
    </div>


</article>
<?php endwhile;?>

<?php get_footer(); ?>

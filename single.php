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


?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php the_title( '<h1>', '</h1>' ); ?>
	<?php echo ($exercice_type) ? '<h2>' . $exercice_type . '</h2>' : ''; ?> 

    <div class="container">
        <div id="content">
                    <?php the_content(); ?>
        </div>
        <?php if($youtube_id != "") { ?>
            <iframe id="video" src="https://www.youtube.com/embed/<?php echo $youtube_id ?>" frameborder="0" allowfullscreen></iframe>
        <?php } ?>
    </div>



<?php endwhile;?>

<?php get_footer(); ?>

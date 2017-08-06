<!-- LANDING PAGE http://blog.viviansarazin.com/landing-page-checklist/ -->
<?php
get_header(); ?>

	

<?php
// Start the loop.
while ( have_posts() ) : the_post();
?>

<div class="container">
    <div id="content">
        <?php the_content(); ?>

    </div>
</div>

<?php // End the loop.
endwhile;
?>


<?php get_footer(); ?>

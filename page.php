<?php get_header(); ?>

	

<?php
// Start the loop.
$title = get_post_custom_values('page_title', get_the_ID())[0];
$bg = get_post_custom_values('page_bg', get_the_ID())[0];

while ( have_posts() ) : the_post();
?>
<!-- <input type="text" name="country" id="autocomplete"/> -->

<section class="<?php echo $bg ?> ">
	<div class="container " >
	    <div id="content">
	    	<h2><?php echo $title ?></h2>

	        <?php the_content(); ?>
	    </div>
	</div>
</section>


<?php // End the loop.
endwhile;
?>


<?php get_footer(); ?>

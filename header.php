<?php
/**
 *
 * @package Maracuja
 */
?><!DOCTYPE html>

<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title>Mon cahier d'entrainement</title>
	<?php wp_head();?>
</head>
<body <?php body_class(); ?>>

<header>
	<div id="logo">
		<p style="background-color:<?php echo get_theme_mod('your_theme_activity_color'); ?>">
			<?php echo get_theme_mod('your_theme_activity'); ?>
		</p>
	</div>
</header>
<pre>
<?php 
// print_r(get_post_custom( get_the_ID()))
// print_r(get_post_custom_values('exercice_type', get_the_ID()))

?>
</pre>
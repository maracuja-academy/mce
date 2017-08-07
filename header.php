<?php
/**
 *
 * @package Maracuja
 */
?><!DOCTYPE html>

<?php
	$act_id = get_theme_mod('your_theme_activity_id');
	$asset_dir = get_template_directory_uri().'/images/';
?>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="icon" type="image/png" href="<?php echo $asset_dir.$act_id.'-16.png' ?>" sizes="16x16">  
<link rel="icon" type="image/png" href="<?php echo $asset_dir.$act_id.'-32.png' ?>" sizes="32x32">  
<link rel="icon" type="image/png" href="<?php echo $asset_dir.$act_id.'-96.png' ?>" sizes="96x96">  
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $asset_dir.$act_id.'-180.png' ?>">  
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $asset_dir.$act_id.'-152.png' ?>">  
<link rel="apple-touch-icon" sizes="167x167" href="<?php echo $asset_dir.$act_id.'-167.png' ?>">  
	<?php wp_head();?>
</head>
<body <?php body_class('bg_'.$act_id ); ?> >

<header id="header">
	<div id="logo">
		<p class="<?php echo 'bg_'.$act_id ?>">
			<?php echo get_theme_mod('your_theme_activity'); ?>
		</p>
	</div>
</header>


<main>
	<!-- <pre> -->
<?php 
// print_r(get_post_custom( get_the_ID()))
// print_r(get_post_custom_values('exercice_type', get_the_ID()))

?>
<!-- </pre> -->
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
<html <?php language_attributes(); ?>>
<head>
    <title>
        <?php 

        if (!(is_404()) && (is_single()) || (is_page())) { 
            $title = get_the_title('');
            if($title) {
                echo $title . ' - '; 
            }

        } elseif (is_404()) {

            echo 'Not Found - '; 

        }
        bloginfo('name'); 

        ?>
    </title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    
    <meta property="og:url" content="<?php echo get_permalink() ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Le premier cahier de révisions personnalisé par votre centre équestre !" />
    <meta property="og:description" content="Mon cahier d’entrainement est l’outil éducatif pour votre centre équestre.
    Grâce à leur passion de l’équitation et du club, engagez vos jeunes cavaliers dans des révisions sportives et scolaires en prenant du plaisir ! " />
    <meta property="og:image" content="https://s3.eu-central-1.amazonaws.com/moncahier/mon-cahier-d-equitation.png" />
    <meta property="fb:app_id" content="1681824845170669">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="icon" type="image/png" href="<?php echo $asset_dir.$act_id.'-16.png' ?>" sizes="16x16">  
    <link rel="icon" type="image/png" href="<?php echo $asset_dir.$act_id.'-32.png' ?>" sizes="32x32">  
    <link rel="icon" type="image/png" href="<?php echo $asset_dir.$act_id.'-96.png' ?>" sizes="96x96">  
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $asset_dir.$act_id.'-180.png' ?>">  
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $asset_dir.$act_id.'-152.png' ?>">  
    <link rel="apple-touch-icon" sizes="167x167" href="<?php echo $asset_dir.$act_id.'-167.png' ?>">  
    <?php wp_head();?>
</head>
<body <?php body_class('style-'.$act_id ); ?> >

<header id="header">
	<a href="/" id="logo">
		<p>
			<?php echo get_theme_mod('your_theme_activity'); ?>
		</p>
	</a>
</header>


<main>
	<!-- <pre> -->
<?php 
// print_r(get_post_custom( get_the_ID()))
// print_r(get_post_custom_values('exercice_type', get_the_ID()))

?>
<!-- </pre> -->
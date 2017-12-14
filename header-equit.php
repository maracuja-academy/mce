<?php
/**
 *
 * @package Maracuja
 */
?><!DOCTYPE html>

<?php
	$act_id = get_theme_mod('your_theme_activity_id');
	$asset_dir = get_template_directory_uri().'/images/';
    $activity = get_theme_mod('your_theme_activity');
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
    <meta property="og:type" content="product" />
    <meta property="og:title" content="<?php echo get_theme_mod('opengraph_title'); ?>" />
    <meta property="og:description" content="<?php echo get_theme_mod('opengraph_description'); ?>" />
    <meta property="og:image" content="<?php echo get_theme_mod('opengraph_image'); ?>" />
    <meta property="fb:app_id" content="<?php echo get_theme_mod('fb_app_id'); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="icon" type="image/png" href="<?php echo $asset_dir.$act_id.'/16.png' ?>" sizes="16x16">  
    <link rel="icon" type="image/png" href="<?php echo $asset_dir.$act_id.'/32.png' ?>" sizes="32x32">  
    <link rel="icon" type="image/png" href="<?php echo $asset_dir.$act_id.'/96.png' ?>" sizes="96x96">  
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $asset_dir.$act_id.'/180.png' ?>">  
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $asset_dir.$act_id.'/152.png' ?>">  
    <link rel="apple-touch-icon" sizes="167x167" href="<?php echo $asset_dir.$act_id.'/167.png' ?>">  
    <?php wp_head();?>
</head>
<body <?php body_class('style-'.$act_id ); ?> >

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.9&appId=<?php echo get_theme_mod('fb_app_id'); ?>";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<main id="equitation-landing">

    <header>
        
        <p class="services"> Livraison en 4 jours ouvrés • Paiements sécurisés • Satisfait ou remboursé</p>
        <a href="<?php echo site_url() ?>" class="logo"></a>
    </header>
	<!-- <pre> -->
<?php 
// print_r(get_post_custom( get_the_ID()))
// print_r(get_post_custom_values('exercice_type', get_the_ID()))

?>
<!-- </pre> -->

<?php
/*
 * Template principal pour l'affichage générique des pages du site
 *
 * @Thème_pour WordPress
 * @Auteur jimmy CUISINIER alias Aklain52
 * @Version larumeurdaklain 0.1
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<canvas id="matrix">Votre navigateur ne supporte pas la balise HTML5 "canvas". Merci de le mettre à jour.</canvas>
<head>
    <title>
        <?php bloginfo( 'name' );
        //ajout de la description du site
        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";?>
    </title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <!-- Import Google font 'Iceland' -->
    <link href="https://fonts.googleapis.com/css?family=Iceland|Press+Start+2P" rel="stylesheet">

    <?php wp_head(); ?>
    <?php wp_footer(); ?>
	
	<?php if (is_user_logged_in()) { ?>
		<style type="text/css">
			body {
				margin-top: 18px;
			}
			
			@media screen and (max-width:800px) {
				nav, body {
					margin-top: 46px;
				}
			}
			
		</style>
	<?php } ?>
	
	<script src="https://use.fontawesome.com/588a1a0084.js"></script>

</head>
<body>
	<div id="404">
		<p>VOUS NE SORTIREZ PAS DE LA MATRICE!!!</p>
	</div>
</body>

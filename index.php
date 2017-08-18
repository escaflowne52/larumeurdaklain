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
</head>
    <body>
        <nav class="sidebar">
            <?php get_sidebar(); ?> <!-- appel de la barre latérale -->
        </nav>
        <div ID="contenu">
            <header>
                <?php get_header(); ?> <!-- appel du header (entête) -->
            </header>

            <article>

                <?php if ( have_posts() ) : ?>
                <!-- Début de boucle -->
                <?php while(have_posts()) : the_post(); ?>
                <!-- Récupération ID de catégorie pour gestion CSS -->
                <?php $categorie_ID= categorie_article(get_the_category()); ?>

                <div class="articles <?php echo neon_boite($categorie_ID); ?>">

                    <div class="entete_article" <?php get_template_part('/elements/background_image'); ?>>

                        <div class="titre_article">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="<?php echo neon_texte($categorie_ID)?>">
                            <?php echo remove_accents(get_the_title());
                            ?></a>
                        </div>

                        <?php get_template_part('/elements/postmetadata'); ?>

                    </div>

                    <?php get_template_part('/elements/article'); ?>

                    <?php get_template_part('/elements/commentaires'); ?>

                </div>

                <?php endwhile; ?><!-- fin de boucle -->
            </article>

            <?php
            get_template_part('/elements/article_nav_link');
            get_template_part('/elements/postnavlink');

            get_footer(); ?> <!-- appel du pied de page -->

        </div><!-- ID="contenu" -->
        <?php else : get_template_part('/elements/404');?>
        <?php endif; ?>
        <sidebar class="sidebar">
            <?php get_sidebar(2); ?> <!-- appel de la seconde barre latérale -->
        </sidebar>

    </body>
</html>

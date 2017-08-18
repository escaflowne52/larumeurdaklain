<?php
/**
 * Template du header
 *
 * @Thème_pour WordPress
 * @Auteur jimmy CUISINIER alias Aklain52
 * @Version larumeurdaklain 0.1
 */
?>
<a href="<?php bloginfo('url'); ?>"><div ID="entete-site">
        <span ID="titre-site" class="pulsation_bleu"><?php bloginfo('name'); ?></span>
        <span ID="description-site" class="pulsation_orange"><?php bloginfo('description'); ?></span>
</div></a>
<!-- zone de widget -->
<?php if ( is_active_sidebar( 'header-widget' ) ) : ?>
    <div id="header-widget-area" class="widget-area" role="complementary">
        <?php dynamic_sidebar( 'header-widget' ); ?>
    </div>
<?php endif; ?>
<!-- fin zone de widget -->

<div ID="menu_principal">
    <?php wp_page_menu(); ?>
</div>    
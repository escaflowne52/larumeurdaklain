<?php
// paramétrage par défaut des images
add_action( 'after_setup_theme', 'default_attachment_display_settings' );
function default_attachment_display_settings() {
    update_option( 'image_default_align', 'center' );
    update_option( 'image_default_link_type', 'none' );
    update_option( 'image_default_size', 'large' );
}

//correction des accents dans les fichiers téléchargés
add_filter('sanitize_file_name', 'sanitise_filename', 10);
function sanitise_filename ($filename) {
    return remove_accents( $filename );
}

// zone de widget
    
function aklain_widgets_init() {
	register_sidebar( array(
		'name'          => __('Widget de l\'entête (header)', 'Aklain'),
		'id'            => 'header-widget',
		'description'   => __( 'Ajoute une zone de widget', 'Aklain' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<span class="widget-title" style="display:none">',
		'after_title'   => '</span>',
	) );
    	register_sidebar( array(
		'name'          => __( 'Widget Area', 'twentyfifteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'aklain_widgets_init' );

// Effet d'écriture néon avec couleur selon la catégorie
function neon_texte($categorie) {
    $classe = "";
    
    switch($categorie) {
        case 1: //Non classé
            $classe="pulsation_jaune";
        break;
        case 2: //Guides et astuces
            $classe="pulsation_vert";
        break;
        case 3: //Sélection youtube
            $classe="pulsation_rouge";
        break;
        case 4: //Tests et avis
            $classe="pulsation_violet";
        break;
        case 5: //Dossiers
            $classe="pulsation_orange";
        break;
        case 6:
            $classe="pulsation_rose";
        break;
        default:
            $classe="pulsation_bleu";
    }
    return $classe;
}

// Boite néon avec couleur selon la catégorie
function neon_boite($categorie ){
    $classe = "boite_bleu";
    
    switch($categorie) {
        case 1: //Non classé
            $classe="boite_jaune";
        break;
        case 2: //Guides et astuces
            $classe="boite_vert";
        break;
        case 3: //Sélection youtube
            $classe="boite_rouge";
        break;
        case 4: //Tests et avis
            $classe="boite_violet";
        break;
        case 5:
            $classe="boite_orange";
        break;
        case 6:
            $classe="boite_rose";
        break;
        default:
            $classe="boite_bleu";
    }
    return $classe;
}

//Obtention de la catégorie d'un article
function categorie_article($tableau_categories) {
    $categorie_en_cours = $tableau_categories[0]->cat_name;
    $categorie_ID = get_cat_id($categorie_en_cours);
    return $categorie_ID;
}

//activation des dashicons
function wpc_dashicons() {
wp_enqueue_style('dashicons');
}

add_action('wp_enqueue_scripts', 'wpc_dashicons');


// remplacement du raccourcis (suite...)

function lire_la_suite() {
    return '<p><a class="more-link" href="' . get_permalink() . '" rel="nofollow">Lire la suite</a></p>';
}
add_filter( 'the_content_more_link', 'lire_la_suite' );

// Ajout des images à la une
add_theme_support('post-thumbnails');

//Theme Javascript
function theme_js(){
	wp_enqueue_script( 'matrix',
get_template_directory_uri() . '/js/matrix.js',
array() );
}
add_action( 'wp_footer', 'theme_js' );

?>
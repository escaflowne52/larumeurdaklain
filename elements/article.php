<div class="texte">
    <?php
    if (is_single()) {
		the_content(); 
    }
	elseif (is_home() or is_front_page()){
		the_content(lire_la_suite()); // introduction de l'article
	}
    else {
        the_excerpt(); // résumé
    }
    ?>
</div>
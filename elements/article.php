<div class="texte">
    <?php
    if (is_home()) {
        //the_excerpt(); // résumé
        the_content(lire_la_suite()); // introduction de l'article
    }
    else {
        the_content(); 
    }
    ?>
</div>
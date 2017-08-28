<form role="search" method="get" id="searchform" class="searchform" action="<?php bloginfo('home'); ?>/">
    <div id="recherche">
        <input value="<?php the_search_query(); ?>" type="text" placeholder="Rechercher..." name="s" id="champ_de_recherche" size="1" >
        <input type="submit" id="searchsubmit" value="&#xf002;" >
    </div> 
</form>
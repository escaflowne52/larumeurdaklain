<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
    <div>
        <input type="text" value="<?php the_search_query(); ?>" name="champ de recherche" id="champ_de_recherche" />
        <input type="submit" id="searchsubmit" value="&#xf002;" />
    </div> 
</form>
<form role="search" method="get" id="searchform" class="searchform" action="<?php bloginfo('home'); ?>/">
    <div>
        <input value="<?php the_search_query(); ?>" type="text" placeholder="Rechercher..." name="champ de recherche" id="champ_de_recherche" >
        <input type="submit" id="searchsubmit" value="&#xf002;" >
    </div> 
</form>

<!--<div>
<form role="search" method="get" id="searchform" class="searchform" action="http://localhost/wordpress/">
	<div>
		<label class="screen-reader-text" for="s">Rechercher&nbsp;:</label>
		<input value="" name="s" id="s" type="text">
		<input id="searchsubmit" value="Rechercher" type="submit">
	</div>
</form>
</div>-->
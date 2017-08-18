<footer>
    <div class="colonne">
        <ul>
            <li><h2>Abonnez-vous au blog !</h2>
                <ul>
                    <li><a href="<?php bloginfo('rss2_url'); ?>" title="Flux RSS des articles">Flux RSS des articles</a></li>
                    <li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="Flux RSS des commentaires">Flux RSS des commentaires</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="colonne">
        <p> Copyright &#169; <?php print(date(Y)); ?> <?php bloginfo('name'); ?> <br />
        Blog propulsé par <a href="http://wordpress.org/">WordPress</a> et con&ccedil;u par <a href="http://larumeurdaklain.hopto.org">Aklain52</a> <br />
        <a href="mailto:wolverine52@free.fr">Contacter le développeur</a></p>
        <p><?php echo get_num_queries(); ?> requêtes. <?php timer_stop(1); ?> secondes. </p>
    </div>
</footer>
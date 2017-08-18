<?php
if (is_home() or is_single()) {
    ?>
<div class="postmetadata">
    <p>
      <span class="date"><?php the_time('j F Y') ?> | <?php the_category(', ') ?></span>
       |
       <span class="auteur"> <?php the_author() ?></span>
        |
        <span class="commentaire"> <?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?></span>
         <?php edit_post_link('Modifier', '&#124; ', '','','commentaire'); ?>
    </p>
</div>
<?php
}
?>

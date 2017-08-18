<?php
if (is_single()) {
?>
    style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');min-height:500px;background-size: contain;background-repeat: no-repeat;"
<?php
    }
elseif (is_home()){
?>
    style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');min-height:300px;background-size: cover;"
<?php
}
else {
?>
 style="min-height: 20px;"
<?php
    }
?>
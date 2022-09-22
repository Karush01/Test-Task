<?php

/**
 * /*
 * Template Name: Standart  template*/


get_header();

global $post;

$page_ID = $post->ID;

?>


<div class="row">
    <div class="col-md-8">
        <?php the_content()?>
    </div>
</div>

<?php get_footer(); ?>


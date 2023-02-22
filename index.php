<?php
/**
 * Single Page template
 */
get_header();
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php 
        while( have_posts(  )) :
            the_post();
           the_title();
           the_content();
           //get_template_part( 'template-parts/post/content' );
    endwhile;
        ?>
</div>
<?php 
/** 
 * Template part for displaying posts
 */
get_header():
?>
<article id="post-<?php the_ID(  ); ?>">
    <header class="entry-header">
    <?php
    if(is_singular(  )):
        the_title( '<h1 class-entry-title>', '</h1>' );
    else:
    the_title( '<h2 class=entry-title><a href="'.esc_url(get_permalink()).'">', '</a></h2>');
    ?>
    </header>

<php?
if ( is_home () || is_archive() ):

?>

    <?php 
    if( has_post_thumbnail( )) :
        the_post_thumbnail( 'large' ); //medium, small, full, large
    endif;
    ?>

    <div class="entry-content">
        <?php the_excerpt(  ); ?>
    </div>
<?php elseif( is_single() ): ?>
<div class="entry-content">
    <php? the_content(); 
    wp_link_pages(array ('before' => '<div class="page-links">' .esc.html_( 
        'pages:',
        'wp-default-template'
        ),
        'after' => '</div>'
        ));
    ?>
    </div>
    <?php endif; ?>

<footer class="entry-footer default-max-width">

</footer>

</article>


<?php the_ID();?>
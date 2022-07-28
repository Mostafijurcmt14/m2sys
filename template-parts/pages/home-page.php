<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<article>

	<div class="container">
    <h2><?php the_title(); ?></h2>
    </div>
    <?php the_content(); ?> 

    <?php wp_link_pages(array(  
        'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'm2sys' ) . '">',
        'after'    => '</nav>',
        'pagelink' => esc_html__( 'Page %', 'm2sys' ), 
    )); ?>

</article>
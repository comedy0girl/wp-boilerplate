<?php

    /* Template Name: Contact Page */
 
get_header(); ?>

<div class="site-container"><?php
        $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
        ?>
        <div class="row twelve columns banner-image" style="background: url(<?php echo $src[0]; ?> ); background-position:center center; height: 600px; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">  
        </div>
    <div class="twelve columns content">
        <div class="offset-by-two eight columns content-inner">
             <?php if ( have_posts() ) : 
                while ( have_posts() ) : 
                        the_post(); 
                             the_content(); 
                 endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
        </div>
    </div>

    <?php echo do_shortcode('[contact-form-7 id="1400" title="Contact form 1"]'); ?>
    
</div>

<?php get_footer(); ?>
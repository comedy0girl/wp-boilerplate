<?php get_header(); ?>


<div class="twelve columns site-container">

    <?php while (have_posts()) : the_post(); ?>

        <article <?php post_class(); ?>>

            <header class="post__header" role="heading">
                <h3 class="post__title"><?php the_title(); ?></h3>
            </header>

            <?php the_content(); ?>

            <footer class="post__footer">
                <p class="post__date"><time><?php echo human_time_diff(strtotime($post->post_date)) . ' ' . __('ago'); ?></time></p>
                <p class="post__comments"><?php comments_popup_link(__('No comments yet'), __('1 comment'), __('% comments')); ?></p>
            </footer>

        </article>

    <?php endwhile; ?>

</div>


<?php get_footer(); ?>
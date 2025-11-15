<!-- THIS FILE DISPLAYS THE POSTS -->

<?php get_header(); ?>


<div class="post_container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h5><?php the_category(' | '); ?></h5>
        <div class="single_container">
            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
            <div class="post_navigation">
                <span><?php previous_post_link('< %link'); ?></span>
                <span><?php next_post_link('%link >'); ?></span>
            </div>
        </div>

        <div>
            <?php comments_template('', true); ?>
        </div>
    <?php endwhile; endif; ?>
</div>



<?php get_footer(); ?>
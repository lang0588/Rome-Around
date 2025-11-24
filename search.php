<?php get_header(); ?>

<div class="search-results">
    <h1>Search Results for: "<?php echo get_search_query(); ?>"</h1>

    <?php if ( have_posts() ) : ?>
        <ul class="results-list">
            <?php while ( have_posts() ) : the_post(); ?>
                <li class="search-item">
                    <h2 class="post-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <div class="post-meta">
                        <?php echo get_the_date(); ?> | <?php the_author(); ?>
                    </div>
                    <div class="post-excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                </li>
            <?php endwhile; ?>
        </ul>

        <div class="pagination">
            <?php
            echo paginate_links(array(
                'prev_text' => '« Previous',
                'next_text' => 'Next »',
            ));
            ?>
        </div>

    <?php else : ?>
        <p>No results found. Try a different search.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>

<?php get_header(); ?>

<!-- Search Results Container -->
<div class="search-results">

    <!-- Search Query Heading -->
    <h1>Search Results for: "<?php echo get_search_query(); ?>"</h1>

    <!-- Check if there are posts -->
    <?php if ( have_posts() ) : ?>

        <!-- Start of Search Results List -->
        <ul class="results-list">

            <!-- Loop through posts -->
            <?php while ( have_posts() ) : the_post(); ?>

                <!-- Single Search Item -->
                <li class="search-item">

                    <!-- Post Title with Link -->
                    <h2 class="post-title">
                        <a href="<?php echo get_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>

                    <!-- Post Meta (Published Date) -->
                    <p class="post-meta">
                        Published on <?php the_time('F j, Y'); ?>
                    </p>

                    <!-- Post Excerpt -->
                    <p class="post-excerpt">
                        <?php the_excerpt(); ?>
                    </p>

                </li>
                <!-- End of Single Search Item -->

            <?php endwhile; ?>
            <!-- End of Loop -->

        </ul>
        <!-- End of Search Results List -->

        <!-- Pagination -->
        <div class="pagination">
            <?php
            echo paginate_links(array(
                'total' => $wp_query->max_num_pages
            ));
            ?>
        </div>
        <!-- End of Pagination -->

    <?php else : ?>
        <!-- No Results Found -->
        <p>No results found. Try searching again:</p>
        <?php get_search_form(); ?>
        <!-- End of No Results Section -->
    <?php endif; ?>

</div>
<!-- End of Search Results Container -->

<?php get_footer(); ?>
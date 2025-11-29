<?php get_header();?>

<div id="primary" class="content-area not-found-container">
    <div id="content" class="site-content" role="main">

        <header class="page-header">
            <h1 class="page-title"><?php _e( 'A whole bunch of nothing'); ?></h1>
        </header>

        <div class="page-wrapper">
            <div class="page-content">
                <img 
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/error-dino.jpg" alt="404 dinosaur" class="error-dino"
                />
                <p><?php _e( 'It looks like nothing was found at this location, go back home.'); ?></p>


<a href="<?php echo home_url('/'); ?>" class="return-home-btn">Return Home</a>
            </div>
        </div>

    </div>
</div>

<?php get_footer(); ?>


<!-- Allowing footer widget to diplay -->
<?php if ( is_active_sidebar( 'footer-widget' ) ) : ?>
        <div class="custom-footer-widgets">
            <?php dynamic_sidebar( 'footer-widget' ); ?>
        </div>
    <?php endif; ?>

<footer class="footer">
    <div class="container">

        <div class="row justify-content-center text-center">
            <!-- Footer Column 1 -->
            <div class="col-md-4 mb-3">
                <h4 class="footer-heading">Menu 1</h4>
                <?php
                    wp_nav_menu([
                        'theme_location'=> 'footer_nav_1',
                        'menu_class' => 'footer-menu',
                        'container' => 'nav'
                    ]);
                ?>
            </div>

            <!-- Footer Column 2 -->
            <div class="col-md-4 mb-3">
                <h4 class="footer-heading">Menu 2</h4>
                <?php
                    wp_nav_menu([
                        'theme_location'=> 'footer_nav_2',
                        'menu_class' => 'footer-menu',
                        'container' => 'nav'
                    ]);
                ?>
            </div>

            <!-- Footer Column 3 -->
            <div class="col-md-4 mb-3">
                <h4 class="footer-heading">Menu 3</h4>
                <?php
                    wp_nav_menu([
                        'theme_location'=> 'footer_nav_3',
                        'menu_class' => 'footer-menu',
                        'container' => 'nav',
    ]);
                ?>
            </div>
        </div>
        <?php get_template_part('template-parts/social-links'); ?>


        <div class="footer-divider"></div>
        <p>&copy; <?php echo date('Y'); ?> Rome Travel Planner. All rights reserved.</p>
         
    </div>

</footer>
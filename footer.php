<footer class="footer">
    <div class="container">
        <?php get_sidebar(); ?>

        <div class="row justify-content-center text-center">
            <!-- Footer Column 1 -->
            <div class="col-md-4 mb-3">
                <h4 class="footer-heading">Menu 1</h4>
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu-1',
                        'container' => false,
                        'menu_class' => 'footer-links',
                        'fallback_cb' => false
                    ));
                ?>
            </div>

            <!-- Footer Column 2 -->
            <div class="col-md-4 mb-3">
                <h4 class="footer-heading">Menu 2</h4>
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu-2',
                        'container' => false,
                        'menu_class' => 'footer-links',
                        'fallback_cb' => false
                    ));
                ?>
            </div>

            <!-- Footer Column 3 -->
            <div class="col-md-4 mb-3">
                <h4 class="footer-heading">Menu 3</h4>
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu-3',
                        'container' => false,
                        'menu_class' => 'footer-links',
                        'fallback_cb' => false
                    ));
                ?>
            </div>
        </div>
        <?php get_template_part('template-parts/social-links'); ?>


        <div class="footer-divider"></div>
        <p>&copy; <?php echo date('Y'); ?> Rome Travel Planner. All rights reserved.</p>
         
    </div>

    <!-- MENU -->
    <div>
        <?php
        //1
        wp_nav_menu(array(
            'theme_location'=> 'footer_nav_1',
            'menu_class' => 'footer-menu',
            'container' => 'nav'
        ));
        //2
        wp_nav_menu(array(
            'theme_location'=> 'footer_nav_2',
            'menu_class' => 'footer-menu',
            'container' => 'nav'
        ));
        //3
        wp_nav_menu(array(
            'theme_location'=> 'footer_nav_3',
            'menu_class' => 'footer-menu',
        ));
        ?>

</footer>
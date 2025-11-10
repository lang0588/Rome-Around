
<?php wp_footer();?>

<?php
// Define link arrays for each column
$footer_links_about = [
    ['title' => 'Home', 'url' => home_url()],
    ['title' => 'Attractions', 'url' => home_url('/attractions')],
    ['title' => 'Events', 'url' => home_url('/events')],
    ['title' => 'Hotels', 'url' => home_url('/hotels')]
];

$footer_links_quick = [
    ['title' => 'Rome Tours', 'url' => home_url('/tours')],
    ['title' => 'Travel Tips', 'url' => home_url('/tips')],
    ['title' => 'Blog', 'url' => home_url('/blog')],
    ['title' => 'FAQ', 'url' => home_url('/faq')]
];

$footer_links_contact = [
    ['title' => 'Contact Us', 'url' => home_url('/contact')],
    ['title' => 'Support', 'url' => home_url('/support')],
    ['title' => 'Privacy Policy', 'url' => home_url('/privacy')],
    ['title' => 'Terms & Conditions', 'url' => home_url('/terms')]
];
?>

<footer class="custom-footer py-5">
    <div class="container text-center text-md-left">
        <div class="row">

            <!-- About Links -->
            <div class="col-md-4 mb-4">
                <h5>About</h5>
                <ul class="list-unstyled">
                    <?php foreach($footer_links_about as $link): ?>
                        <li><a href="<?php echo esc_url($link['url']); ?>"><?php echo esc_html($link['title']); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Quick Links -->
            <div class="col-md-4 mb-4">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <?php foreach($footer_links_quick as $link): ?>
                        <li><a href="<?php echo esc_url($link['url']); ?>"><?php echo esc_html($link['title']); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Contact Links -->
            <div class="col-md-4 mb-4">
                <h5>Contact</h5>
                <ul class="list-unstyled">
                    <?php foreach($footer_links_contact as $link): ?>
                        <li><a href="<?php echo esc_url($link['url']); ?>"><?php echo esc_html($link['title']); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>

        <hr class="footer-divider">

        <div class="row">
            <div class="col-12 text-center">
                <p class="mb-0">&copy; <?php echo date('Y'); ?> Rome Travel Planner. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>




</body>
</html>
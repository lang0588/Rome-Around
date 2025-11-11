<!-- This is the events page -->

<?php

get_header();
?>

<!-- Events -->
<section class="events-grid container py-5">
    <h2 class="text-center mb-5">Upcoming Events in Rome</h2>
    <div class="row justify-content-center">

        <?php foreach(array(
            // Roman Forum Tour
            array(
                'name' => 'Roman Forum Guided Tour',
                'image' => 'assets/images/roman-tour.jpg',
                'description' => 'Explore the ancient ruins of the Roman Forum with an expert guide, uncovering the stories of emperors and senators who shaped the Eternal City.',
                'date' => 'November 18, 2025'
            ),
            // Colosseum Light Show
            array(
                'name' => 'Colosseum Night Light Show',
                'image' => 'assets/images/light-show.jpg',
                'description' => 'Experience the Colosseum illuminated at night during an unforgettable light and sound show that brings history to life.',
                'date' => 'November 25, 2025'
            ),
            // Piazza Navona Festival
            array(
                'name' => 'Piazza Navona Winter Festival',
                'image' => 'assets/images/fest.jpg',
                'description' => 'Celebrate the season at one of Rome’s most famous squares with food stalls, crafts, and live music.',
                'date' => 'December 10, 2025'
            ),
            // Vatican Christmas Concert
            array(
                'name' => 'Vatican Christmas Concert',
                'image' => 'assets/images/concert.jpeg',
                'description' => 'Enjoy classical and sacred music performed by world-renowned artists inside the Vatican’s grand halls.',
                'date' => 'December 22, 2025'
            ),
            // Trastevere Food Market
            array(
                'name' => 'Trastevere Food Market',
                'image' => 'assets/images/market.jpg',
                'description' => 'Taste authentic Roman street food and meet local chefs at the bustling Trastevere Market.',
                'date' => 'Every Saturday'
            )
        ) as $event_item) : ?>
            
            <!-- Bootstrap Card for Each Event -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 d-flex align-items-stretch">
                <div class="card h-100">
                    <img class="card-img-top" src="<?php echo get_theme_file_uri($event_item['image']); ?>" alt="<?php echo $event_item['name']; ?>">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?php echo $event_item['name']; ?></h5>
                        <p class="card-text small"><?php echo $event_item['description']; ?></p>
                        <p class="text-muted"><strong>Date:</strong> <?php echo $event_item['date']; ?></p>
                        <div class="mt-auto">
                            <a href="#" class="btn btn-primary btn-block">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</section>

<?php get_template_part('template-parts/section', 'map'); ?>

<?php get_footer(); ?>

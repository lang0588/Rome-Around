<!-- THIS IS THE HOTELS PAGE -->

<?php

get_header();


?>

<!-- site-header  -->
<header id="site-header">
    <div class="hero-banner" style="background-image: url('<?php echo get_theme_file_uri('assets/images/monastary.jpg'); ?>');">
        <div class="hero-content text-center text-white py-5">
            <h1>Our Hotels</h1>
            <p>Look at some of our most popular hotel options!!!</p>
        </div>
    </div>
</header>

<!-- Hotels -->
<section class="hotels-grid container py-5">
    <h2 class="text-center mb-5">Featured Hotels</h2>
    <div class="row justify-content-center">

        <?php foreach(array(
            array('name'=>'Hotel Sunrise','image'=>'assets/images/hotel1.jpg','description'=>'A luxurious escape with ocean views.','rating'=>5),
            array('name'=>'Mountain Retreat','image'=>'assets/images/hotel2.jpg','description'=>'Cozy stays in the heart of the mountains.','rating'=>4),
            array('name'=>'City Lights Hotel','image'=>'assets/images/hotel3.jpg','description'=>'Modern design right in downtown.','rating'=>4),
            array('name'=>'Seaside Inn','image'=>'assets/images/hotel4.jpg','description'=>'Relax by the beach with stunning views.','rating'=>5),
            array('name'=>'Forest Lodge','image'=>'assets/images/hotel5.jpg','description'=>'Immerse yourself in nature and comfort.','rating'=>4)
        ) as $hotel_item) : ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-4 d-flex align-items-stretch">
                <div class="card h-100">
                    <img class="card-img-top" src="<?php echo get_theme_file_uri($hotel_item['image']); ?>" alt="<?php echo $hotel_item['name']; ?>">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?php echo $hotel_item['name']; ?></h5>
                        <p class="card-text small"><?php echo $hotel_item['description']; ?></p>
                        <div class="mt-auto">
                            <p class="hotel-rating mb-2">
                                <?php for($i=1; $i<=5; $i++): ?>
                                    <?php echo ($i <= $hotel_item['rating']) ? '★' : '☆'; ?>
                                <?php endfor; ?>
                            </p>
                            <a href="#" class="btn btn-primary btn-block">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</section>

<?php get_footer(); ?>

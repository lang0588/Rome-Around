<!-- THIS IS THE HOTELS PAGE -->

<?php

get_header();


?>



<!-- Hotels -->
<section class="hotels-grid container py-5">
    <h2 class="text-center mb-5">Featured Hotels</h2>
    <div class="row justify-content-center">

        <?php foreach(array(
            // Hotel Fontana - Bootstrap Ccards
            array('name'=>'Hotel Fontana','image'=>'assets\images\hotel-fontana.jpg','description'=>'The building, hosting the Hotel Fontana, facing the world-famous Trevi Fountain, dates back to the XVII Century. The Rooftop Lounge serves as the breakfast room and as the hotel lounge throughout the day offering unique views of the historic Trevi Fountain while sipping a cocktail or over a tea.','rating'=>3.7),

             // Green Rooms Rome - Bootstrap Cards
            array('name'=>'Green Rooms Rome','image'=>'assets\images\green-rooms.jpg','description'=>'Modern design right in downtown.','rating'=>4.5),

            // Hotel Giobarti
            array('name'=>'Hotel Giobarti','image'=>'assets\images\hotel-gioberti.webp','description'=>'Hotel Gioberti is located on the namesake main road, 100 metres from Termini Railway Station and 300 metres from the Basilica of Santa Maria Maggiore. Enjoy comfortable rooms and a rich breakfast.
            The Hotel Gioberti is located in a restored 19th-Century building and is conveniently linked to the main tourist, shopping and business areas. Walk to the Termini Metro Station and bus stop, and the whole city and surroundings will be yours.
            All rooms at Hotel Gioberti are spacious, soundproofed, and elegantly furnished..','rating'=>4.4),
            

            // Donna Camilla
            array('name'=>'Donna Camilla','image'=>'assets\images\donna-camilla.jpg','description'=>'Relax by the beach with stunning views.','rating'=>5),

            // Domus Monami
            array('name'=>'Domus Monami','image'=>'assets\images\domus-monami-luxury-suites.jpg','description'=>'Immerse yourself in nature and comfort.','rating'=>4)
        ) as $hotel_item) : ?>
            
            <!-- card design garbage from bootstrap  -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-4 d-flex align-items-stretch">
                <div class="card h-100">
                    <img class="card-img-top" src="<?php echo get_theme_file_uri($hotel_item['image']); ?>" alt="<?php echo $hotel_item['name']; ?>">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?php echo $hotel_item['name']; ?></h5>
                        <p class="card-text small"><?php echo $hotel_item['description']; ?></p>
                        <div class="mt-auto">
                            <!-- Hotel Rating system -->
                            <p class="hotel-rating mb-2">
                                <!-- calculations for how many stars need to be displayed -->
                                 <!-- Dont ask me how i figured this out, this was during hour 14 of a sitting. I am so lost on what I have made at this point oml! -->
                                <?php for($i=1; $i<=5; $i++): ?>
                                    <?php echo ($i <= $hotel_item['rating']) ? '★' : '☆'; ?>
                                <?php endfor; ?>
                            </p>
                            <!-- Book now button -->
                            <a href="#" class="btn btn-primary btn-block">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</section>

<?php get_template_part('template-parts/section', 'map'); ?>

<?php get_footer(); ?>


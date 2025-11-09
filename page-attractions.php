<!-- This is the Attractions page -->
<!-- attractions: Colosseum, Sistine Chapel, Pantheon (delete this) -->


<?php

get_header();

?>

<section class="attractions-grid container py-5">
    <h2 class="text-center md-5">Attractions</h2>
    <div class="row justify-content-center">

    <?php foreach(array(
        //colosseum
        array('name'=>'Colosseum', 'image'=>'assets\images\colosseum.webp', 'description'=>'The Colosseum is an elliptical amphitheatre in the centre of the city of Rome, Italy, just east of the Roman Forum. It is the largest ancient amphitheatre ever built, and is the largest standing amphitheatre in the world.', 'ticket price'=>'$29.23 CAD'),

        //Sistine Chapel
        array('name'=>'Sistine Chapel', 'image'=>'assets\images\sistine_chapel.jpeg', 'description'=>'The Sistine Chapel is a chapel in the Apostolic Palace, the  residence of the pope in Vatican City. Originally known as the Cappella Magna, it takes its name from Pope Sixtus IV, who had it built between 1473 and 1481. Since that time, it has served as a place of both religious and functionary papal activity.', 'ticket price'=>'$32.50 CAD'),

        //Pantheon
        array('name'=>'Pantheon', 'image'=>'assets\images\Pantheon_church.jpeg', 'description'=>'The Pantheon is an ancient 2nd century Roman temple and, since AD 609, a Catholic church called the Basilica of St. Mary and the Martyrs in Rome, Italy. It is perhaps the most famous, and architecturally most influential, rotunda.', 'ticket price'=>'$8.12 CAD')
    ) as $attractions_item) : ?>

    <div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-4 d-flex align-items-stretch">
                <div class="card h-100">
                    <img class="card-img-top" src="<?php echo get_theme_file_uri($attractions_item['image']); ?>" alt="<?php echo $attractions_item['name']; ?>">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?php echo $attractions_item['name']; ?></h5>
                        <p class="card-text small"><?php echo $attractions_item['description']; ?></p>
                        <div class="mt-auto">


    </div>



</section>


<?php get_footer(); ?>
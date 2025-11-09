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
        array('name'=>'Colosseum', 'image'=>'assets\images\colosseum.webp', 'description'=>'The Colosseum is an elliptical amphitheatre in the centre of the city of Rome, Italy, just east of the Roman Forum. It is the largest ancient amphitheatre ever built, and is the largest standing amphitheatre in the world.', )
    ))

    ?>


    </div>



</section>


<?php get_footer(); ?>
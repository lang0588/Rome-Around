<?php get_header();?>

<section class="hero-section container py-5">
    <div>
        <h1>Welcome to Your Ultimate Rome Travel Guide</h1>
        <p>Step into the heart of Italy’s Eternal City — where ancient history, world-class cuisine, and vibrant street life meet. Whether you’re planning your first visit or returning for another taste of la dolce vita, our guide helps you explore Rome with confidence and curiosity.</p>
    </div>
</section>

    <section class="home-grid container">
        <div class="plan-section">
        <h2>Plan Your trip</h2>
        <p>We make it easy to plan your Roman adventure. Browse our curated recommendations, practical travel advice, and up-to-date event listings — everything you need to turn your trip into an unforgettable story.</p>
        </div>

<?php 
  foreach (array(
      array(
          'name'=>'Find Your Perfect Stay',
          'description'=>'Whether you’re looking for a luxury hotel near the Spanish Steps, a cozy guesthouse in Trastevere, or a budget-friendly spot close to the metro, our Hotels page helps you find the ideal place to rest after a day of adventure.'
      ),

      array(
          'name'=>'Explore Top Attractions',
          'description'=>'Marvel at ancient wonders like the Colosseum, Pantheon, and Roman Forum, or wander through world-famous museums and charming piazzas. Visit our Attractions page for guides, maps, and insider tips to make every moment count.'
      ),

      array(
          'name'=>'Join the City’s Vibrant Events',
          'description'=>'From outdoor concerts and art festivals to food markets and religious celebrations, Rome is alive year-round. Check out our Events page to see what’s happening during your visit and experience the city like a local.'
      )
  ) as $home_item) : 
  ?>

        <!-- bootstrap stuff -->
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-4 d-flex align-items-stretch">
      <div class="card h-100">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title"><?php echo esc_html($home_item['name']); ?></h5>
          <p class="card-text small flex-grow-1"><?php echo esc_html($home_item['description']); ?></p>

          <!-- view more button -->
           <a href="#" class="btn btn-primary btn-block">View More</a>
        </div> 
      </div> 
    </div> 

  <?php endforeach; ?>


    </section>
</section>



<?php get_footer();?>

<footer></footer>
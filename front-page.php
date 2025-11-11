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
    <div class="col-12 mb-4 d-flex align-items-stretch">
      <div class="card h-100">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title"><?php echo esc_html($home_item['name']); ?></h5>
          <p class="card-text small flex-grow-1"><?php echo esc_html($home_item['description']); ?></p>

          <!-- view more button -->
           <a href="#" class="btn btn-primary btn-block">Learn More</a>
        </div> 
      </div> 
    </div> 

  <?php endforeach; ?>


<h2>Testimonials</h2>
  <?php 
  foreach (array(
      array(
          'name'=>'A Local Touch',
          'description'=>'"This guide made exploring Rome so much easier! The attraction pages gave us great insider tips — like the best time to visit the Colosseum without the crowds. It felt like having a local friend show us around."— Sofia R., Spain',
          'image'=>'assets/images/sofia-colosseum.jpeg'
      ),

      array(
          'name'=>'Perfect for First-Time Visitors',
          'description'=>'"It was my first trip to Italy, and I didn’t know where to start. The hotel recommendations were spot on, and the events calendar helped us catch a street festival near the Pantheon. Absolutely unforgettable!"— James L., Canada',
          'image'=>'assets/images/james-fontana.jpeg'
      ),

      array(
          'name'=>'More Than Just a Guide',
          'description'=>'"This site turned our vacation into an adventure. We planned our days around the suggested itineraries and discovered hidden gems like Trastevere and Villa Borghese. I’ll be using it again next time I’m in Rome."— Elena D., United States',
          'image'=>'assets/images/elena-villa.jpeg'
      ),

      array(
          'name'=>'Made Planning Effortless',
          'description'=>'"I usually spend hours researching before a trip, but this guide had everything — hotels, must-see attractions, even current events. It made planning our Rome getaway completely stress-free!"— Marco T., Australia',
          'image'=>'assets/images/marco-pantheon.jpeg'
      )
  ) as $testimonials_item) : 
  ?>

        <!-- bootstrap stuff -->
  <div class="col-12 mb-4 d-flex align-items-stretch">
  <div class="card h-100 text-start p-3">
    <div class="card-body d-flex justify-content-between align-items-start gap-3">
      <div class="text-content">
        <h5 class="card-title mb-2"><?php echo esc_html($testimonials_item['name']); ?></h5>
        <p class="card-text small mb-0"><?php echo esc_html($testimonials_item['description']); ?></p>
      </div>
      <img
        class="testimonial-img img-fluid rounded"
        src="<?php echo get_theme_file_uri($testimonials_item['image']); ?>"
        alt="<?php echo esc_attr($testimonials_item['name']); ?>">
    </div>
  </div>
</div>

  <?php endforeach; ?>


  <!-- Video -->
<section class="video-section container my-5">
  <h2 class="mb-4 ">Experience Rome</h2>
  <div class="row">
    <div class="col-12 mb-4">
      <div class="card h-100 text-start p-3">
        <div class="card-body">
          <h5 class="card-title mb-3">Rome in a Time Lapse</h5>
          <p class="card-text small mb-4">
            Take a breathtaking journey through the Eternal City — from sunrise over the Colosseum to moonlight on the Tiber.
            This short film captures the rhythm, history, and heart of Rome in every frame.
          </p>

          <div class="ratio ratio-16x9">
            <iframe
              src="https://player.vimeo.com/video/73967228?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
              frameborder="0"
              allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
              referrerpolicy="strict-origin-when-cross-origin"
              title="Rome in a Time Lapse - la grande bellezza">
            </iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://player.vimeo.com/api/player.js"></script>
</section>

</section>



<?php get_footer();?>
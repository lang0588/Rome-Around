<!-- This is the Attractions page -->

<?php

get_header();

?>

<section class="attractions-grid container py-5">
  <h2 class="text-center mb-5">Popular Attractions</h2>
  <div class="row justify-content-center">

  <?php 
  foreach (array(
    //colosseum
      array(
          'name'=>'Colosseum',
          'image'=>'assets/images/colosseum.webp',
          'description'=>'The Colosseum is an elliptical amphitheatre in the centre of Rome, Italy. It is the largest ancient amphitheatre ever built.',
          'ticket_price'=>'$29.23 CAD'
      ),

      //Sistine
      array(
          'name'=>'Sistine Chapel',
          'image'=>'assets/images/sistine_chapel.jpeg',
          'description'=>'The Sistine Chapel is a chapel in the Apostolic Palace, the residence of the pope in Vatican City.',
          'ticket_price'=>'$32.50 CAD'
      ),

      //Pantheon
      array(
          'name'=>'Pantheon',
          'image'=>'assets/images/Pantheon_church.jpeg',
          'description'=>'The Pantheon is an ancient Roman temple and later a Catholic church in Rome, Italy.',
          'ticket_price'=>'$8.12 CAD'
      )
  ) as $attractions_item) : 
  ?>

        <!-- bootstrap stuff -->
    <div class="col-12 col-sm-6 col-md-4 col-lg-4 mb-4 d-flex align-items-stretch">
      <div class="card h-100">
        <img class="card-img-top" src="<?php echo esc_url(get_theme_file_uri($attractions_item['image'])); ?>" alt="<?php echo esc_attr($attractions_item['name']); ?>">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title"><?php echo esc_html($attractions_item['name']); ?></h5>
          <p class="card-text small flex-grow-1"><?php echo esc_html($attractions_item['description']); ?></p>
          <p class="mt-auto"><strong>Ticket Price:</strong> <?php echo esc_html($attractions_item['ticket_price']); ?></p>

          <!-- ticket button -->
          <a href="#" class="btn btn-primary btn-block">Buy ticket</a>
        </div> 
      </div> 
    </div> 

  <?php endforeach; ?>


  <!-- ____POST PHP____ -->
<div class="main_post_container">
  <?php 
  $args = [
    'post-type'=>'post',
    'post-per-page' => -1
  ];

$query = new WP_Query($args);
//WP Look
if($query->have_posts()): 
  while($query->have_posts()): $query->the_post();
  ?>

  <div class="post_card">
    <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
    <h5><?php the_author();?></h5>
    <p><?php the_excerpt();?></p>
  </div>

  <?php 
    endwhile;
else:
?>
<p>No posts to show!</p>
<?php endif;?>
</div>


  </div> 
</section>


<?php get_template_part('template-parts/section', 'map'); ?>

<?php get_footer(); ?>
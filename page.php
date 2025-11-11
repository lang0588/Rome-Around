<?php get_header();?>
<div class="page-content"> 
<section class="page-title"><?php the_title();?></section>
<?php the_content();?> 
</div>
<?php get_template_part('template-parts/user', 'contatc'); //get-template-parts('foldername/slug', 'name')
?>

<?php get_header(); ?>

<div class="page-content container my-5">
    <section class="page-title text-center mb-4">
        <h1><?php the_title(); ?></h1>
    </section>

    <div class="page-body mb-5">
        <?php the_content(); ?>
    </div>

    <?php get_template_part('template-parts/user', 'contact'); ?>

    <?php
    // Google Map (Rome)
    echo '<div class="map-container my-5">';
    echo '<iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d190028.35442690636!2d12.37119217293777!3d41.91020879175258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f6196f9928ebb%3A0xb90f770693656e38!2sRome%2C%20Metropolitan%20City%20of%20Rome%20Capital%2C%20Italy!5e0!3m2!1sen!2sca!4v1762786091267!5m2!1sen!2sca"
            allowfullscreen
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>';
    echo '</div>';
    ?>
</div>

<?php get_footer(); ?>

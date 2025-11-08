<?php get_header();?>
<div class="page-content"> 
<section class="page-title"><?php the_title();?></section>
<?php the_content();?> 
</div>
<?php get_template_part('template-parts/user', 'contatc'); //get-template-parts('foldername/slug', 'name')
?>

<!-- colosseum image -->
<img src="<?php echo get_theme_file_uri('assets/images/colosseum.webp'); ?>" alt="Example">

<!-- landscape image -->
<img src="<?php echo get_theme_file_uri('assets/images/landscape.webp'); ?>" alt="Example">

<!-- statue image -->
<img src="<?php echo get_theme_file_uri('assets/images/statue.webp'); ?>" alt="Example">

<?php get_footer();?>
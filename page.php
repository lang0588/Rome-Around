<?php get_header();?>
<div class="page-content"> 
<section class="page-title"><?php the_title();?></section>
<?php the_content();?> 
</div>
<?php get_template_part('template-parts/user', 'contatc'); //get-template-parts('foldername/slug', 'name')
?>

<?php get_footer(); ?>
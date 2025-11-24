<?php if(is_active_sidebar('my_sidebar')):?>
<?php dynamic_sidebar('my_sidebar'); ?>
<?php else: ?>
   
    <!-- Code goes here -->
<h3>This is a sidebar</h3>
<p>this is where my widgets should appear!</p>


<?php endif; ?>
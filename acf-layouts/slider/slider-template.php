</div> <!-- End of container -->

<?php if( have_rows('slide') ): ?>
  <?php while( have_rows('slide') ): the_row();   ?>

    <!-- Outputs the slider image -->
    <img src="<?= get_sub_field('slide_image') ?>" alt="">

<?php endwhile; endif?>

<!-- Start of container -->
<div class="container">

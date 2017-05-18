<!-- close container -->
</div>

<div class="container-fluid">
  <div class="row">

    <!-- <div class="col-6 red"></div>
    <div class="col-6 blue"></div>
    <div class="col-6 green"></div>
    <div class="col-6 orange"></div> -->



<?php if( have_rows('links') ): ?>
  <?php while( have_rows('links') ): the_row();   ?>

    <!-- <div class="col-6 red"></div> -->
    <div class="col-6 red" style="background-image:url(<?= get_sub_field('background') ?>);"></div>
    <!-- <h4><?= get_sub_field('headline') ?></h4> -->


    <!-- <div class="col-md-6" style="background-image:url(<?= get_sub_field('background') ?>);"> -->
    <!-- <div class="col-md-6"> -->
      <!-- <img class="header-img" src="<?= get_sub_field('background') ?>" alt=""> -->
      <!-- <h4><?= get_sub_field('opacity-color') ?></h4> -->

    <!-- </div> -->
<?php endwhile; endif?>

</div>
<!-- </div> -->
</div>

<div class="container">

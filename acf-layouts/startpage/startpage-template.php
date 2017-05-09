<div class="row">
  <div class="col-md-6">

    <?php if( have_rows('pictures') ): ?>
      <?php while( have_rows('pictures') ): the_row();   ?>
        <!-- Outputs the startpage image -->
        <img class="startpage-img" src="<?= get_sub_field('image') ?>" alt="">
    <?php endwhile; endif?>

  </div>

  <?php if( have_rows('headline') ): ?>
    <?php while( have_rows('headline') ): the_row();   ?>
      <!-- Outputs the title -->
      <h1><?= get_sub_field('title') ?></h1>
  <?php endwhile; endif?>

  <div class="col-md-3">
    <?php if( have_rows('navigation') ): ?>
      <?php while( have_rows('navigation') ): the_row();   ?>
        <!-- Outputs the title -->
        <h3><?= get_sub_field('fields') ?></h3>
        <?php while( have_rows('programs') ): the_row();   ?>
          <h4><?= get_sub_field('name') ?></h4>
        <?php endwhile; ?>
    <?php endwhile; endif?>
  </div>
</div>

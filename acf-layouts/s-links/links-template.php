<!-- close container -->
</div>

<div class="container-fluid">
  <div class="row">

    <?php if( have_rows('links') ): ?>
      <?php while( have_rows('links') ): the_row();   ?>

        <div class="col-6 s-links-CenterContent" style="background-image:url(<?= get_sub_field('background') ?>);">
          <h2><?= get_sub_field('headline') ?></h2>
        </div>

    <?php endwhile; endif?>

  </div>
</div>

<div class="container">

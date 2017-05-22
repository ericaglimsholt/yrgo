<!-- close container -->
</div>

<div class="container-fluid">
  <div class="row marginTop">

    <?php if( have_rows('links') ): ?>
      <?php while( have_rows('links') ): the_row();   ?>

        <div class="col-6 s-links-CenterContent" data-color="<?= get_sub_field('opacity-color') ?>" style="background-image:url(<?= get_sub_field('background') ?>);">
          <h2><?= get_sub_field('headline') ?></h2>
          <a href="<?= get_sub_field('link') ?>"><p>Läs mer</p></a>
        </div>
    <?php endwhile; endif?>

  </div>
</div>

<div class="container">

<!-- <script>
  alert("test")
  elementList = document.querySelectorAll(selectors);

</script> -->

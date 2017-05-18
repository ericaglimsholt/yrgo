<!-- Closes container div -->
</div>


<div class="row row-header">
  <img class="header-img" src="<?= $this->getImage() ?>" alt="">
  <div class="container">
    <div class="col-md-6 col-header">
      <h2><?= $this->getTitle() ?></h2>
      <h2 class="start"><?= $this->getStartTitle() ?></h2>

      <ul>
        <?php if( have_rows('header_areas') ): ?>
          <?php while( have_rows('header_areas') ): the_row();   ?>
            <li><?= get_sub_field('area') ?></li>
        <?php endwhile; endif?>
      </ul>


    </div>
  </div>


</div>

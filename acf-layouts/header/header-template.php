<!-- close container -->
</div>

<img class="header-img" src="<?= $this->getImage() ?>" alt="">
  <div class="row">

    <div class="container">
      <div class="col-md-6">

        <h4><?= $this->getSemesterPeriodField() ?></h4>

        <?php if( have_rows('educations') ): ?>
          <?php while( have_rows('educations') ): the_row();   ?>
            <h4><?= get_sub_field('title') ?></h4>
        <?php endwhile; endif?>
      </div>
    </div>
  </div>
<div class="container">

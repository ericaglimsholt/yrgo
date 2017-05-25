<?php
$categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC'
));
?>



<!-- Closes container div -->
</div>

<div class="row-header">
  <img class="header-img" src="<?= $this->getImage() ?>" alt="">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-header">
        <h2><?= $this->getTitle() ?></h2>
        <h2 class="start"><?= $this->getStartTitle() ?></h2>

        <ul>
          <?php foreach ($categories as $category): ?> 
              <li class="category"><?php echo $category->name ?></li>
          <?php endforeach; ?>

        </ul>

      </div>
    </div>
  </div>
</div>

<div class="container">

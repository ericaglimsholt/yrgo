<?php
$categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC',
    'rewrite' => true,
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
            <?php
            // $term_link = get_term_link( $category ); ?>
             <!-- <a href="<?php echo esc_url( $term_link ) ?>"> -->
               <li class="category"><?php  echo $category->name ?></li>

              <!-- </a> -->
          <?php endforeach; ?>

        </ul>

      </div>
    </div>
  </div>
</div>

<div class="container">

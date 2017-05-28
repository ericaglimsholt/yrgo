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
            <li class="category"><?php  echo $category->name ?></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="col-md-6 col-header">
        <?php
        $posts = get_sub_field('education_single');
        if( $posts ): ?>
        <ul>
          <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
            <a href="<?php echo $post->guid; ?>">
            <li><?php  echo $post->post_title; ?></li>
          </a>
          <?php endforeach; ?>
        </ul>
        <?php wp_reset_postdata(); // IMPORTANT – reset the $post object so the rest of the page works correctly ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<div class="container">

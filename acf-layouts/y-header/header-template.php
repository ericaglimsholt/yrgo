<!-- This is a module that provides header with education ares -->

<?php
// Get taxanomy called categories
$categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC',
    'rewrite' => true,
));
?>

<!-- Closes container div -->
</div>

<div class="row-header">
  <!-- Outputs image -->
  <img class="header-img" src="<?= $this->getImage() ?>" alt="">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-header">
        <!-- Outputs title -->
        <h2><?= $this->getTitle() ?></h2>
        <!-- Outputs second title -->
        <h2 class="start"><?= $this->getStartTitle() ?></h2>
        <ul>
          <?php foreach ($categories as $category): ?>
            <!-- Outputs taxanomy names -->
            <li class="category"><?php  echo $category->name ?></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="col-md-6 col-header">
        <?php
        // Get posts
        $posts = get_sub_field('education_single');
        if( $posts ): ?>
        <ul>
          <?php foreach( $posts as $post): ?>
            <!-- Outputs link -->
            <a href="<?php echo $post->guid; ?>">
              <!-- Outputs title as list -->
            <li><?php  echo $post->post_title; ?></li>
          </a>
          <?php endforeach; ?>
        </ul>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<!-- Outputs image -->
<div class="container">

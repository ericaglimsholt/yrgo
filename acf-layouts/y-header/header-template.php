<?php
$categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC'
));

$educations = get_posts( array (
  'post_type' => 'education',
  'order' => 'ASC',
  'orderby' => 'name',
  'posts_per_page' => -1,
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
          <h2><?php echo $categories[0]->cat_ID ?></h2>
        </ul>

      </div>
      <div class="col-md-6 show-educations">
        <ul>
          <?php foreach ($educations as $education): ?>
              <li class="education"><?php echo $education->post_title ?></li>
              <h2> <?php echo $categories->IDs ?></h2>
          <?php endforeach; ?>
        </ul>

      </div>
    </div>
  </div>
</div>

<script>
  document.querySelector('.category').addEventListener("click", function(event){
  document.querySelector('.education').style.display='block';
  event.preventDefault();
  });
</script>

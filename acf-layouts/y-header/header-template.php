<?php $educations = get_posts([
  'post_type' => 'education',
  'order' => 'DESC',
  'orderby' => 'name'
]); ?>

<!-- Closes container div -->
</div>


<div class="row row-header">
  <img class="header-img" src="<?= $this->getImage() ?>" alt="">
  <div class="container">
    <div class="col-md-6 col-header">
      <h2><?= $this->getTitle() ?></h2>
      <h2 class="start"><?= $this->getStartTitle() ?></h2>

      <ul>
        <?php foreach ($educations as $education): ?>
            <li><?php echo $education->post_title ?></li>
        <?php endforeach; ?>
      </ul>


    </div>
  </div>


</div>

<!-- close container -->
</div>

<?php $educations = get_posts([
  'post_type' => 'news',
  'order' => 'ASC',
  'orderby' => 'name'
]); ?>



<div class="container-fluid">

  <div class="row">

    <div class="s-header-background col-md-12" style="background-image:url(<?= $this->getBackgroundImg() ?>);">

      <div class="container s-news">
        <p class=" s-news-header">NYHETER</p>

          <?php foreach ($educations as $education): ?>
            <div class="s-news-list">
              <p class="s-news-list-header"><?php echo $education->post_title ?></p>
              <p>----</p>
              <a href="<?php echo $education->guid ?>"><p>Läs mer</p></a>
            </div>


          <?php endforeach; ?>

      </div>

    </div>

  </div>
</div>



<div class="container">

<!-- close container -->
</div>

<?php $activities = get_posts([
  'post_type' => 'activities',
  'order' => 'ASC',
  'posts_per_page' => $this->getActivitiesHeadlinesField(),
  'orderby' => 'name'
]); ?>
<div class="container-fluid">

  <div class="row">

    <div class="s-header-background col-md-12" style="background-image:url(<?= $this->getBackgroundImg() ?>);">

      <div class="container s-news">
        <p class="s-news-header">AKTIVITETER</p>

          <?php foreach ($activities as $activitie): ?>
            <?php if ($this->getActivitiesHeadlinesField()): ?>
            <div class="s-news-list">
              <p class="s-news-list-header"><?php echo $activitie->post_title ?></p>
              <p>-</p>

              <!-- Send url and id to newsContent -->
              <a href="<?php echo add_query_arg( 'ID', $activitie->ID, get_permalink() ); ?>"><p>Läs mer</p></a>

            </div>


          <?php endif; endforeach; ?>

      </div>

    </div>

  </div>
</div>



<div class="container">

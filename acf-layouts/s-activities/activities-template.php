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

    <div class="s-header-background col-md-12 removeImg" style="background-image:url(<?= $this->getBackgroundImg() ?>);">

      <div class="container s-news">
        <p class="s-news-header">AKTIVITETER</p>

          <?php foreach ($activities as $activitie): ?>
            <?php if ($this->getActivitiesHeadlinesField()): ?>
            <div class="s-news-list">

              <!-- Send url and id to newsContent -->
              <a href="<?php echo add_query_arg( 'ID', $activitie->ID, get_permalink() ); ?>">
                <p class="s-news-list-header"><?php echo $activitie->post_title ?></p>
              </a>
              <hr align="left" style="height:7px;" />
            </div>


          <?php endif; endforeach; ?>

      </div>

    </div>

  </div>
</div>



<div class="container">

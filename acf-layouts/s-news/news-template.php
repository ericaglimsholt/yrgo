<!-- close container -->
</div>

<?php $educations = get_posts([
  'post_type' => 'news',
  'order' => 'ASC',
  'posts_per_page' => $this->getNewsHeadlinesField(),
  'orderby' => 'name'
]); ?>

<div class="container-fluid marginTop">

  <div class="row">

    <div class="s-header-background col-md-12" style="background-image:url(<?= $this->getBackgroundImg() ?>);">

      <div class="container s-news">
        <p class="s-news-header">NYHETER</p>

          <?php foreach ($educations as $education): ?>
            <?php if ($this->getNewsHeadlinesField()): ?>

            <div class="s-news-list">
              <a href="<?php echo add_query_arg( 'ID', $education->ID, 'http://localhost:3000/?studentwebben=nyhet' ); ?>">
                <p class="s-news-list-header"><?php echo $education->post_title ?></p>
                  </a>
              <p>-</p>

              <!-- FIX URL UNDER THIS TEXT!!! -->
              <!-- Send url and id to newsContent -->


            </div>


          <?php endif; endforeach; ?>

      </div>

    </div>

  </div>
</div>



<div class="container">

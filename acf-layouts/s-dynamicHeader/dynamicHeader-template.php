<!-- close container -->
</div>

<?php
$categorys = get_posts([
  'post_type' => $this->getCategoryField(),
  'order' => 'ASC',
  'posts_per_page' => $this->getNewsHeadlinesField(),
  'orderby' => 'name'
]); ?>

<?= get_sub_field('link') ?>
<?php
// echo get_permalink();
// $path = home_url() . '?' . get_post_type() . '=' . $this->getCategoryField() . '&';
// echo $path;
// echo home_url();
// echo get_post_type();
// echo str_replace("/=/", "/d/", get_permalink());
 ?>

<div class="container-fluid marginTop">

  <div class="row">

    <div class="s-header-background col-md-12" style="background-image:url(<?= $this->getBackgroundImg() ?>);">

      <div class="container s-news">
        <p class="s-news-header" style="color:<?=$this->getColorTitle()?>":><?=$this->getTitleField()?></p>

          <?php foreach ($categorys as $category): ?>
            <?php if ($this->getNewsHeadlinesField()): ?>

            <div class="s-news-list">

              <!-- Send url and id to newsContent -->
              <a href="<?php echo add_query_arg( 'ID', $category->ID, $path ); ?>">
                <p class="s-news-list-header"><?php echo $category->post_title ?></p>
              </a>
              <hr align="left" style="height:7px;" />

            </div>


          <?php endif; endforeach; ?>

      </div>

    </div>

  </div>
</div>



<div class="container">

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

    <div class="s-header-background col-md-12 removeImg" style="background-image:url(<?= $this->getBackgroundImg() ?>);">

      <div class="container s-news">
        <p class="s-news-header">NYHETER</p>


        <div class="row">
          <div class="col-12 s-news-mobile">
            <div class="row">
              <p class="col-3 s-news-arrow s-news-right"><</p>
              <div class="col-6 s-news-text"></div>
              <p class="col-3 s-news-arrow ">></p>
            </div>
          </div>
        </div>

          <?php foreach ($educations as $education): ?>
            <?php if ($this->getNewsHeadlinesField()): ?>
            <div class="col-12 s-news-list">

              <!-- Send url and id to newsContent -->
              <a class="s-news-link" href="<?php echo add_query_arg( 'ID', $education->ID, get_home_url() . "/?" . get_post_type() . "=nyhet" ); ?>">
                <p class="s-news-list-header"><?php echo $education->post_title ?></p>
              </a>
              <hr align="left" style="height:7px;" />

            </div>

          <?php endif; endforeach; ?>

      </div>

    </div>

  </div>
</div>



<div class="container">

  <script>

  console.log(window.innerWidth);
  let newsList = document.querySelector('.s-news-list');
  let placeholder = document.querySelector('.s-news-text');

  let to = document.querySelector('.s-news-text');
  let news = document.querySelectorAll('.s-news-list a');


  // remove links if the screen is small
  window.addEventListener('resize', function() {

  if (window.innerWidth <= 768) {
    placeholder.append(news[0]);

  } else {
    let placeholderA = document.querySelectorAll('.s-news-text a');
    let hr = document.querySelectorAll('hr');

    for (var i = 0; i < placeholderA.length; i++) {
      newsList.insertBefore(placeholderA[0], hr[0]);

    }


  }
}, true);

  </script>

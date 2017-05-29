<?php $educations = get_posts([
  'post_type' => 'education',
  'order' => 'ASC',
  'posts_per_page' => '3',
  'orderby' => 'name'
]); ?>

<!-- close container -->
</div>

<div class="container-fluid">

  <div class="row marginTop">

    <div class="s-follow-background col-md-12 removeImg" style="background-image:url(<?= $this->getBackgroundImg() ?>);">
      <div class="container s-follow">
        <p>Följ oss</p>


        <div class="col-12">
          <div class="row split">
            <p class="s-follow-arrow removeTag" data-direction="0"><</p>

          <?php foreach ($educations as $education): ?>
            <?php $links = get_field_objects($education->ID);
            foreach ($links['education']['value'] as $link):?>

              <div class="s-follow-educations">
                <a href="<?=$link['link']?>">
                  <img src="<?=$link['pic']?>" alt="" />
                  <h3><?= $education->post_title ?></h3>
                </a>
              </div>

            <?php endforeach; ?>
          <?php endforeach; ?>

          <p class="s-follow-arrow removeTag" data-direction="1">></p>

          </div>

          </div>

        </div>

      </div>


    </div>

  </div>
</div>


<div class="container">

  <script>
let follows = document.querySelectorAll('.s-follow-educations');

// remove links if the screen is small
window.addEventListener('resize', function() {
  if (window.innerWidth <= 768) {
    follows[0].style.display = 'block';
}
}, true);
  </script>

<!-- This is a module that provides links with image for education -->

<!-- Closes container div -->
</div>

<div class="row links-nav">
  <?php if( have_rows('educations_links_single') ): ?>
    <?php while( have_rows('educations_links_single') ): the_row();   ?>
        <?php $posts = get_sub_field('relation_single');
        if( $posts ): ?>
          <?php foreach( $posts as $post): ?>
            <div class="col-md-6 links">
              <!-- Outputs the link -->
              <a href="<?php echo $post->guid; ?>">
                <!-- Outputs what color the opacity is -->
                <div class="container links-container s-links-CenterColor" data-color="<?= get_sub_field('opacity-color') ?>">
                  <!-- Outputs title -->
                  <h3><?php echo $post->post_title; ?></h3>
                </div>
                <!-- Outputs image -->
                <img class="education-img" src="<?= get_sub_field('image_single') ?>" alt="">
              </a>
            </div>
          <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>
  <?php endwhile; endif?>
</div>

<!-- Script for show right opacity color on hover, choosen in dashboard -->
<script>
  links = document.querySelectorAll('.s-links-CenterColor');
  for (i = 0; i < links.length; i++) {

    links[i].addEventListener("mouseleave", function (e) {
      this.style.background='';
    });

    links[i].addEventListener("mouseenter", function (e) {
      this.style.background=  'linear-gradient( to top, rgba(255,255,255,0), ' + this.dataset.color + ')';
    });
  }
</script>

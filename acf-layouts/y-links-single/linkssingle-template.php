<?php

 ?>

<!-- Closes container div -->
</div>
<div class="row links-nav">

  <?php if( have_rows('educations_links_single') ): ?>
    <?php while( have_rows('educations_links_single') ): the_row();   ?>
        <?php
        $posts = get_sub_field('relation_single');
        if( $posts ): ?>
          <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
            <div class="col-md-6 links">
              <a href="<?php echo $post->guid; ?>">
                <div class="container links-container">
                  <h3><?php echo $post->post_title; ?></h3>
                </div>
                <img class="education-img" src="<?= get_sub_field('image_single') ?>" alt="">
              </a>
            </div>

          <?php endforeach; ?>
          <?php wp_reset_postdata(); // IMPORTANT – reset the $post object so the rest of the page works correctly ?>
        <?php endif; ?>
  <?php endwhile; endif?>
  
</div>

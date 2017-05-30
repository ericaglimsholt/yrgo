<!-- This is a module that provides links with image for education areas -->

<!-- Closes container div -->
</div>

<div class="row links-nav">
    <?php if( have_rows('educations_links') ): ?>
      <?php while( have_rows('educations_links') ): the_row();   ?>
        <div class="col-md-6 links ">
        <!-- Outputs the startpage image -->
          <a href="<?= get_sub_field('link_education') ?>">
            <!-- Outputs the opacity color -->
            <div class="container links-container s-links-CenterColor" data-color="<?= get_sub_field('opacity-color') ?>">
              <?php $term = get_sub_field('choose_education'); ?>
              <?php foreach ($term as $terma): ?>
                <!-- Outputs the name from taxanomy -->
                <h3><?php print $terma->name; ?></h3>
              <?php endforeach; ?>
            </div>
            <!-- Outputs the education image -->
            <img class="education-img" src="<?= get_sub_field('image') ?>" alt="">
          </a>
        </div>
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

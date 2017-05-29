<?php
$categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC',
));



$educations = get_posts (array(
    'name' => 'Test Taxonomy Multicheck',
    'id' => $prefix . 'choose_education',
    'taxonomy' => 'category', //Enter Taxonomy Slug
    'type' => 'taxonomy_multicheck',
));

 ?>

<!-- Closes container div -->
</div>

<div class="row links-nav">



    <?php if( have_rows('educations_links') ): ?>
      <?php while( have_rows('educations_links') ): the_row();   ?>

        <div class="col-md-6 links s-links-CenterContent removeImg">



        <!-- Outputs the startpage image -->
          <a href="<?= get_sub_field('link_education') ?>">
            <div class="container links-container s-links-CenterColor" data-color="<?= get_sub_field('opacity-color') ?>">
              <?php $term = get_sub_field('choose_education'); ?>
              <?php foreach ($term as $terma): ?>
                <h3><?php print $terma->name; ?></h3>
              <?php endforeach; ?>
            </div>

            <img class="education-img" src="<?= get_sub_field('image') ?>" alt="">
          </a>
        </div>

    <?php endwhile; endif?>

</div>

<script>
  links = document.querySelectorAll('.s-links-CenterColor');
  for (i = 0; i < links.length; i++) {

    links[i].addEventListener("mouseleave", function (e) {
        this.style.background='';
        // console.log(this.dataset.color);
    });

      links[i].addEventListener("mouseenter", function (e) {
          // this.style.transition = "2s ease-in-out";
          this.style.background=  'linear-gradient( to top, rgba(255,255,255,0), ' + this.dataset.color + ')';
      });
  }

</script>

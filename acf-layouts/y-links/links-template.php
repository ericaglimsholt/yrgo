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
        <div class="col-md-6 links">

        <!-- Outputs the startpage image -->

          <div class="container links-container">
            <?php $term = get_sub_field('choose_education'); ?>
            <?php foreach ($term as $terma): ?>
              <h3><?php print $terma->name; ?></h3>
            <?php endforeach; ?>
          </div>
          <img class="education-img" src="<?= get_sub_field('image') ?>" alt="">
        </div>
    <?php endwhile; endif?>

</div>

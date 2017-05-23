<?php

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
        <img class="education-img" src="<?= get_sub_field('image') ?>" alt="">
        <div class="container">

            <?php foreach ($educations as $education): ?>
              <?php var_dump($education) ?>
                <li class="education"><?php echo $education->post_title ?></li>
            <?php endforeach; ?>

        </div>
        </div>
    <?php endwhile; endif?>

</div>

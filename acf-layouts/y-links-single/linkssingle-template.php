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

$obj = get_post_type_object( 'educations' );
//echo $obj->labels->singular_name;

 ?>

<!-- Closes container div -->
</div>

<div class="row links-nav">

    <?php if( have_rows('educations_links_single') ): ?>
      <?php while( have_rows('educations_links_single') ): the_row();   ?>

        <div class="col-md-6 links">



        <!-- Outputs the startpage image -->
          <a href="<?= get_sub_field('link_education_single') ?>">
            <div class="container links-container">
                <h3><?php $obj = get_post_type_object( 'education' );
                print_r($obj->labels->singular_name)
                //echo $obj->name;
                ?>

                </h3>
            </div>

            <img class="education-img" src="<?= get_sub_field('image_single') ?>" alt="">
          </a>
        </div>

    <?php endwhile; endif?>

</div>

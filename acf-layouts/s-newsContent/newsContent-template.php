<!-- close container -->
</div>
<?php $educations = get_posts([
  'post_type' => 'news',
  'order' => 'ASC',
  'orderby' => 'name'
]); ?>

<!-- Get and escape id from url -->
<?php $id = esc_html( $_REQUEST['ID'] ) ?>

  <?php foreach ($educations as $education): ?>

    <?php empty($id)? $id = $educations[0]->ID: $id=$id?>

    <?php if ($education->ID == $id && have_rows('n-news', $id)): ?>
      <?php while (have_rows('n-news', $id)): ?>
        <?php the_row(); ?>

            <div class="container">
              <div class="row s-newsContent">

                <div class="col-12">
                  <p class="headline"><?php print get_sub_field('headline')?></p>
                </div>

                <div class="col-6">
                  <p><?php print get_sub_field('content')?></p>
                </div>

                <div class="col-6">
                  <p><?php print get_sub_field('content')?></p>
                </div>

              </div>
            </div>

<?php endwhile; endif; endforeach; ?>



<div class="container">

<!-- close container -->
</div>
<?php $activities = get_posts([
  'post_type' => 'activities',
  'order' => 'ASC',
  'orderby' => 'name'
]); ?>

<!-- Get and escape id from url -->
<?php $id = esc_html( $_REQUEST['ID'] );?>

  <?php foreach ($activities as $activitie): ?>

    <?php empty($id)? $id = $activities[0]->ID: $id=$id?>

      <?php if ($activitie->ID == $id && have_rows('a-activities', $id)): ?>
        <?php while (have_rows('a-activities', $id)): ?>
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

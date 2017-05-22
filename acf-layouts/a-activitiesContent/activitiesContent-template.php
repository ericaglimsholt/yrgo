<!-- close container -->
</div>
<?php $activities = get_posts([
  'post_type' => 'Activities',
  'order' => 'ASC',
  'orderby' => 'name'
]); ?>
<!-- Get and escape id from url -->
<?php $id = esc_html( $_REQUEST['ID'] ) ?>
  <?php foreach ($activities as $activitie): ?>
    <?php if ($activitie->ID == $id && have_rows('n-news', $id)): ?>
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

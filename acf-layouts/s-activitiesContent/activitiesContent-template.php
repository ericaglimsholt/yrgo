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

                    <div class="col-4">
                      <div class="reserve-calender col-9">

                        <div class="row">
                          <p class="s-newsContentTitleMore">Mer Aktiviteter</p>
                          <div class="reserve-date">
                            <?php for ($i=1; $i < 31; $i++) { ?>
                              <div class="reserve-circle"><?= $i ?></div>
                              <?php } ?>
                            </div>
                        </div>

                        <div class="row">
                          <div class="col-2 reserve-arrows split">
                            <p><</p>
                            <p>Juni</p>
                            <p>></p>
                          </div>

                        </div>
                      </div>

                      <div class="row s-newsContentList">
                        <?php for ($y=0; $y < 4; $y++) { ?>
                          <a href="<?php echo add_query_arg( 'ID', $activities[$y]->ID, get_permalink() ); ?>">
                            <p><?=$activities[$y]->post_title?></p>
                          </a>
                        <?php } ?>
                      </div>


                    </div>


                </div>
              </div>

<?php endwhile; endif; endforeach; ?>



<div class="container">

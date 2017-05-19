<!-- Closes container div -->
</div>

<div class="row">

    <?php if( have_rows('educations_links') ): ?>
      <?php while( have_rows('educations_links') ): the_row();   ?>
        <div class="col-md-6">
        <!-- Outputs the startpage image -->
        <img class="education-img" src="<?= get_sub_field('image') ?>" alt="">
        </div>
    <?php endwhile; endif?>

</div>

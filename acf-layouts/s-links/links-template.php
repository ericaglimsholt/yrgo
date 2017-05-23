<!-- close container -->
</div>

<div class="container-fluid">
  <div class="row marginTop">

    <?php if( have_rows('links') ): ?>
      <?php while( have_rows('links') ): the_row();   ?>

        <div class="col-6 s-links-CenterContent" data-color="<?= get_sub_field('opacity-color') ?>" style="background-image:url(<?= get_sub_field('background') ?>);">
          <a href="<?= get_sub_field('link') ?>">
            <h2><?= get_sub_field('headline') ?></h2>
          </a>
        </div>

    <?php endwhile; endif?>

  </div>
</div>

<div class="container">

<script>
  links = document.querySelectorAll('.s-links-CenterContent');
  for (i = 0; i < links.length; i++) {

    links[i].addEventListener("mouseleave", function (e) {
        this.style.backgroundColor='';
        // console.log(this.dataset.color);
    });

      links[i].addEventListener("mouseenter", function (e) {
          this.style.backgroundColor=this.dataset.color;
          // console.log(this.dataset.color);
      });
  }

</script>

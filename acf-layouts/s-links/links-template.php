<!-- close container -->
</div>

<div class="container-fluid">
  <div class="row marginTop">

    <?php if( have_rows('links') ): ?>
      <?php while( have_rows('links') ): the_row();   ?>

        <div class="col-6 s-links-CenterContent removeImg" style="background-image:url(<?= get_sub_field('background') ?>);">
            <a href="<?= get_sub_field('link') ?>">
              <div class="s-links-CenterColor" data-color="<?= get_sub_field('opacity-color') ?>">
              <h2><?= get_sub_field('headline') ?></h2>
            </div>
            </a>

        </div>

    <?php endwhile; endif?>

  </div>
</div>

<div class="container">

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

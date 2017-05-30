<!-- close container -->
<h2 class="textOnlyTemp">Länkar</h2>
</div>

<div class="container-fluid">
  <div class="row marginTop">

    <?php if( have_rows('links') ): ?>
      <?php while( have_rows('links') ): the_row();   ?>



        <div class="col-sm-12 col-md-6 s-links-CenterContent removeImg" style="background-image:url(<?= get_sub_field('background') ?>);">
            <a href="<?= get_sub_field('link') ?>">
              <div class="s-links-CenterColor onlyTextLeft" style="background:linear-gradient( to top, rgba(255,255,255,0), <?= get_sub_field('opacity-color') ?>)">
                <h2><?= get_sub_field('headline') ?></h2>
              </div>
            </a>
            <!-- <div class="orange"><p>test</p></div> -->
        </div>

    <?php endwhile; endif?>

  </div>
</div>

<div class="container">

<script>
  // links = document.querySelectorAll('.s-links-CenterColor');
  // for (i = 0; i < links.length; i++) {
  //   linksH2 = links[i].querySelector('h2');
  //   console.log(linksH2);
  //
  //   links[i].addEventListener("mouseleave", function (e) {
  //       // this.style.background='';
  //       // console.log(this.dataset.color);
  //   });
  //
  //     links[i].addEventListener("mouseenter", function (e) {
  //         // this.style.transition = "2s ease-in-out";
  //         // this.style.background=  'linear-gradient( to top, rgba(255,255,255,0), ' + this.dataset.color + ')';
  //     });
  // }

</script>

<?php $educations = get_posts([
  'post_type' => 'education',
  'order' => 'ASC',
  'posts_per_page' => '-1',
  'orderby' => 'name'
]); ?>
<?php
// print_r($educations);
//
// foreach ($educations as $education) {
//   print $education->guid;
//   print $education->post_title;
//
// }



?>


<!-- close container -->
</div>

<div class="container-fluid">

  <div class="row marginTop">

    <div class="s-follow-background col-md-12" style="background-image:url(<?= $this->getBackgroundImg() ?>);">
      <div class="container s-follow">
        <p>Följ oss</p>


        <div class="col-12">
          <div class="row split">
            <p class="s-follow-arrow" data-direction="0"><</p>

          <?php foreach ($educations as $education): ?>

            <div class="s-follow-educations">
              <a href="<?=$education->guid?>">
                <div class="red"></div>
                <h3><?= $education->post_title ?></h3>
              </a>
            </div>

          <?php endforeach; ?>

          <p class="s-follow-arrow" data-direction="1">></p>

          </div>

          </div>

        </div>

      </div>


    </div>

  </div>
</div>






<div class="container">


  <script>

  let educations = document.querySelectorAll('.s-follow-educations');
  let arrows = document.querySelectorAll('.s-follow-arrow');
  let y = 0;

let startNumber = Math.round(educations.length/2);

if (startNumber < 3) {
  startNumber = 0;
}

console.log(educations);
console.log(startNumber);



for (var i = 0; i < arrows.length; i++) {
  arrows[i].addEventListener("click", function (e) {
    // console.log(this.dataset.direction);
    // console.log(y);
    y=y+1;
  });


  for (x = startNumber; x < startNumber + 3; x++) {
    // console.log(y);
    educations[x].style.display = "block";
  }

}




  </script>

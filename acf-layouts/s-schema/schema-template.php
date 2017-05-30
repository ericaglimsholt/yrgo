
<!-- close container -->
</div>

<div class="container s-margin">
  <div class="row">
    <div class="col-12 s-category-title">

      <h2>Välj institution</h2>
    </div>
  </div>

<div class="row">
  <div class="col-sm-12 col-md-6">
    <?php foreach (get_terms() as $category): ?>
      <?php
      $args = array(
        'post_type' => 'education',
        'tax_query' => array(
          array(
            'taxonomy' => 'category',
            'field'    => 'slug',
            'terms'    =>  $category->slug,
          ),
        ));
        $query = new WP_Query($args);
        ?>

        <div class="row s-category">

          <div class="col-sm-12 col-md-8">
            <div class="row s-category-categorys">
              <p class="bold">|<p>
                <?=$category->name?>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12 col-md-8">
                <div class="s-category-educations">
                  <?php foreach ($query->posts  as $key): ?>
                    <p><?php print $key->post_title?></p>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>

          </div>
        <?php endforeach; ?>

  </div>
  <div class="col-sm-12 col-md-4 s-category-placeholder">
  </div>
</div>

</div>


<div class="container">

  <script>
  let expand = document.querySelectorAll('.s-category');
  let placeholder = document.querySelectorAll('.s-category-placeholder');
  placeholder=placeholder[0];


  for (var i = 0; i < expand.length; i++) {

    expand[i].addEventListener("click", function (e) {
      // this.style.opacity='0.5';

       let change = this.querySelector('.s-category-educations');
      //  let changeP = change.querySelector('p');
       let test = this.querySelector('.bold');

        if (test.innerHTML != '-') {
          // this.style.opacity='1';
          placeholder.innerHTML=change.innerHTML;
          test.innerHTML="-";
          placeholder.style.visibility = 'visible';
          placeholder.style.opacity = '1';
          placeholder.style.marginRight = "20px";

          test.style.marginRight = "20px";

          } else {
          // this.style.opacity='0.5';
          placeholder.innerHTML='';
          test.innerHTML="|";
          placeholder.style.visibility = 'hidden';
          placeholder.style.opacity = '0';

          test.style.marginRight = "0px";
          }
  });
}
  </script>

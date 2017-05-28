
<!-- close container -->
</div>

<div class="container">
  <div class="row">
    <div class="col-12 s-category-title">

      <h2>Välj institution</h2>
    </div>
  </div>

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
      <div class="col-6">
        <div class="row s-category-categorys">
          <p class="bold">|<p>
          <?=$category->name?>
        </div>
      </div>

      <div class="row">
        <div class="col-6">
          <div class="s-category-educations">
            <?php foreach ($query->posts  as $key): ?>
              <?=$key->post_title?>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

    </div>
  <?php endforeach; ?>
</div>


<div class="container">

  <script>
  let expand = document.querySelectorAll('.s-category');
  for (var i = 0; i < expand.length; i++) {

    expand[i].addEventListener("click", function (e) {
       let change = this.querySelector('.s-category-educations');
       let test = this.querySelector('.bold');

        if (test.innerHTML === '|') {
          test.innerHTML="-";
          change.style.display = 'block';
          test.style.marginRight = "20px";
          } else {
          test.innerHTML="|";
          change.style.display = 'none';
          test.style.marginRight = "0px";
          }
  });
}
  </script>


<!-- close container -->
</div>

<div class="container">
  <div class="row">
    <div class="col-6">
      <div class="s-category">

      <h2>Välj institution</h2>
        <?php foreach (get_terms() as $category): ?>

          <div class="row s-category-show">
            <p class="bold">|<p>
            <p><?=$category->name?><p>
          </div>

        <?php endforeach; ?>

      </div>
    </div>
  </div>
</div>


<div class="container">



  <script>

  let expand = document.querySelectorAll('.s-category-show');


  for (var i = 0; i < expand.length; i++) {

    expand[i].addEventListener("click", function (e) {
      let change = this.querySelector('.bold');

      if (change.innerHTML === '|') {
        change.innerHTML="-";
        change.style.marginRight = "20px";
        } else {
        change.innerHTML="|";
        change.style.marginRight = "0px";
        }
  });


}




  </script>


<!-- close container -->
</div>

<div class="container">
  <div class="row">
    <div class="col-12 s-category-title">

      <h2>Kontakta oss!</h2>
    </div>
  </div>

  <div class="row s-category">
    <div class="col-6">
      <div class="row s-category-categorys">
        <p class="bold">|<p>
        <p>Lärare</p>
      </div>
    </div>

    <div class="row">
      <div class="col-6">
        <div class="s-category-educations">

        </div>
      </div>
    </div>
  </div>
  <div class="row s-category">
    <div class="col-6">
      <div class="row s-category-categorys">
        <p class="bold">|<p>
        <p>Studenthälsa</p>
      </div>
    </div>

    <div class="row">
      <div class="col-6">
        <div class="s-category-educations">

        </div>
      </div>
    </div>
  </div>

    <div class="row s-category">
      <div class="col-6">
        <div class="row s-category-categorys">
          <p class="bold">|<p>
          <p>Rektorer</p>
        </div>
      </div>

      <div class="row">
        <div class="col-6">
          <div class="s-category-educations">
            <p>Svante</p>
            <div class="s-contacts-text">
              <p>Rektor Byggteknik/Samhällsbyggnad/Teknik</p>
              <p>031-367 31 10</p>
              <p>svante.bostrom@educ.goteborg.se</p>
            </div>
            <p>Annika</p>
            <div class="s-contacts-text">
              <p>Rektor Byggteknik/Samhällsbyggnad/Teknik</p>
              <p>031-367 31 10</p>
              <p>svante.bostrom@educ.goteborg.se</p>
            </div>
            <p>Karin</p>
            <div class="s-contacts-text">
              <p>Rektor Byggteknik/Samhällsbyggnad/Teknik</p>
              <p>031-367 31 10</p>
              <p>svante.bostrom@educ.goteborg.se</p>
            </div>
            <p>Robert</p>
            <div class="s-contacts-text">
              <p>Rektor Byggteknik/Samhällsbyggnad/Teknik</p>
              <p>031-367 31 10</p>
              <p>svante.bostrom@educ.goteborg.se</p>
            </div>
          </div>
        </div>
      </div>
    </div>

</div>
<br>

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

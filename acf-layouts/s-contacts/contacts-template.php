
<!-- close container -->
</div>

<div class="container s-margin">
  <div class="row">
    <div class="col-12 s-category-title">

      <h2>Kontakta oss!</h2>
    </div>
  </div>

<div class="row">
  <div class="col-sm-12 col-md-6">

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

          <div class="row s-category">
            <div class="col-6">
              <div class="row s-category-categorys">
                <p class="bold">|<p>
                <p>Studiehälsa</p>
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

        if (test.innerHTML === '|') {
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

<!-- End of container div, starts in header.php -->
</div>


<script>
  let onlyText = document.querySelector('.onlyText');
  let allImg = document.querySelectorAll('.removeImg');
  let removeTag = document.querySelectorAll('.removeTag');

  let allAtags = document.querySelectorAll('a');
  let allPtags = document.querySelectorAll('p');
  let allH2tags = document.querySelectorAll('h2');
  let allH3tags = document.querySelectorAll('h3');
  let allImgTags = document.querySelectorAll('img');
  let allRow = document.querySelectorAll('.row');
  let onlyTextLeft = document.querySelectorAll('.onlyTextLeft');
  let sNewsList = document.querySelectorAll('.s-news-list');
  let textOnlyOneColumn = document.querySelectorAll('.textOnlyOneColumn');
  let textOnlyTemp = document.querySelectorAll('.textOnlyTemp');



  onlyText.addEventListener("click", function (e) {

    // display text only
    if (this.dataset.check == "true") {
      // console.log(this);
      this.innerHTML = "Bild sida";
      // console.log('run');
      for (i = 0; i < allImg.length; i++) {
        allImg[i].style.backgroundImage = "";
        allImg[i].removeAttribute("class");
      }

      for (i = 0; i < allRow.length; i++) {
        allRow[i].style.backgroundImage = "";
        allRow[i].removeAttribute("class");
      }

      for (i = 0; i < allAtags.length; i++) {
        allAtags[i].style.color = "black";
      }

      for (i = 0; i < allPtags.length; i++) {
        // console.log(allPtags);
        allPtags[i].style.color = "black";
        allPtags[i].style.padding = "0";
        allPtags[i].style.fontSize = "15";


      }

      for (i = 0; i < allH2tags.length; i++) {
        allH2tags[i].style.color = "black";
      }

      for (i = 0; i < allH3tags.length; i++) {
        allH3tags[i].style.color = "black";
        allH3tags[i].style.textAlign = "left";

      }

      for (i = 0; i < allImgTags.length; i++) {
        allImgTags[i].style.display='none';
      }

      for (i = 0; i < removeTag.length; i++) {
        removeTag[i].style.display='none';
      }

      for (i = 0; i < onlyTextLeft.length; i++) {
        onlyTextLeft[i].className = "container s-follow";
      }

      for (i = 0; i < sNewsList.length; i++) {
        sNewsList[i].className = "";
        sNewsList[i].style.fontSize='10px';
      }

      for (i = 0; i < textOnlyOneColumn.length; i++) {
        textOnlyOneColumn[i].style.columnCount='1';
      }
      for (i = 0; i < textOnlyTemp.length; i++) {
        textOnlyTemp[i].style.display='block';
      }



      this.dataset.check = "false";
    } else {
      // backlog: do not reload page when restoring onlyText
      window.location.reload(true);

    }


// console.log(this.dataset.check);
//     if (this.dataset.check == 0) {
//     }


    // console.log(this);
  });




  //
  //   links[i].addEventListener("mouseleave", function (e) {
  //       this.style.backgroundColor='';
  //       // console.log(this.dataset.color);
  //   });
  //
  //     links[i].addEventListener("mouseenter", function (e) {
  //         this.style.backgroundColor=this.dataset.color;
  //         // console.log(this.dataset.color);
  //     });

</script>

<?php if ($wp_query->post->post_type == 'studentwebben'): ?>


<div class="footer-studentweb">
  <div class="col-12 line"></div>

  <div class="container">
    <div class="row">
      <div class="col-md-12 hided">
        <div class="row footer-studentweb-content">
          <div class="col-3">
            <p><b>Kontakta oss</b></p>
            <p>Telefon: 031 - 367 31 00</p>
            <p>Fullständiga kontaktuppgifter</p>
            <div class="row">
              <div class="col-12">
                <div class="row">
                  <img class="socialMedia" src="<?php echo get_template_directory_uri() ?>/assets/img/Facebook.svg"/>
                  <img class="socialMedia" src="<?php echo get_template_directory_uri() ?>/assets/img/Instagram.svg"/>
                  <img class="socialMedia" src="<?php echo get_template_directory_uri() ?>/assets/img/Linkedin.svg"/>

                </div>

              </div>

            </div>
          </div>
          <div class="col-3">
            <p><b>Besöksadress</b></p>
            <p>Högskoleområdet</p>
            <p>Lärdomsgatan 3, Göteborg</p>
            <a href="https://kartor.eniro.se/?c=57.706022,11.936272&z=14&l=aerial&q=%22L%C3%A4rdomsgatan%203,%20G%C3%B6teborg%22;geo">
              <p>Hitta hit</p>
            </a>
          </div>
          <div class="col-6">
            <h3>Snabblänkar</h3>
            <div class="row">
              <div class="col-6">
                <a href="#"><p>Självservice användarkonto</p></a>
                <a href="#"><p>Registrering och kontoaktivering</p></a>
                <a href="#"><p>Boka grupprum</p></a>
                <a href="#"><p>Studera utomlands</p></a>
                <a href="#"><p>Service Center</p></a>
              </div>
              <div class="col-6">
                <a href="#"><p>Bibloteket</p></a>
                <a href="#"><p>IT Helpdesk</p></a>
                <a href="#"><p>Ladoks webbtjänster</p></a>
                <a href="#"><p>Ping Pong</p></a>
                <a href="#"><p>Schema</p></a>
                <a href="#"><p>Office365</p></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 studentwebb-footer-logo">
        <img class="Y-logo" src="<?php echo get_template_directory_uri() ?>/assets/img/yrgo-nav.png"/>
        <p>© 2017 Yrgo</p>
      </div>

    </div>
  </div>
</div>

<?php else: ?>

<div class="footer">
  <img class="footer-image" src="<?php echo get_template_directory_uri() ?>/assets/img/footer.png"/>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="footer-left">
          <p>© 2017 Yrgo</p>
        </div>

        <div class="footer-right">
          <p>Kontakt</p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php endif; ?>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>

<!-- End of container div, starts in header.php -->
</div>


<script>
  let onlyText = document.querySelector('.onlyText');
  let allImg = document.querySelectorAll('.removeImg');
  let allAtags = document.querySelectorAll('a');
  let allPtags = document.querySelectorAll('p');
  let allH2tags = document.querySelectorAll('h2');



  console.log(allAtags);

  onlyText.addEventListener("click", function (e) {

    // display text only
    if (this.dataset.check == "true") {
      console.log('run');
      for (i = 0; i < allImg.length; i++) {
        allImg[i].style.backgroundImage = "";
        allImg[i].removeAttribute("class");
      }

      for (i = 0; i < allAtags.length; i++) {
        allAtags[i].style.color = "black";
      }

      for (i = 0; i < allPtags.length; i++) {
        allPtags[i].style.color = "black";
      }

      for (i = 0; i < allH2tags.length; i++) {
        allH2tags[i].style.color = "black";
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

<div class="footer">
  <video class="footer-image" src="<?php echo get_template_directory_uri() ?>/assets/img/Productive-Morning.mp4" autoplay poster="posterimage.jpg">

  </video>
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


<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>

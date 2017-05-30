<!-- This is a module that provides a simple image -->

<!-- Closes container div -->
</div>

<div class="row-image">
  <!-- Outputs the background image -->
  <img class="image-img" src="<?= $this->getImage() ?>" alt="">
  <div class="row">
    <div class="col-md-12">
      <div class="logotype-on-image">
        <!-- Outputs the logotype -->
        <img class="logotype-img" src="<?= $this->getLogotype() ?>" alt="">
      </div>
    </div>
  </div>
</div>

<!-- Start of container for next module -->
<div class="container">

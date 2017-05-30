<!-- This is a module that provides header with title and description -->

<!-- Closes container div -->
</div>

<div class="row-header">
  <!-- Outputs image -->
  <img class="header-img" src="<?= $this->getImage() ?>" alt="">
  <div class="container">
    <div class="row">
      <div class="col-md-7 col-header">
        <!-- Outputs title -->
        <h2><?= $this->getTitle() ?></h2>
        <!-- Outputs description -->
        <h2 class="description"><?= $this->getDescription() ?></h2>
      </div>
    </div>
  </div>
</div>

<!-- Start of container for next module -->
<div class="container">

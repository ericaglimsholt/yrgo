<!-- This is a module that provides contact information -->

<div class="row contact">
  <div class="col-md-6">
    <!-- Outputs title -->
    <h1><?= $this->getTitle() ?></h1>
    <div class="contact-form">
      <!-- Outputs contact form -->
      <?= $this->getContactform() ?>
    </div>
  </div>
  <div class="col-md-6 ">
    <div class="content-info">
      <!-- Outputs logotype -->
      <img src="<?= $this->getLogotype() ?>" alt="">
      <!-- Outputs contact information -->
      <?= $this->getContact() ?>
    </div>
  </div>
</div>

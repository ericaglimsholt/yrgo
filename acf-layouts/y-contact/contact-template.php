<div class="row contact">
  <div class="col-md-6">
    <h1><?= $this->getTitle() ?></h1>

    <div class="contact-form">
      <?= $this->getContactform() ?>
    </div>
  </div>
  <div class="col-md-6">
    <img src="<?= $this->getLogotype() ?>" alt="">
    <?= $this->getContact() ?>
  </div>
</div>

<!-- This is a module that provides a text block -->

<div class="row textblock">
  <div class="col-md-12">
    <!-- Outputs title -->
    <h1><?= $this->getTitle() ?></h1>
    <p class="preamble-textblock">
      <!-- Outputs preamble text -->
      <?= $this->getPreamble() ?>
    </p>
    <div class="two-columns">
      <!-- Outputs description text -->
      <?= $this->getDescription() ?>
    </div>
  </div>
</div>

<!-- This is a module that provides a simple news feed -->

<!-- Ends container div -->
</div>

<div class="news-startpage">
  <div class="row">
    <div class="col-md-6 active">
      <!-- Outputs date -->
      <h3><?= $this->getDateFocus() ?></h3>
      <div class="center-news">
        <!-- Outputs title -->
        <h2><?= $this->getTitleFocus() ?></h2>
      </div>
    </div>
    <div class="col-md-6">
      <!-- Outputs date -->
      <h3><?= $this->getDate() ?></h3>
      <div class="center-news">
        <!-- Outputs title -->
          <h2><?= $this->getTitle() ?></h2>
      </div>
    </div>
  </div>
</div>

<!-- Start container div for preperation for next div -->
<div class="container">

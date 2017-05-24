<!-- close container -->
</div>

<div class="container">

  <div class="row marginTop s-exams">
    <div class="col-6">
      <h2><?= get_sub_field('title') ?></h2>
      <p><?= get_sub_field('content')?></p>
    </div>
  </div>

  <div class="row">

    <div class="col-8 reserve-date">
      <p>Datum och tid</p>
      <div class="row reserve-input">
        <div class="col-1 reserve-box"></div>
        <p>:</p>
        <div class="col-1 reserve-box"></div>
      </div>

    <div class="row">
      <div class="col-4">
        <div class="reserve-calender">

          <div class="row">
            <div class="reserve-date">
              <?php for ($i=1; $i < 31; $i++) { ?>
                <div class="reserve-circle"><?= $i ?></div>
                <?php } ?>
              </div>
          </div>

          <div class="row">
            <div class="col-2 reserve-arrows split">
              <p><</p>
              <p>Juni</p>
              <p>></p>
            </div>

          </div>
        </div>
      </div>

    </div>
    </div>

    <div class="col-4 reserve-date">
        <p>CAMPUS</p>
        <div class="row">
          <div class="col-6 reserve-box"></div>
        </div>

        <p>Rum</p>
        <div class="row">
          <div class="col-6 reserve-box"></div>
        </div>

        <div class="reserve-button">
            <p>Boka</p>
        </div>

      </div>
    </div>

    </div>




</div>

<div class="container">

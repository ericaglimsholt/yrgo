<?php
class Links extends ACFModule {
    public function template() {
        return 'links-template.php';
    }

  public function setBackground($background) {
    $this->background = $background ;
  }

  public function getBackground(){
    return $this->background;
  }

  public function setHeadlineField($headline) {
    $this->headline = $headline ;
  }

  public function getHeadlineField(){
    return $this->headline;
  }

  public function setOpacityColor($opacityColor) {
    $this->opacityColor = $opacityColor;
  }

  public function getOpacityColor(){
    return $this->opacityColor;
  }
}

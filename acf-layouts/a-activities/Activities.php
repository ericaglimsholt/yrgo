<?php
class Activities extends ACFModule {
    public function template() {
        return 'activities-template.php';
    }

  public function setHeadlineField($headline) {
    $this->headline = $headline ;
  }

  public function getHeadlineField(){
    return $this->headline;
  }

  public function setImgField($img) {
    $this->img = $img ;
  }

  public function getImgField(){
    return $this->img;
  }

  public function setContentField($content) {
    $this->content = $content ;
  }

  public function getContentField(){
    return $this->content;
  }

}

<?php
class YHeader extends ACFModule {
  public function template() {
      return 'header-template.php';
  }

  public function setImage($image) {
    $this->image = $image ;
  }

  public function getImage(){
    return $this->image;
  }

  public function setTitle($title) {
    $this->title = $title ;
  }

  public function getTitle(){
    return $this->title;
  }

  public function setStartTitle($start) {
    $this->start = $start ;
  }

  public function getStartTitle(){
    return $this->start;
  }

  public function setAreaTitle($area) {
    $this->are = $area ;
  }

  public function getAreaTitle(){
    return $this->area;
  }
}

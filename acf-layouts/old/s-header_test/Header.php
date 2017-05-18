<?php
class Header extends ACFModule {
    public function template() {
        return 'header-template.php';
    }

  public function setTitleField($title) {
    $this->title = $title ;
  }

  public function getTitleField(){
    return $this->title;
  }

  public function setSemesterPeriodField($semesterPeriod) {
    $this->semesterPeriod = $semesterPeriod ;
  }

  public function getSemesterPeriodField(){
    return $this->semesterPeriod;
  }

  public function setImage($image) {
    $this->image = $image;
  }

  public function getImage(){
    return $this->image;
  }
}

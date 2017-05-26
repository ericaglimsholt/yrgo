<?php
class YLinks extends ACFModule {
  public function template() {
      return 'linkssingle-template.php';
  }

  public function setImage($image) {
    $this->image = $image ;
  }

  public function getImage(){
    return $this->image;
  }

  public function setEducation($education) {
    $this->education = $education ;
  }

  public function getEducation(){
    return $this->education;
  }

  public function setLink($link) {
    $this->link = $link ;
  }

  public function getLink(){
    return $this->link;
  }

}

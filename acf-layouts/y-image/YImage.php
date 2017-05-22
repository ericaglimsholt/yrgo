<?php
class YImage extends ACFModule {
  public function template() {
      return 'image-template.php';
  }

  public function setImage($image) {
    $this->image = $image ;
  }

  public function getImage(){
    return $this->image;
  }

  public function setLogotype($logotype) {
    $this->logotype = $logotype ;
  }

  public function getLogotype(){
    return $this->logotype;
  }

}

<?php
class Contactschools extends ACFModule {
  public function template() {
      return 'contact-schools-template.php';
  }

  public function setImage($image) {
    $this->image = $image ;
  }

  public function getImage(){
    return $this->image;
  }

  public function setAreas($areas) {
    $this->areas = $areas ;
  }

  public function getAreas(){
    return $this->areas;
  }

  public function setLogotype($logotype) {
    $this->logotype = $logotype ;
  }

  public function getLogotype(){
    return $this->logotype;
  }

  public function setAddress($address) {
    $this->address = $address ;
  }

  public function getAddress(){
    return $this->address;
  }

  public function setReception($reception) {
    $this->reception = $reception ;
  }

  public function getReception(){
    return $this->reception;
  }
  public function setMaps($maps) {
    $this->maps = $maps ;
  }

  public function getMaps(){
    return $this->maps;
  }
}

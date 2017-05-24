<?php
class Textblock extends ACFModule {
  public function template() {
      return 'textblock-template.php';
  }

  public function setTitle($title) {
    $this->title = $title ;
  }

  public function getTitle(){
    return $this->title;
  }

  public function setPreamble($preamble) {
    $this->preamble = $preamble ;
  }

  public function getPreamble(){
    return $this->preamble;
  }

  public function setDescription($description) {
    $this->description = $description ;
  }

  public function getDescription(){
    return $this->description;
  }

}

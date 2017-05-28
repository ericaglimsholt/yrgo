<?php
class Headerempty extends ACFModule {
  public function template() {
      return 'header-empty-template.php';
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

  public function setDescription($description) {
    $this->description = $description ;
  }

  public function getDescription(){
    return $this->description;
  }
}

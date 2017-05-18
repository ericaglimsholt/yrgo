<?php
class Startpage extends ACFModule {
    public function template() {
        return 'startpage-template.php';
    }

  public function setTitleField($title) {
    $this->title = $title ;
  }

  public function getTitleField(){
    return $this->title;
  }

  public function setField($field) {
    $this->field = $field ;
  }

  public function getField(){
    return $this->field;
  }

  public function setPrograms($programs) {
    $this->programs = $programs;
  }

  public function getPrograms(){
    return $this->programs;
  }
}

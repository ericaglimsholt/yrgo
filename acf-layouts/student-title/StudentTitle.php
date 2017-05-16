<?php
class Startpage extends ACFModule {
    public function template() {
        return 'student-title-template.php';
    }

  public function setTitleField($studenttitle) {
    $this->studenttitle = $studenttitle;
  }

  public function getTitleField(){
    return $this->studenttitle;
  }
}

<?php
class Reserve extends ACFModule {
    public function template() {
        return 'reserve-template.php';
    }

  public function setTitleField($title) {
    $this->title = $title ;
  }

  public function getTitleField(){
    return $this->title;
  }

  public function setContentField($content) {
    $this->content = $content ;
  }

  public function getContentField(){
    return $this->content;
  }

}

<?php
class News extends ACFModule {
  public function template() {
      return 'news-template.php';
  }

  public function setTitleFocus($title_focus) {
    $this->title_focus = $title_focus ;
  }

  public function getTitleFocus(){
    return $this->title_focus;
  }

  public function setTitle($title) {
    $this->title = $title ;
  }

  public function getTitle(){
    return $this->title;
  }
}

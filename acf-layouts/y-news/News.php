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

  public function setDateFocus($date_Focus) {
    $this->date_focus = $date_Focus ;
  }

  public function getDateFocus(){
    return $this->date_focus;
  }

  public function setDate($date) {
    $this->date = $date ;
  }

  public function getDate(){
    return $this->date;
  }
}

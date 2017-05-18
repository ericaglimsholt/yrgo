<?php
class News extends ACFModule {
    public function template() {
        return 'news-template.php';
    }


  public function setHeadlineField($headline) {
    $this->headline = $headline ;
  }

  public function getHeadlineField(){
    return $this->headline;
  }

  public function setContentField($content) {
    $this->content = $content ;
  }

  public function getContentField(){
    return $this->content;
  }

}

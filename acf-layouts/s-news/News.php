<?php
class News extends ACFModule {
    public function template() {
        return 'news-template.php';
    }
    public function setBackgroundImg($backgroundImg) {
      $this->backgroundImg = $backgroundImg;
    }

    public function getBackgroundImg(){
      return $this->backgroundImg;
    }

}

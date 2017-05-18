<?php
class Follow extends ACFModule {
    public function template() {
        return 'follow-template.php';
    }
    public function setBackgroundImg($backgroundImg) {
      $this->backgroundImg = $backgroundImg;
    }

    public function getBackgroundImg(){
      return $this->backgroundImg;
    }

}

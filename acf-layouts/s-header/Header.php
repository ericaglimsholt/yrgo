<?php
class Header extends ACFModule {
    public function template() {
        return 'header-template.php';
    }

  public function setLogo($logo) {
    $this->logo = $logo ;
  }

  public function getLogo(){
    return $this->logo;
  }

  public function setSubTitleField($subTitle) {
    $this->subTitle = $subTitle ;
  }

  public function getSubTitleField(){
    return $this->subTitle;
  }

  public function setBackgroundImg($backgroundImg) {
    $this->backgroundImg = $backgroundImg;
  }

  public function getBackgroundImg(){
    return $this->backgroundImg;
  }

}

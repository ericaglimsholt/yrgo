<?php
class DynamicHeader extends ACFModule {
    public function template() {
        return 'dynamicHeader-template.php';
    }

    public function setTitleField($title) {
      $this->title = $title;
    }

    public function getTitleField(){
      return $this->title;
    }

    public function setCategoryField($category) {
      $this->category = $category;
    }

    public function getCategoryField(){
      return $this->category;
    }

    public function setColorTitle($colorTitle) {
      $this->colorTitle = $colorTitle;
    }

    public function getColorTitle(){
      return $this->colorTitle;
    }

    public function setBackgroundImg($backgroundImg) {
      $this->backgroundImg = $backgroundImg;
    }

    public function getBackgroundImg(){
      return $this->backgroundImg;
    }

    public function setNewsHeadlinesField($newsHeadlines) {
      $this->newsHeadlines = $newsHeadlines;
    }

    public function getNewsHeadlinesField(){
      return $this->newsHeadlines;
    }


}

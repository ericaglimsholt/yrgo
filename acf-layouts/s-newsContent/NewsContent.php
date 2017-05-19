<?php
class NewsContent extends ACFModule {
    public function template() {
        return 'newsContent-template.php';
    }
    public function setNewsContentField($newsContent) {
      $this->newsContent = $newsContent;
    }

    public function getNewsContentField(){
      return $this->newsContent;
    }

}

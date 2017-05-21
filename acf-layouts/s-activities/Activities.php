<?php
class Activities extends ACFModule {
    public function template() {
        return 'activities-template.php';
    }
    public function setBackgroundImg($backgroundImg) {
      $this->backgroundImg = $backgroundImg;
    }

    public function getBackgroundImg(){
      return $this->backgroundImg;
    }

    public function setActivitiesHeadlinesField($activitiesHeadlines) {
      $this->activitiesHeadlines = $activitiesHeadlines;
    }

    public function getActivitiesHeadlinesField(){
      return $this->activitiesHeadlines;
    }


}

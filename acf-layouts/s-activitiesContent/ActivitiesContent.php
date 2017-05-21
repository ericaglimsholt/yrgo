<?php
class ActivitiesContent extends ACFModule {
    public function template() {
        return 'activitiesContent-template.php';
    }
    public function setActivitiesContentField($activitiesContent) {
      $this->activitiesContent = $activitiesContent;
    }

    public function getActivitiesContentField(){
      return $this->activitiesContent;
    }

}

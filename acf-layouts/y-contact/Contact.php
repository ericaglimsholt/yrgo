<?php
class Contact extends ACFModule {
  public function template() {
      return 'contact-template.php';
  }

  public function setTitle($title) {
    $this->title = $title ;
  }

  public function getTitle(){
    return $this->title;
  }

  public function setContactform($contactform) {
    $this->contactform = $contactform ;
  }

  public function getContactform(){
    return $this->contactform;
  }

  public function setLogotype($logotype) {
    $this->logotype = $logotype ;
  }

  public function getLogotype(){
    return $this->logotype;
  }

  public function setContact($contact) {
    $this->contact = $contact ;
  }

  public function getContact(){
    return $this->contact;
  }
}
